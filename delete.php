<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    

    <?php
    header('Location: first.php');  
    ini_set('error_reporting', 6135);
    ini_set('display_errors', 'On');

    echo "<a href='first.php'><button>Back to Table</button></a>";
    include_once 'db.php';
    $sql = "DELETE FROM contacts WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);

    $message="Deleted Successfully!";
    if(isset($_SESSION['flash_message_type']) && $_SESSION['flash_message_type']==='success'){
        echo "<script >alert('$message');</script>";
        unset($_SESSION['flash_message']);
    }
    ?>


</body>
</html>