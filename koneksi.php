<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'portofolio_anggy';

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Fixed the missing concatenation operator
}
?>
