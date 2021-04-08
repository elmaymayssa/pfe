<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new test</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>

    <body>
<?php
session_start();
if(isset($_POST['ok']))
{
    extract($_POST);
    include 'database.php';
   $query = "SELECT * FROM creercompte WHERE email='$email' AND password='$password'";
  	$results = mysqli_query($db, $query);
    $row  = mysqli_fetch_array($results);
    if(is_array($row))
    {   $_SESSION["ID"] = $row['ID'];
        $_SESSION["Email"]=$row['Email'];
     echo "ok  ID/Password";
     
    }
    else
    {   echo "Invalid Email ID/Password";
    }
}
?>
        
    </body>
</html>