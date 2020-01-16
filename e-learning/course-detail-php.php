<?php
require 'config.php';
require 'auth.php';

$id = $_SESSION["user"]["id"];
$sql= 'SELECT * FROM users WHERE id=:id';

$photo = $_SESSION['user']['photo'];
if (empty($photo)){
  $photo = "default.svg";
}
$statement= $db->prepare($sql);
$statement->execute([':id' => $id]);
$person = $statement->fetch(PDO::FETCH_OBJ);
 ?>



<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Overview</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <img src="img/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <a class="navbar-brand ml-2" href="timeline.php">E-Learning</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav navbar-nav ml-auto">
                 <li class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                       <img src="img/<?php echo $photo ?>" class="rounded-circle" height="40px" width="40px">
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                         <a href="edit.php" class="dropdown-item">Edit profile</a>
                         <a href="logout.php" class="dropdown-item">Logout</a>
                     </div>
                 </li>
             </ul>
        </div>
      </nav>

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Overview</h2>
						<div class="page_link">
							<a href="timeline.php">Home</a>
							<a href="modul.php">Modul</a>
							<a href="#">Overview</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->

        <!--================Course Details Area =================-->
        <section class="course_details_area p_120">
        	<div class="container">
        		<div class="row course_details_inner">
        			<div class="col-lg-8">
        				<div class="c_details_img">
        					<img class="img-fluid" src="img/php-overview.jpg" alt="" width="750" height="350">
        				</div>
						<div class="container">
								<div class="about_details">
                  <p>PHP adalah bahasa pemrograman yang didesain untuk menciptakan halaman web interaktif maupun aplikasi berbasis web pada computer. Kode PHP berjalan diantara halaman yang direquest dan web server. Tugas utama PHP adalag melakukan transaksi data dan printing HTML ke browser.</p>
								</div>
						</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="c_details_list">
        					<ul class="list">
        						<li><a href="#">Pemateri <span>Sekolah Coding</span></a></li>
        						<li><a href="#">Harga <span>Gratis</span></a></li>
        						<li><a href="#">Jumlah video <span>35</span></a></li>
        					</ul>
        					<a class="main_btn" href="php.php">Mulai Belajar</a>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Course Details Area =================-->

        <!--================ start footer Area  =================-->
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
		<!--================ End footer Area  =================-->






        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
