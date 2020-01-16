<?php
//file yang dibutuhkan
require 'config.php';
require 'auth.php';
//mengambil data dari database, session artinya user yang sedang login saat ini dan id adalah primary key yang mewakili semua data
$id = $_SESSION["user"]["id"];
$sql= 'SELECT * FROM users WHERE id=:id';
$statement= $db->prepare($sql);
$statement->execute([':id' => $id]);
$person = $statement->fetch(PDO::FETCH_OBJ);

//jika tombol submit ditekan, maka database akan terupdate
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];

  $images=$_FILES['profile']['name'];
  $tmp_dir=$_FILES['profile']['tmp_name'];
  $imageSize=$_FILES['profile']['size'];

  $upload_dir='img/';
  $valid_extensions=array('jpeg', 'jpg', 'png', 'gif', 'pdf');
  $picProfile=$images;
  move_uploaded_file($tmp_dir, $upload_dir.$picProfile);
  $sql = 'UPDATE users SET photo=:upic WHERE id=:id';
  $stmt=$db->prepare($sql);

  if ($stmt->execute([':upic' => $images, ':id' => $id])) {
    $_SESSION['user']['photo'] = $images;
    header("Location: timeline.php");
  }


  $sql = 'UPDATE users SET name=:name, email=:email WHERE id=:id';
  $statement = $db->prepare($sql);

  if ($statement->execute([':name' => $name, ':email' => $email, ':id' => $id])) {

    header("Location: timeline.php");
  }
  else {
    echo "gagal";
  }
}

$photo = $_SESSION['user']['photo'];
if(empty($photo))
{
 $photo = "default.svg";
}
else {
  $photo;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Learning</title>
    <style>
  /* Make the image fully responsive */
      .carousel-inner img {
      width: 100%;
      height: 100%;
  }
    </style>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/dumpweed.css" rel="stylesheet">
    <link href="css/propeller.min.css" rel="stylesheet">

</head>
<body class="bg-light">
<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
<form role="form" method="post" enctype="multipart/form-data">
<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">


            <img src="img/<?= $photo ?>" class="avatar rounded-circle mb-2" alt="avatar" height="150" width="150">
            <h6>Upload a different photo...</h6>

            <input type="file" class="form-control" name="profile" id="profile" accept="*/image">
        </div>
      </div>

      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>

        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" id="name" value="<?= $person->name; ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" id="email" value="<?= $person->email; ?>" >
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-yoga" value="Save Changes" name="submit">
              <span></span>
              <input type="button" value="Cancel" class="btn btn-default" onclick="location.href='timeline.php';" />
            </div>
          </div>
        </form>
      </div>
  </div>
</form>
</div>
<hr>
  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/propeller.min.js"></script>
</body>
</html>
