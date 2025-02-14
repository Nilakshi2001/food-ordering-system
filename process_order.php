<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $conn = new mysqli('localhost', 'root', '', 'food_ordering');
    
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $address = $conn->real_escape_string($_POST['address']);
    $product_id = (int)$_POST['product_id'];
    
    // Process discount code
    $discount = 0;
    if (!empty($_POST['discount'])) {
        // Add discount validation logic here
        $discount = 10; // Example 10% discount
    }
    
    // Insert order
    $conn->query("INSERT INTO orders (customer_name, email, address, product_id) 
                VALUES ('$name', '$email', '$address', $product_id)");
    
    // Redirect to thank you page
    header('Location: thank_you.php');
    exit();
}
?>