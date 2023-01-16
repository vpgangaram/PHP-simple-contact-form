<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>qwertyuio</h1>
<?php


// $servername = "localhost";
// $username = "root";
// $password = "V#Carem9";
// $dbname="myDB";

// $conn = new mysqli($servername, $username, $password, $dbname);
// $sql="SELECT * FROM contacts";
// $res= $conn->query($sql);

// echo $res;

// echo $_POST['name'];

    ?>

<?php
    // ini_set('error_reporting', 6135);
    // ini_set('display_errors', 'On');
    $servername = "localhost";
    $username = "root";
    $password = "V#Carem9";
    $dbname="myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);
      
    if(isset($_POST["submit"])){
      $firstName=$_POST["firstName"];
      $lastName=$_POST["lastName"];
      $email=$_POST["email"];
      $address=$_POST["address"];
      $select=$_POST["select"];
      $comment=$_POST["comment"];
      $sql="INSERT INTO contacts(firstName, lastName, email, addres, selectOption, comment) VALUES('".$firstName."','".$lastName."','".$email."','".$address."','".$select."','".$comment."')";
      $conn->query($sql);      
    };

    $sql="SELECT * FROM contacts";
    $res= $conn->query($sql);
    echo $res;
   
  ?>
</body>
</html>