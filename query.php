<?php
require 'conn.php';

// Registration function
function register($conn) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
        $reg = mysqli_real_escape_string($conn, $_POST['reg']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $serial = mysqli_real_escape_string($conn, $_POST['serial']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Check for duplicate email or reg
        $check_sql = "SELECT * FROM USERS WHERE email = '$email' OR Reg = '$reg'";
        $result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($result) > 0) {
            echo "Error: Duplicate email or registration number.";
        } else {
            // Insert new user
            $sql = "INSERT INTO USERS (fullname, Reg, email, serial, password)
                    VALUES ('$fullname', '$reg', '$email', '$serial', '$password')";

            if (mysqli_query($conn, $sql)) {
                echo "Registration successful!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
}

// Login function
function login($conn) {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $reg = mysqli_real_escape_string($conn, $_POST['reg']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $sql = "SELECT * FROM USERS WHERE Reg = '$reg' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo "Login successful!";
        } else {
            echo "Invalid registration number or password.";
        }
    }
}
?>
