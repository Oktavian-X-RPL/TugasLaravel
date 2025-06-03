<?php
// config/database.php
$host = 'localhost';
$dbname = 'toko_online_kelompok';
$username = 'root';
$password = '';
?>

<div class="container my-5">
        <h2>Featured Products</h2>
        <div class="row">
            <?php
            $stmt = $pdo->query("SELECT * FROM products ORDER BY created_at DESC LIMIT 8");
            while($product = $stmt->fetch()):
            ?>
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="<?php echo htmlspecialchars($product['image_url']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['name']); ?></h5>
                        <p class="card-text">$<?php echo number_format($product['price'], 2); ?></p>
                        <form action="add-to-cart.php" method="POST">
                            <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
