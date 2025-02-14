<?php
// Database Connection
$servername = "localhost";
$username = "root";  // Change according to your DB user
$password = "";  // Change according to your DB password
$dbname = "food_ordering";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='product-card'>";
        echo "<img src='images/" . $row['image'] . "' alt='" . $row['name'] . "'>";
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p class='price'>Price: Rs. " . $row['price'] . "</p>";
        echo "<p>Quantity: " . $row['quantity'] . "</p>";
        echo "<p>Country of Origin: " . $row['country'] . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No products available</p>";
}

$conn->close();
?>
