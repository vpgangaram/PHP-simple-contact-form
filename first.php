<?php
session_start();
$_SESSION['flash_message_type'] = 'success';
$_SESSION['flash_message'] = 'Contact has been added successfully!';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    

    <style>
    *, *:before, *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        }

    body {
        font-family: 'Nunito', sans-serif;
        color: #384047;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
        text-align: center;    
    }
    
    h1 {
        padding-top:3vh;
        margin: 0 0 30px 0;
        text-align: center;
    }

    #table{
        padding-left: 2vw;
        padding-right: 2vw;
        align-items: center;
        text-align: center;
    }
    .thead{
        background-color: #1e1e1e;
        color: #fff;
        font-weight: bold;
        font-size: 2.5vh;
    }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Your Connections</h1>

<?php
    ini_set('error_reporting', 6135);
    ini_set('display_errors', 'On');
    include_once 'db.php';

        $message="Command Successfull Exicuted!";
        if(isset($_SESSION['flash_message_type']) && $_SESSION['flash_message_type']==='success'){
            echo "<script >alert('$message');</script>";
            unset($_SESSION['flash_message']);
        }
    
      
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

    $query = "SELECT id, firstName, lastName, email, addres, selectOption, comment FROM contacts";
    $result = mysqli_query($conn, $query);

    function delete($id){
        $servername = "localhost";
        $username = "root";
        $password = "V#Carem9";
        $dbname="myDB";

        $conn = new mysqli($servername, $username, $password, $dbname);
            $conn->query("DELETE FROM contacts WHERE id = $id");
    }
?>
    <div id='table'>
        <table class="table">
            <thead class="thead">
                <tr>
                    <th scope="col">Serial no</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Select</th>
                    <th scope="col">comment</th>
                    <th scope="col">Functions</th>
                </tr>
            </thead>
            <tbody>        
                <?php
                    if (mysqli_num_rows($result) > 0) {
                    $sn=1;
                    while($data = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $sn; ?> </th>
                    <td><?php echo $data['firstName']; ?> </td>
                    <td><?php echo $data['lastName']; ?> </td>
                    <td><?php echo $data['email']; ?> </td>
                    <td><?php echo $data['addres']; ?> </td>
                    <td><?php echo $data['selectOption']; ?> </td>
                    <td><?php echo $data['comment']; ?> </td>
                    <td><a href="delete.php?id=<?php echo $data["id"]; ?>"><button onclick='del()' class='btn btn-outline-danger'>Delete</button></a></td>
                <tr>
                <?php
                $sn++;}} else { ?>
                    <tr>
                    <td colspan="8">No data found</td>
                    </tr>
                <?php }
                
                
                
                ?>
        </tbody>
        </table>
    </div>

<script>
function deleteContact(id){
</body>
</html>