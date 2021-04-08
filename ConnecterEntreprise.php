<?php 
        include 'database.php';

        $password=$_POST['password'];
        $email=$_POST['email'];
        //1-Se connecter à la base de données

            //select toutes events
               $sql = "SELECT * FROM `entreprise`";
                $s=$db->query($sql);
                $trouve=false;
                $resultat=$s->fetchALL(PDO::FETCH_ASSOC);
                for($i=0;$i<count($resultat);$i++){
                if ($resultat[$i]["email"] == $email && $resultat[$i]["password"] == $password){
                $_SESSION["login"]=$resultat[$i]["email"];
                $trouve=true;
                }
                    }
        if($trouve){
        header('Location:creerEven.html');
        }else{	
                 echo"<script>
            alert('veuillez vérifier votre email ou password');
            window.location='test.html'
            </script>";
}
    


?>






