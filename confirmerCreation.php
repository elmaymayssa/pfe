<!doctype html>
<html lang="en">

<head>
    <title>CreerStand</title>
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
            $email=$_SESSION['email'];
        //1-Se connecter à la base de données
    try{
        
  
        include 'database.php';
         echo $r=$_POST['position'];
        //2-Préparer la requête
     //   $sql="UPDATE `creerstand`
              //  SET `position`= REPLACE ( 'position' , '0', '$r') ";
           $sql = "UPDATE `creerstand` SET position='$_POST[position]' WHERE position=0"; 
    echo $sql;
        $q=$db->query($sql);
           echo error_log("UPDATE `creerstand` SET position=position+$r WHERE position=0",0);
    
    $sql="SELECT * FROM creerstand where `email`='$email' ";
                    $R=$db->query($sql);
                    $r=$R->fetchALL(PDO::FETCH_ASSOC);
                               
        $res=json_encode($r);
    $myfile=fopen("datastand1.json","w")or die("unable to open file!");
    fwrite($myfile,$res);
    fclose($myfile);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    
    
    
?>
    
             <section>
    
    <!-- Table with panel -->
<div class="card card-cascade narrower">

  <!--Card image-->
  <div
    class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">
 <div>
     
      <button type="button" class="btn btn-outline-white btn-rounded btn-xl px-6">
        <i class="fas fa-pencil-alt mt-0"></i>
      </button>
    
      <button type="button" class="btn btn-outline-white btn-rounded btn-xl px-6">
        <i class="far fa-trash-alt mt-0"></i>
      </button>
     
    </div>
      <h3>
    <a href="" class="white-text xl-3">Table name</a>

      </h3>
    <div>
      <button type="button" class="btn btn-outline-white btn-rounded btn-xl px-6" href=./index.html>
        <i class="fas fa-check-circle mt-0"></i>
      </button>
    </div>

  </div>
  <!--/Card image-->

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
<!-- Table with panel -->
    </section>

     
    

<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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