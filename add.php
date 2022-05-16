<?php 
include"connexion.php";
  if(isset($_POST['add'])){
    $contenu=$_POST['contenu'];
    $resume=$_POST['resume'];
    $daty=$_POST['daty'];
    $titre=$_POST['title'];
    $sql='INSERT into  contenu (contenu,resume,dateContenu,titre) 
    values("%s","%s","%s","%s");';
    $sql=sprintf($sql,$contenu,$resume,$daty,$titre);
    echo $sql;
    $valiny=mysqli_query($connecter(),$sql);
    //echo $valiny;
    header('Location:accueil.php');
  }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style >
    *{
      padding:5px;

    }
  </style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>Ajout</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Rubic main styles -->
	<link rel="stylesheet" href="assets/css/rubic.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <h1><center>Ajouter un Contenu</center></h1>

    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><strong class="text-primary">RU</strong><span class="text-light">BIC</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
            </div>
        </div>
    </nav>
        </div>          
    </div>
    <section class="section">
        <div class="container">
          <div class="container1">
            <div class="row justify-content-around">
                <!-- Eto za manao modif -->
              <div class="col-md-5 d-none d-md-block">
                    <form class="header-form" method="POST">
                        <div class="body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="contenu" placeholder="Contenu*">
                            </div>
                            <div class="form-group">
                                <input type="texte" class="form-control" name="resume"placeholder="Resume*">
                            </div>
                            <div>
                              <input type="date" class="form-control" name="daty"placeholder="Date*">
                            </div>
                            <div>
                              <input type="texte" class="form-control" name="title"placeholder="Le titre*">
                            </div>
                        </div>
<button name="add"  class="btn btn-primary btn-block"><b>ajouter </b></button>
                        </div>
                    </form> 

                    </div>

                </div>
            </div>  
        </div>

            </div>                  
        </div>                      
    </section>

    <footer class="footer py-4 bg-dark text-light"> 
        <div class="container text-center">
            <p class="mb-4 small">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com">Carolrinah</a></p>
            <div class="social-links">
                <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a>
            </div>
        </div>
    </footer>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Rubic js -->
    <script src="assets/js/rubic.js"></script>

</body>
</html>