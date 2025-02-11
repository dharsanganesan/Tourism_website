<?php
// Database credentials
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "project"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn || $conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} 

// Uncomment below to confirm successful connection
// echo "Database connected successfully!";
?>
