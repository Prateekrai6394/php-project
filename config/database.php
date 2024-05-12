<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "php-tutorial";


//create connection
$conn = @new mysqli($servername, $username, $password, $dbName);


//check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// else {
//     echo "Connection Successfull";
// }


