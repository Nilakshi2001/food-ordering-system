<?php
session_start();
include 'db_connect.php'; // Use the centralized DB connection

echo "<h2>Your Cart</h2>";

if (!isset($_SESSION['cart']) || count($_SESSION['cart']) === 0) {
    echo "Cart is empty.";
} else {
    $cart_ids = implode(",", $_SESSION['cart']);
    $result = $conn->query("SELECT * FROM products WHERE id IN ($cart_ids)");

    while ($row = $result->fetch_assoc()) {
        echo "<div style='margin-bottom: 10px;'>
                <strong>{$row['name']}</strong> - \${$row['price']}
              </div>";
    }

    echo "<a href='checkout.php'>Proceed to Checkout</a>";
}

$conn->close();
?>
