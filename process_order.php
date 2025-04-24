<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'db_connect.php'; // ✅ Use centralized DB connection

    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $product_id = (int)$_POST['product_id'];
    
    // Process discount code (this is just a placeholder)
    $discount = 0;
    if (!empty($_POST['discount'])) {
        // ✅ Add proper discount validation here later
        $discount = 10; // Example: 10% off
    }

    // Insert order into the database
    $sql = "INSERT INTO orders (customer_name, email, address, product_id, discount) 
            VALUES ('$name', '$email', '$address', $product_id, $discount)";
    
    if ($conn->query($sql)) {
        header('Location: thank_you.php'); // Redirect after successful order
        exit();
    } else {
        echo "Order failed: " . $conn->error;
    }

    $conn->close();
}
?>
