<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://codepen.io/gymratpacks/pen/VKzBEp#0">
  <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>

  <style>
    *, *:before, *:after {
      -moz-box-sizing: border-box;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      font-family: 'Nunito', sans-serif;
      color: #384047;
    }

    form {
      max-width: 300px;
      margin: 10px auto;
      padding: 10px 20px;
      background: #f4f7f8;
      border-radius: 10px;
      color:#000000;
    }

    h1 {
      margin: 0 0 30px 0;
      text-align: center;
    }

    input[type="text"],
    input[type="email"],
    textarea,
    select {
      background: rgba(255,255,255,0.1);
      border: none;
      font-size: 16px;
      height: auto;
      margin: 0;
      outline: 0;
      padding: 15px;
      width: 100%;
      background-color: #e8eeef;
      color: #202020;
      box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
      margin-bottom: 30px;
    }

    select {
      padding: 6px;
      height: 32px;
      border-radius: 2px;
    }

    button {
      padding: 19px 39px 18px 39px;
      color: #FFF;
      background-color: #4bc970;
      font-size: 18px;
      text-align: center;
      font-style: normal;
      border-radius: 5px;
      width: 100%;
      border: 1px solid #3ac162;
      border-width: 1px 1px 3px;
      box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
      margin-bottom: 10px;
    }

    fieldset {
      margin-bottom: 30px;
      border: none;
    }

    label {
      display: block;
      margin-bottom: 8px;
    }

    label.light {
      font-weight: 300;
      display: inline;
    }

    .number {
      background-color: #5fcf80;
      color: #fff;
      height: 30px;
      width: 30px;
      display: inline-block;
      font-size: 0.8em;
      margin-right: 4px;
      line-height: 30px;
      text-align: center;
      text-shadow: 0 1px 0 rgba(255,255,255,0.2);
      border-radius: 100%;
    }

    @media screen and (min-width: 480px) {

      form {
        max-width: 480px;
      }

    }

  </style>


  <title>Contact Form</title>
  
</head>`
<body>

  <div class="row">
    <div class="col-md-12">      
      <form action="first.php" method="POST">
      <h1>Contact Form</h1>

      <fieldset>
        
        <label for="name">First Name:</label>
        <input type="text" id="name" name="firstName">

        <label for="name">Last Name:</label>
        <input type="text" id="name" name="lastName">

        <label for="email">Email:</label>
        <input type="email" id="mail" name="email">
          
        <label for="address">Address:</label>
        <textarea id="address" name="address" placeholder="1234 Main St"></textarea>

        <label for="select">Select</label>
        <select id="select" name='select' required>
          <option selected value='' style="
      font-color:#202020;">Choose An Option</option>
          <option value='Query'>Query</option>
          <option value='Feedback'>Feedback</option>
          <option value='Complaint'>Complaint</option>
          <option value='Other'>Other</option>
        </select>

        <label for="inputComment">Comment</label>
        <textarea type="text"id="inputComment" placeholder="Tell Us More" name="comment"></textarea>
        
      </fieldset>
        <br>
        <button onclick="added()" type="submit" name='submit' class="btn btn-primary">SUBMIT</button>
      </form>

  
    <?php
      function added(){
          $message="contact Added Successfull";
        if(isset($_SESSION['flash_message_type']) && $_SESSION['flash_message_type']==='success'){
          echo "<script >alert('$message');</script>";
          unset($_SESSION['flash_message']);
        }
      }
    ?>
  <script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
  </script>
</body>
</html>