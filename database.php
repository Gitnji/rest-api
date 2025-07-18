<?php
$host = 'localhost';
$port = '5432';
$username = 'postgres';
$password = 'nji237';
$dbname = 'users';

//create connection
try {
    $dsn = "pgsql:host=$host;dbname=$dbname;port=$port";
    $pdo = new PDO($dsn, $username, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
