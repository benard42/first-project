<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db="newaccount";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Create database
$sql = "CREATE DATABASE newaccount";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}



?>
