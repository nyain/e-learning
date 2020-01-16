<?php
require 'config.php';
require 'auth.php';

$id = $_SESSION["user"]["id"];
$sql= 'SELECT * FROM users WHERE id=:id';
$statement= $db->prepare($sql);

$photo = $_SESSION['user']['photo'];
if (empty($photo)){
  $photo = "default.svg";
}
$statement->execute([':id' => $id]);
$person = $statement->fetch(PDO::FETCH_OBJ);
 ?>








 <!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>E-Learning</title>


     <link rel="icon" type="image/png" href="img/favicon.png"/>
     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />

     <!-- Custom styles for this template -->
     <link href="css/style.css" rel="stylesheet">
     <link href="css/dumpweed.css" rel="stylesheet">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>

   <body>
     <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
     <img src="img/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
       <a class="navbar-brand ml-2" href="#">E-Learning</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
         <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                      <img src="img/<?php echo $photo?>" class="rounded-circle" height="40px" width="40px">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="edit.php" class="dropdown-item">Edit profile</a>
                        <a href="logout.php" class="dropdown-item">Logout</a>
                    </div>
                </li>
            </ul>
       </div>
     </nav>

     <main role="main" class="container-fluid">
       <div class="alert alert-info alert-dismissable text-center">
         <a class="panel-close close" data-dismiss="alert">×</a>
         <i class="fa fa-coffee"></i>
         Selamat datang, <?= $person->name; ?>
       </div>
     </main>


<!-- Slideshow -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/banner.bmp" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner.bmp" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/banner.bmp" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- tulisan -->
  <div class="main_title mt-5 mb-5">
    <h2>Selamat Datang!</h2>
    <p>Website ini dibuat untuk mempermudah dalam pembelajaran pemograman web. Materi yang disajikan ringkas dan mudah untuk dipahami. Disediakan pula editor code online sehingga pengguna bisa langsung melakukan uji coba materi yang diberikan.</p>
    <a class="main_btn mb-4 mt-3" href="modul.php">Mulai Belajar</a>
  </div>


<!-- Foote -->
	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>About Me</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="about.php"><i class="fa fa-angle-double-right"></i>About</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="modul.php"><i class="fa fa-angle-double-right"></i>Modul</a></li>
					</ul>
				</div>
  				<div class="col-xs-12 col-sm-4 col-md-4">
  					<h5>Logout</h5>
  					<ul class="list-unstyled quick-links">
  						<li><a href="logout.php"><i class="fa fa-angle-double-right"></i>Logout</a></li>
  					</ul>
  				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://web.facebook.com/minimal6huruf" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://www.instagram.com/vincent.182/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.linkedin.com/in/vincent-williams-0a5491170/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/Vincent24574227" target="_blank"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">

					<p class="h6">&copy All right Reversed.</p>
				</div>
				</hr>
			</div>
		</div>
	</section>
     <!-- Bootstrap core JavaScript
     ================================================== -->
     <!-- Placed at the end of the document so the pages load faster -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
     <script type="text/javascript" src="js/popper.min.js"></script>
     <script type="text/javascript" src="js/bootstrap.min.js"></script>
   </body>
 </html>
