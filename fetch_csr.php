<?php
include 'db_connect.php'; // Database connection

$result = $conn->query("SELECT description FROM csr_initiatives");

echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['description']}</li>";
}
echo "</ul>";

$conn->close();
?>


