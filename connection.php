<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "flashcard_app";

// Create connection
$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 