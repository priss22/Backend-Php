<?php
// Database configuration
$servername = "localhost";
$username   = "root";
$password   = "";   // Change if needed
$dbname     = "testdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Data to insert
$usernameValue = "john123";
$emailValue    = "john@example.com";

// SQL Insert Query
$sql = "INSERT INTO users (username, email) VALUES (?, ?)";

// Prepare statement
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usernameValue, $emailValue);

// Execute query
if ($stmt->execute()) {
    echo "New record inserted successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Close
$stmt->close();
$conn->close();
?>
