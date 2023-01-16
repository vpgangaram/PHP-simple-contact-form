<?php
$servername = "localhost";
$username = "root";
$password = "V#Carem9";
$dbname="myDB";

// Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// For checking if connection is
// successful or not
if ($conn->connect_error) {
die("Connection failed: "
	. $conn->connect_error);
}

?>