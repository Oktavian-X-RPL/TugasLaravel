<?php
    // cart.php
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }

    // Get cart items
    $stmt = $pdo->prepare("
        SELECT c.*, p.name, p.price, p.image_url 
        FROM cart c 
        JOIN products p ON c.product_id = p.id 
        WHERE c.user_id = ?
    ");
    $stmt->execute([$_SESSION['user_id']]);
    $cart_items = $stmt->fetchAll();

    $total = 0;
    foreach ($cart_items as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    ?>
    <div class="container">
        <h2>Shopping Cart</h2>
        <?php if(empty($cart_items)): ?>
            <p>Your cart is empty</p>
        <?php else: ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($cart_items as $item): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($item['name']); ?></td>
                                <td>$<?php echo number_format($item['price'], 2); ?></td>
                                <td>
                                    <form action="update-cart.php" method="POST" class="d-inline">
                                        <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                                        <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1" class="form-control" style="width: 80px;">
                                        <button type="submit" class="btn btn-sm btn-primary">Update</button>
                                    </form>
                                </td>
                                <td>$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                                <td>
                                    <form action="remove-from-cart.php" method="POST" class="d-inline">
                                        <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                                        <button type="submit" class="btn btn-sm btn-danger">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-end"><strong>Total:</strong></td>
                            <td>$<?php echo number_format($total, 2); ?></td>
                            <td>
                                <form action="checkout.php" method="POST">
                                    <button type="submit" class="btn btn-success">Checkout</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        <?php endif; ?>
    </div>