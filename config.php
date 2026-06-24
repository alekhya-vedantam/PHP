<?php
// Database settings
$host = "localhost";
$dbname = "ecommerce_db";
$username = "root";
$password = "";

// Create PDO connection inside a try block
try {

    // Create connection object
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $username,
        $password
    );

    // Show errors if something goes wrong
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

    // Stop execution and display error message
    die("Connection failed: " . $e->getMessage());
}
?>
