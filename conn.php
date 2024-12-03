<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "uplift");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL to create table USERS if not exists
$sql = "CREATE TABLE IF NOT EXISTS USERS (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(50) NOT NULL,
    Reg VARCHAR(11) NOT NULL UNIQUE,
    email VARCHAR(30) NOT NULL UNIQUE,
    serial VARCHAR(15) NOT NULL,
    password VARCHAR(40) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table USERS created successfully <br>";
} else {
    echo "Error creating table: <br>" . mysqli_error($conn);
}
?>
