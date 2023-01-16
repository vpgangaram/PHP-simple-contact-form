<?php
$servername = "localhost";
$username = "root";
$password = "V#Carem9";
$dbname="myDB";

// Connection
$conn = new mysqli($servername, $username, $password,$dbname);

// For checking if connection is
// successful or not
if ($conn->connect_error) {
die("Connection failed: "
	. $conn->connect_error);
}
echo "Connected successfully";

$sql= "CREATE TABLE contacts(col1 INT(2) PRIMARY KEY,firstName VARCHAR(20),lastName VARCHAR(20),email VARCHAR(20),addres VARCHAR(50),selectOption VARCHAR(20),)"; 

$conn->query($sql);

?>