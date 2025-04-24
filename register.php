<?php
include 'db_connect.php'; // Use the central database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $conn->real_escape_string($_POST["full_name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $check = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($check->num_rows > 0) {
        echo "Email already registered.";
    } else {
        $sql = "INSERT INTO users (full_name, email, password) VALUES ('$full_name', '$email', '$password')";
        if ($conn->query($sql)) {
            echo "Registration successful.";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
$conn->close();
?>
