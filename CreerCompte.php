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
        $prenom=$_POST['prenom'];
        $nomf=$_POST['nomf'];
        $email=$_POST['email'];
        $password=$_POST['password'];  
        $num=$_POST['num'];
        $dataN=$_POST['dataN'];

      include 'database.php';
     //  $sql=mysqli_query($db,"SELECT * FROM`creercompte` where Email='$email'");
            //if(mysqli_num_rows($sql)>0)
                //{
//      echo "Email Id Already Exists"; 
//      	exit;
            //}
        
            
      //2-Préparer la requête
        $sql="INSERT INTO `creercompte`(`id`, `prenom`, `nomf`, `email`, `password`, `num`, `dataN`) VALUES (NULL, '".$prenom."','".$nomf."', '".$email."','".$password."','".$num."', '".$dataN."');";
            //echo $sql;
        //3-Exécuter la requête créer
            $r=$db->query($sql);
          
        echo "bien creation" ;
        ?>

        
        
        
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    </body>
</html>