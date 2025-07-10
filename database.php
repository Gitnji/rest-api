<?php
$username = 'localhost';
$username = 'root';
$passsword = '';
$dbname = 'users';

//create connection
$conn = mysqli_connect($host, $username, $passsword, $dbname);
//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";

}
?>