<!DOCTYPE html>
<html>
<title>HTML Dasar</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="img/favicon.png"/>

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/dumpweed.css" />
<link rel="stylesheet" href="css/list-group.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
  <!-- Image and text -->
  <nav class="navbar sticky-top navbar-light bg-light">
    <a class="navbar-brand" href="modul.php">
      <img src="img/favicon.png" width="30" height="30" class="d-inline-block align-top" alt="">
      E-Learning
    </a>
  </nav>

  <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
      <h3 class="w3-bar-item">Menu</h3>

    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Intro</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">File HTML pertama</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Tag HTML</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Heading dan paragraph</a>
      <a class="list-group-item list-group-item-action" id="list-image-list" data-toggle="list" href="#list-image" role="tab" aria-controls="image">Membuat link</a>
      <a class="list-group-item list-group-item-action" id="list-link-list" data-toggle="list" href="#list-link" role="tab" aria-controls="link">Menampilkan gambar</a>
      <a class="list-group-item list-group-item-action" id="list-table-list" data-toggle="list" href="#list-table" role="tab" aria-controls="table">Iframe</a>
      <a class="list-group-item list-group-item-action" id="list-form-list" data-toggle="list" href="#list-form" role="tab" aria-controls="form">Pemformatan teks</a>


      <a class="list-group-item list-group-item-action" id="list-block-list" data-toggle="list" href="#list-block" role="tab" aria-controls="block">Block dan Inline</a>
      <a class="list-group-item list-group-item-action" id="list-doc-list" data-toggle="list" href="#list-doc" role="tab" aria-controls="doc">Doctype pada HTML</a>
      <a class="list-group-item list-group-item-action" id="list-comment-list" data-toggle="list" href="#list-comment" role="tab" aria-controls="comment">Comments</a>
      <a class="list-group-item list-group-item-action" id="list-multi-list" data-toggle="list" href="#list-multi" role="tab" aria-controls="multi">Multi Pages</a>
      <a class="list-group-item list-group-item-action" id="list-tabel-list" data-toggle="list" href="#list-tabel" role="tab" aria-controls="tabel">Table</a>
      <a class="list-group-item list-group-item-action" id="list-daftar-list" data-toggle="list" href="#list-daftar" role="tab" aria-controls="daftar">List</a>
      <a class="list-group-item list-group-item-action" id="list-charset-list" data-toggle="list" href="#list-charset" role="tab" aria-controls="charset">Charset,Symbol,entities</a>
      <a class="list-group-item list-group-item-action" id="list-text-list" data-toggle="list" href="#list-text" role="tab" aria-controls="text">Form,text,textarea</a>
      <a class="list-group-item list-group-item-action" id="list-label-list" data-toggle="list" href="#list-label" role="tab" aria-controls="label">Label dan id</a>
      <a class="list-group-item list-group-item-action" id="list-checkbox-list" data-toggle="list" href="#list-checkbox" role="tab" aria-controls="checkbox">Checkbox dan radio</a>
      <a class="list-group-item list-group-item-action" id="list-select-list" data-toggle="list" href="#list-select" role="tab" aria-controls="select">Select dan option</a>
      <a class="list-group-item list-group-item-action" id="list-advanced-list" data-toggle="list" href="#list-advanced" role="tab" aria-controls="advanced">Advanced form</a>
    </div>
  </div>


  <div style="margin-left:26%">

<div class="w3-container-fluid">
  <h1 align="center">HTML Dasar</h1>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/kr4882GSwpA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/v88LehZU7Wk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/8KvOrvjbN1E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/9K14r1m2M-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-image" role="tabpanel" aria-labelledby="list-image-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/sxuQTnKRtoY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-link" role="tabpanel" aria-labelledby="list-link-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/IKXBFt3Y7Ys" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-table" role="tabpanel" aria-labelledby="list-table-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/WlUy8hL26gY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-form" role="tabpanel" aria-labelledby="list-form-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/n_ObVu4aiZE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>



        <div class="tab-pane fade" id="list-block" role="tabpanel" aria-labelledby="list-block-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/W7L8L6ZT9qo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-doc-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/um7hbajoFOo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-comment" role="tabpanel" aria-labelledby="list-comment-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/ru6yh6waqhs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-multi" role="tabpanel" aria-labelledby="list-multi-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/jgrBsRYHRQY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-tabel" role="tabpanel" aria-labelledby="list-tabel-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/hd2dIJzDIQE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-daftar" role="tabpanel" aria-labelledby="list-daftar-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/2f-j45doj3o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-charset" role="tabpanel" aria-labelledby="list-charset-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/WFnnhyVmr2c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-text" role="tabpanel" aria-labelledby="list-text-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/Fyu9cRoRuIs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-label" role="tabpanel" aria-labelledby="list-label-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/Tf9bEAn486o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-checkbox" role="tabpanel" aria-labelledby="list-checkbox-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/dGYK3iXSnFI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-select" role="tabpanel" aria-labelledby="list-select-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/upLH2mA9nNc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-advanced" role="tabpanel" aria-labelledby="list-advanced-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/zZ642ndj3L4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div align="center">
          <a href="https://www.w3schools.com/tryit/tryit.asp?filename=tryhtml_default" target="_blank"><button class="btn btn-yoga">Uji Kode</button></a>
        </div>
    </div>
</div>
</div>








  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/propeller.min.js"></script>

</body>
</html>
