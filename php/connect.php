<?php
$servername = "localhost";  // Server name
$username   = "root";       // MySQL username
$password   = "";           // MySQL password
// Create a connection
$conn = new mysqli($servername, $username, $password);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
