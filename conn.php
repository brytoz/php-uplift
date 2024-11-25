<?php
// Connect to the database procedural
$conn = mysqli_connect("localhost", "root", "", "test_db");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Close the connection
mysqli_close($conn);


// Connect to the database Object-Oriented MySQLi
$mysqli = new mysqli("localhost", "root", "", "test_db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Close the connection
$mysqli->close();



// Connect using PDO
try {
    $pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Parse PUT request
    parse_str(file_get_contents("php://input"), $_PUT);


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>