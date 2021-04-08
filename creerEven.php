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
        $nomEvent=$_POST['nomEvent'];
        $email=$_POST['email'];
        $logo=$_POST['logo'];
        $password=$_POST['password'];
        $dateD=$_POST['dateD'];     
        $dateF=$_POST['dateF'];  
        $heureD=$_POST['heureD'];  
        $heureF=$_POST['heureF'];  
        $programme =$_POST['programme'];
      include 'database.php';            
      //2-Préparer la requête
        $sql="INSERT INTO `evenement`(`id`, `nomEvent`, `email`, `password`, `logo`, `dateD`, `dateF`, `heureD`, `heureF`, `programme`) VALUES (NULL, '".$nomEvent."','".$email."', '".$password."', '".$logo."','".$dateD."','".$dateF."', '".$heureD."', '".$heureF."', '".$programme."');";
            //echo $sql;
        //3-Exécuter la requête créer
              $r=$db->query($sql);
              $sql="SELECT * FROM `evenement` where `email`='$email' ";
              $R=$db->query($sql);
              $r=$R->fetchALL(PDO::FETCH_ASSOC);            
              $res=json_encode($r);
              $myfile=fopen("dataEvent.json","w")or die("unable to open file!");
              fwrite($myfile,$res);
              fclose($myfile);
                $sql = "SELECT COUNT(id) as countid FROM `entreprise`";
                $s=$db->query($sql);
                $nbligne = $s->fetch();
    echo 'Il y a ' . $nbligne['countid'] . ' entrée dans la table.';
        ?>
    <div class="container my-5">
  <!-- Section: Block Content -->
  <section>
    <div class="row">
      <!-- New Products -->
      <div class="col-lg-4 col-md-12">
        <h4 class="text-center font-weight-bold dark-grey-text mb-5">
          <strong> Choisir votre Evenement</strong>
        </h4>
 <!-- Card -->
        <div class="card hoverable mb-4">
          <div class="card-body">
            <div class="row align-items-center">
  <div class="px-4">
    <div class="table-wrapper">
      <!--Table-->
      <table id="table" class="table table-hover mb-0">
        <!--Table head-->
        <thead>
          <tr>
              <th class="th-lg">
              <a>Nom de sociète </a>
            </th>
            <th class="th-lg">
              <a href="">Email Adresse</a>
            </th>
            <th class="th-lg">
              <a href="">Video  </a>
            </th>
            <th class="th-lg">
              <a href="">Couleur </a>
            </th>
            <th class="th-lg">
              <a href="">Position
              </a>
              </th>
          </tr>
        </thead>
        <!--Table head-->
        <!--Table body-->
      </table>
      <!--Table-->
    </div>
        </div>
              </div>
          </div>
        </div>
        <!-- Card -->
        </div>
      </div>
        </section>
    </div>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"   src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
       <script>
        $(document).ready(function(){
            $.getJSON('datastand1.json',function(result){
                var data='';
                $.each(result,function(key,value){
                    data+='<tr>';
                    data+='<td>'+value.logo+'</td>';
                    data+='<td>'+value.noms+'</td>';
                    data+='<td>'+value.email+'</td>';
                    data+='<td>'+value.video+'</td>';
                    data+='<td>'+value.couleur+'</td>';
                    data+='<td>'+value.position+'</td>';
                            });
                
                $('#table').append(data);
            })
        })
    </script>
</body>

</html>