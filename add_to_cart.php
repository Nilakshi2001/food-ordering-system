<?php
include 'db_connect.php';
session_start();

$product_id = (int)$_POST['product_id']; // Sanitize input

// Validate product exists in DB
$result = $conn->query("SELECT id FROM products WHERE id = $product_id");
if ($result && $result->num_rows === 1) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if (!in_array($product_id, $_SESSION['cart'])) {
        $_SESSION['cart'][] = $product_id;
    }
}

$conn->close();
header("Location: cart.php");
exit();
?>
