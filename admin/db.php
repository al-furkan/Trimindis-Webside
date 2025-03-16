<?php
$host = "localhost";
$user = "root"; // Change if needed
$password = ""; // Change if needed
$database = "trimindis"; // Change to your actual database name

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>