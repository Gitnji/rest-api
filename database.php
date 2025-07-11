<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users';

//create connection
$conn = mysqli_connect($host, $username, $password, $dbname);
//check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else{
    echo "conncted successfully";
}
?>
