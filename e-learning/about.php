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


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About</title>
         <link rel="icon" type="image/png" href="img/favicon.png"/>
         <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />

         <!-- Custom styles for this template -->
         <link href="css/dumpweed.css" rel="stylesheet">

         <link rel="stylesheet" href="css/font-awesome.min.css">

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
  <nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="timeline.php">
      <img src="img/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
      E-Learning
    </a>
  </nav>
      <div class="container mt-25">
      <section class="testimonials_area">
        <div class="container">
          <div class="testi_slider owl-carousel">
            <div class="item">
              <div class="testi_item">
            <img src="img/poto.png" alt="" height="100" width="100" class="mb-5 rounded-circle">
                <p>Website ini adalah website pembelajaran online dengan materi pemograman web. Tersedia 5 modul pembelajaran yang cocok untuk pengguna yang ingin belajar membangun sebuah website yang interaktif.</p>
                <p>Website ini dibangun menggunakan PHP untuk back-end dan HTML dan Bootstrap untuk front-end. Website ini juga menggunakan database lokal menggunakan MySQL.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
