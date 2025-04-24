<?php
include 'db_connect.php'; // Reusable DB connection

$result = $conn->query("SELECT * FROM products");

while ($row = $result->fetch_assoc()) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin:10px;'>";
    echo "<img src='images/{$row['image']}' width='150'><br>";
    echo "<strong>{$row['name']}</strong><br>";
    echo "Price: $" . $row['price'] . "<br>";
    echo "<form method='POST' action='add_to_cart.php'>
            <input type='hidden' name='product_id' value='{$row['id']}'>
            <button type='submit'>Add to Cart</button>
          </form>";
    echo "</div>";
}

$conn->close();
?>

