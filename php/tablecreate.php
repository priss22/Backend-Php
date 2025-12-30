<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname="priss";
$conn= new mysqli($servername,$username,$password,$dbname);
if($conn-> connect_error){
    die("connection failed:" .$conn-> connect_error);
}
$sql="Create Table stud_info(
id int(6)unsigned auto_increment primary key,
firstname varchar(30) not null,
lastname varchar(30) not null,
email varchar(40))";
if ($conn->query($sql)){
    echo" Table student-information created successfully";
}
else{
    echo"Error creating table:" .$conn-> error;
}$conn-> close();
?>