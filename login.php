<?php
session_start();
include 'db_connect.php'; // ✅ Centralized DB connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST["email"]);
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["full_name"];
            echo "Login successful. <a href='index.php'>Go to Home</a>";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }
}

$conn->close();
?>

