<?php
$server = 'sql105.infinityfree.com';  // Use exactly what InfinityFree shows
$dbname = 'if0_39177989_ecommerce';   // Your actual database name
$username = 'if0_39177989';           // Must match your database prefix
$password = 'sambasiva2003';          // Your DB password

try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; // Optional: enable for testing
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage()); // You can hide details later
}
?>



