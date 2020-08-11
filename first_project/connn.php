<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db="server";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Create database
$sql = "CREATE DATABASE server";

if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}


mysqli_close($conn);
?>
