<?php
$host = "localhost"; // Change if MySQL is running on another host
$username = "root"; // Default for XAMPP
$password = ""; // Default is empty in XAMPP, use your password if set
$database = "attendance_system"; // Your database name

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
