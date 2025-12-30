<?php
$servername = "localhost";
$username = "root";
$password = ""; 
// Create connection
$conn = new mysqli($servername,$username,$password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//db create garne (first here)
$sql= "create database priss"; //if u want to create another dbname change only name
if($conn->query($sql)=== True){
    echo" Databse created successfully";
}
else{
    echo "Error in creating database:" .$conn->error;
}
$conn->close();
?>
