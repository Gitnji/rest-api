<?php
$host = 'dpg-d1t1o4ripnbc7381pas0-a';
$port = '5432';
$username = 'nji';
$password = 'fMGYkr5FEFHbIimTZcxKbSKgnlfvdGW7';
$dbname = 'users_yfjz';

//create connection
try {
    $dsn = "pgsql:host=$host;dbname=$dbname;port=$port";
    $pdo = new PDO($dsn, $username, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>