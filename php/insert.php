<?php
$servername = "localhost";
$username   = "root";
$password   = ""; // Change if needed
$dbname     = "priss";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Correct SQL (NO single quotes around table name, email must be quoted properly)
$sql ="INSERT INTO students (firstname, lastname, email)
        VALUES ('goblin', 'shang', 'zihu@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
