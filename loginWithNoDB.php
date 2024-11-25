<?php
function login($username, $password) {
    // Mock data
    $mockUser = "admin";
    $mockPass = "12345";

    if ($username === $mockUser && $password === $mockPass) {
        echo "Login successful! Welcome, $username.";
    } else {
        echo "Invalid username or password.";
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    login($username, $password);
}
?>
