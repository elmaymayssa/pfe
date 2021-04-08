<?php 

        session_start();
     include 'database.php';

        $nomE=$_POST['nomE'];
        $password=$_POST['password'];
        $email=$_POST['email1'];
        $_SESSION['email']=$email;
        $logo=$_FILES['logo']['name'];
       
        //cryptage du password
       $hash=password_hash($password, PASSWORD_BCRYPT);
        //1-Se connecter à la base de données
        include 'database.php';
      //2-Préparer la requête
       $sql="INSERT INTO `entreprise`(`id`, `nomEntreprise`, `email`, `password`, `logo`) VALUES 
        (NULL, '".$nomE."','".$email."', '".$password."','".$logo."');";
            //echo $sql;
        //3-Exécuter la requête créer
           $r=$db->query($sql);
          move_uploaded_file($_FILES["logo"]["tmp_name"],"./images/".$_POST["nomE"].".jpg");            
            //select toutes events
               $sql = "SELECT COUNT(id) as countid FROM `entreprise`";
                $s=$db->query($sql);
                $nbligne = $s->fetch();
                     echo 'Il y a ' . $nbligne['countid'] . ' entrée dans la table.';
                    $trouve=true;
                        if($trouve){
                            header('Location:creerEven.html');
                                    }

?>