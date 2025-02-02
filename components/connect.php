<?php

$host = 'localhost';
$port = 3307;
$username = 'root';
$password = '';
$dbname = 'games_of_sadhana';

try {
    // Create the DSN (Data Source Name)
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname";
    
    // Create a PDO instance
    $conn = new PDO($dsn, $username, $password);
    
    // Set error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connection successful!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>
