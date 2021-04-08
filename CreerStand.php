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
        $password=$_POST['password'];
        $email=$_POST['email'];
        $_SESSION['email']=$email;
        $logo=$_FILES['logo']['name'];
        $video=$_POST['video'];  
        $couleur=$_POST['color'];
    
        //cryptage du password
        $hash=password_hash($password, PASSWORD_BCRYPT);
        //1-Se connecter à la base de données
        include 'database.php';

      //2-Préparer la requête
        $sql="INSERT INTO `creerstand` (`id`, `noms`, `password`, `email`, `video`,`couleur`, `logo`) VALUES(NULL, '".$noms."','".$hash."', '".$email."','".$video."','".$couleur."', '".$logo."');";
            //echo $sql;
        //3-Exécuter la requête créer
            $r=$db->query($sql);
           move_uploaded_file($_FILES["logo"]["tmp_name"],"./files/".$_POST["noms"].".jpg");            
        ?>
     <form  method="POST" action="./confirmerCreation.php">
        <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row">
				<div class="col-md-12">
				
					<div class="table-wrap">
						<table class="table table-bordered text-center">
                            <thead> 
                                 
                    <center> <h3>Choisir votre position </h3>
                                     </center></thead>
              <tbody>
                  
                <tr>
                    <td class="text-center" >
                        <input type="radio" id="1" name="position" value="1" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(./files/maram_1.jpg);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                   <td class="text-center" >
                        <input type="radio" id="2" name="position" value="2" >
                    <label> <i class="fa fa-close"></i><div  style="background-image:url(./files/coc.png);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                     <td class="text-center" >
                        <input type="radio" id="3" name="position" value="3" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                   <td class="text-center" >
                        <input type="radio" id="4" name="position" value="4" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                   <td class="text-center" >
                        <input type="radio" id="5" name="position" value="5" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                    <td class="text-center" >
                        <input type="radio" id="6" name="position" value="6" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                </tr>
                <tr>
                    <td><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche7.jpg);"></div></td><td colspan="4"><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche3.jpg);"></div></td>
                    <td><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche2.jpg);"></div></td>
                  </tr>
                <tr>
                    <td class="text-center" >
                        <input type="radio" id="7" name="position" value="7" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    <td colspan="4" ><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche3.jpg);"></div></td>
                   <td class="text-center" >
                        <input type="radio" id="8" name="position" value="8" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                </tr>
                  <tr>
                    <td class="text-center" >
                        <input type="radio" id="9" name="position" value="9" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    <td colspan="4" ><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche3.jpg);"></div></td>
                 <td class="text-center" >
                        <input type="radio" id="10" name="position" value="10" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                </tr>
                              <tr>
                                 <td class="text-center" >
                        <input type="radio" id="11" name="position" value="11" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                    <td colspan="4" ><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche3.jpg);"></div></td>
                    
                    

                                  <td class="text-center" >
                        <input type="radio" id="12" name="position" value="12" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                </tr>
                               <tr>

                                   <td class="text-center" >
                        <input type="radio" id="13" name="position" value="13" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(./images/1.jpg);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                    <td colspan="4" ><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche3.jpg);"></div></td>
                    
                    

                                   <td class="text-center" >
                        <input type="radio" id="14" name="position" value="14" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                </tr>
                               <tr>

                                   <td class="text-center" >
                        <input type="radio" id="15" name="position" value="15" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                    <td colspan="4" ><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche3.jpg);"></div></td>
                    
               <td class="text-center" >
                        <input type="radio" id="16" name="position" value="16" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                     </tr>
                               <tr>

                                   <td class="text-center" >
                        <input type="radio" id="17" name="position" value="17" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                    <td colspan="4" ><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche3.jpg);"></div></td>
                    
                    

                                   <td class="text-center" >
                        <input type="radio" id="18" name="position" value="18" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                </tr>
                                  <tr>

                                     <td class="text-center" >
                        <input type="radio" id="19" name="position" value="19" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                    <td colspan="4" ><i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/fleche3.jpg);"></div></td>
                                 <td class="text-center" >
                        <input type="radio" id="20" name="position" value="20" >
                    <label> <i class="fa fa-close"></i><div class="img rounded-circle mb-2" style="background-image: url(images/);"></div>
                    <strong> Nom de sociéte</strong> <br>
                        </label>
                  </td>         
                    
                </tr>
              
                  
                            </tbody>
                            <tr>
                            <td  colspan="4"></td>
                            <td> <button type="submit" class="btn btn-success" >Confirmer</button></td> 
            </table>
                        
					</div>
				</div>
			</div>
		</div>
	</section>
    </form>
    
                    
    

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