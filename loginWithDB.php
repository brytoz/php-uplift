<?php
function loginWithDB($username, $password) {
    // Database connection
    $conn = new mysqli("localhost", "root", "", "test_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if user exists
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Login successful! Welcome, $username.";
    } else {
        echo "Invalid username or password.";
    }

    $conn->close();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    loginWithDB($username, $password);
}
?>
