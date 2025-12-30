<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Priss";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, lastname, email FROM your_table_name";
$result = $conn->query($sql);
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "&nbsp; ";
        echo "Name: " . $row['lastname'] . "&nbsp; ";
        echo "Email: " . $row['email'] . "<br>";
    }
} else {
    echo "0 results";}
$conn->close();
?>
