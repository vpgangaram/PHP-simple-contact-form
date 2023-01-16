<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

  
  <form action="first.php" method="POST">
    <div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputFirstName">First Name</label>
        <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" name="firstName" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputLastName">Last Name</label>
        <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" name="lastName" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
    </div>
      <div class="form-group col-md-4">
        <label for="inputState">Select</label>
        <select id="inputState" class="form-control" name='select' required>
          <option selected value=''>Choose An Option</option>
          <option value='Query'>Query</option>
          <option value='Feedback'>Feedback</option>
          <option value='Complaint'>Complaint</option>
          <option value='Other'>Other</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputComment">Comment</label>
        <input type="text" class="form-control" id="inputComment" placeholder="Tell Us More" name="comment">
      </div>
    </div>
    <br>
    <button type="submit" name='submit' class="btn btn-primary">SUBMIT</button>
  </form>


  <?php
    // ini_set('error_reporting', 6135);
    // ini_set('display_errors', 'On');
    // $servername = "localhost";
    // $username = "root";
    // $password = "V#Carem9";
    // $dbname="myDB";

    // $conn = new mysqli($servername, $username, $password, $dbname);
    // // echo $conn->host_info . "\n<hr>";
      
    // if(isset($_POST["submit"])){
    //   $firstName=$_POST["firstName"];
    //   $lastName=$_POST["lastName"];
    //   $email=$_POST["email"];
    //   $address=$_POST["address"];
    //   $select=$_POST["select"];
    //   $comment=$_POST["comment"];
    //   $sql="INSERT INTO contacts(firstName, lastName, email, addres, selectOption, comment) VALUES('".$firstName."','".$lastName."','".$email."','".$address."','".$select."','".$comment."')";
    //   $conn->query($sql);      
    // };
        
    // echo gettype($firstName)."<br/>";
    // echo gettype($lastName)."<br/>";
    // echo gettype($email)."<br/>";
    // echo gettype($address)."<br/>";
    // echo gettype($select)."<br/>";
    // echo gettype($comment)."<br/>";
    // echo "<hr>";

    // echo ($firstName)."<br/>";
    // echo ($lastName)."<br/>";
    // echo ($email)."<br/>";
    // echo ($address)."<br/>";
    // echo ($select)."<br/>";
    // echo ($comment)."<br/>";

   


    
    // echo "<script> alert('success','<i class='fa fa-check'></i> This is a Sample Success Message.'); location.href='./'</script>";
  ?>

  

  <script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
  </script>
</body>
</html>