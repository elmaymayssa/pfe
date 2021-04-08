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
     <link rel="stylesheet" href="css/plan.css">
</head>

<body>
    <?php 
        session_start();
        extract($_POST);
        $noms=$_POST['noms'];
        $logo=$_FILES['logo']['name'];
        $video=$_POST['video'];  
        $couleur=$_POST['color'];
        $position=$_POST['position'];
           //1-Se connecter à la base de données
        include 'database.php';
      //2-Préparer la requête
$sql = "UPDATE `creerstand` SET noms='$noms',video='$video',couleur='$couleur',`position`='$position',`logo`='$logo' WHERE email='$noms'";
            //echo $sql;
        //3-Exécuter la requête créer
            $r=$db->query($sql);
           move_uploaded_file($_FILES["logo"]["tmp_name"],"./files/".$_POST["noms"].".jpg");
        ?>
    <!-- Optional JavaScript -->
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
</body>

</html>