<?php
//database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blogs";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    
}