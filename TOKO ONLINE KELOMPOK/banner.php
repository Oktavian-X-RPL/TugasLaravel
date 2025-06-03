<?php
// banner.php
session_start();
include 'config/database.php';

// Check if user is admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Handle banner upload
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'add':
                $title = $_POST['title'];
                $description = $_POST['description'];
                $type = $_POST['type'];
                $is_active = isset($_POST['is_active']) ? 1 : 0;

                // File upload handling
                if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
                    $filename = $_FILES['image']['name'];
                    $filetype = pathinfo($filename, PATHINFO_EXTENSION);

                    if (in_array(strtolower($filetype), $allowed)) {
                        // Create unique filename
                        $newname = uniqid() . '.' . $filetype;
                        $upload_path = 'images/banners/' . $newname;

                        if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_path)) {
                            $stmt = $pdo->prepare("INSERT INTO banners (title, description, image_url, type, is_active) VALUES (?, ?, ?, ?, ?)");
                            $stmt->execute([$title, $description, $upload_path, $type, $is_active]);
                            $_SESSION['success'] = "Banner added successfully!";
                        } else {
                            $_SESSION['error'] = "Failed to upload image.";
                        }
                    } else {
                        $_SESSION['error'] = "Invalid file type. Only JPG, JPEG, PNG & GIF files are allowed.";
                    }
                }
                break;

            case 'delete':
                if (isset($_POST['banner_id'])) {
                    // Get image path before deletion
                    $stmt = $pdo->prepare("SELECT image_url FROM banners WHERE id = ?");
                    $stmt->execute([$_POST['banner_id']]);
                    $banner = $stmt->fetch();

                    if ($banner && file_exists($banner['image_url'])) {
                        unlink($banner['image_url']); // Delete physical file
                    }

                    $stmt = $pdo->prepare("DELETE FROM banners WHERE id = ?");
                    $stmt->execute([$_POST['banner_id']]);
                    $_SESSION['success'] = "Banner deleted successfully!";
                }
                break;

            case 'update':
                $banner_id = $_POST['banner_id'];
                $title = $_POST['title'];
                $description = $_POST['description'];
                $type = $_POST['type'];
                $is_active = isset($_POST['is_active']) ? 1 : 0;

                if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                    // Handle new image upload
                    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
                    $filename = $_FILES['image']['name'];
                    $filetype = pathinfo($filename, PATHINFO_EXTENSION);

                    if (in_array(strtolower($filetype), $allowed)) {
                        $newname = uniqid() . '.' . $filetype;
                        $upload_path = 'images/banners/' . $newname;

                        // Delete old image
                        $stmt = $pdo->prepare("SELECT image_url FROM banners WHERE id = ?");
                        $stmt->execute([$banner_id]);
                        $old_banner = $stmt->fetch();
                        if ($old_banner && file_exists($old_banner['image_url'])) {
                            unlink($old_banner['image_url']);
                        }

                        if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_path)) {
                            $stmt = $pdo->prepare("UPDATE banners SET title = ?, description = ?, image_url = ?, type = ?, is_active = ? WHERE id = ?");
                            $stmt->execute([$title, $description, $upload_path, $type, $is_active, $banner_id]);
                        }
                    }
                } else {
                    // Update without changing image
                    $stmt = $pdo->prepare("UPDATE banners SET title = ?, description = ?, type = ?, is_active = ? WHERE id = ?");
                    $stmt->execute([$title, $description, $type, $is_active, $banner_id]);
                }
                $_SESSION['success'] = "Banner updated successfully!";
                break;
        }
        header("Location: banner.php");
        exit();
    }
}

// Get all banners
$stmt = $pdo->query("SELECT * FROM banners ORDER BY created_at DESC");
$banners = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Banner Management</h5>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBannerModal">
                            <i class="fas fa-plus"></i> Add New Banner
                        </button>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_SESSION['success'])): ?>
                            <div class="alert alert-success alert-dismissible fade show">
                                <?php 
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['error'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show">
                                <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                                ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Preview</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($banners as $banner): ?>
                                    <tr>
                                        <td>
                                            <img src="<?php echo htmlspecialchars($banner['image_url']); ?>" 
                                                 alt="<?php echo htmlspecialchars($banner['title']); ?>"
                                                 class="img-thumbnail"
                                                 style="max-width: 100px;">
                                        </td>
                                        <td><?php echo htmlspecialchars($banner['title']); ?></td>
                                        <td><?php echo htmlspecialchars(substr($banner['description'], 0, 50)) . '...'; ?></td>
                                        <td><?php echo htmlspecialchars($banner['type']); ?></td>
                                        <td>
                                            <span class="badge bg-<?php echo $banner['is_active'] ? 'success' : 'danger'; ?>">
                                                <?php echo $banner['is_active'] ? 'Active' : 'Inactive'; ?>
                                            </span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary edit-banner" 
                                                    data-bs-toggle="modal" 
                                                    data-bs-target="#editBannerModal"
                                                    data-banner='<?php echo json_encode($banner); ?>'>
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <form action="banner.php" method="POST" class="d-inline" 
                                                  onsubmit="return confirm('Are you sure you want to delete this banner?');">
                                                <input type="hidden" name="action" value="delete">
                                                <input type="hidden" name="banner_id" value="<?php echo $banner['id']; ?>">
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Banner Modal -->
    <div class="modal fade" id="addBannerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="banner.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="add">
                        
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Banner Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                            <div id="imagePreview" class="mt-2"></div>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="static">Static</option>
                                <option value="dynamic">Dynamic</option>
                            </select>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" checked>
                            <label class="form-check-label" for="is_active">Active</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Banner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Banner Modal -->
    <div class="modal fade" id="editBannerModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Banner</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="banner.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="banner_id" id="edit_banner_id">
                        
                        <div class="mb-3">
                            <label for="edit_title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="edit_title" name="title" required>
                        </div>

                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="edit_image" class="form-label">Banner Image</label>
                            <input type="file" class="form-control" id="edit_image" name="image" accept="image/*">
                            <small class="text-muted">Leave empty to keep current image</small>
                            <div id="editImagePreview" class="mt-2"></div>
                        </div>

                        <div class="mb-3">
                            <label for="edit_type" class="form-label">Type</label>
                            <select class="form-select" id="edit_type" name="type" required>
                                <option value="static">Static</option>
                                <option value="dynamic">Dynamic</option>
                            </select>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="edit_is_active" name="is_active">
                            <label class="form-check-label" for="edit_is_active">Active</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Banner</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>