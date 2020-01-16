<!DOCTYPE html>
<html>
<title>CSS Dasar</title>
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
      <a class="list-group-item list-group-item-action active" id="list-intro-list" data-toggle="list" href="#list-intro" role="tab" aria-controls="intro">Intro</a>
      <a class="list-group-item list-group-item-action" id="list-connect-list" data-toggle="list" href="#list-connect" role="tab" aria-controls="connect">Menghubungkan File CSS</a>
      <a class="list-group-item list-group-item-action" id="list-struktur-list" data-toggle="list" href="#list-struktur" role="tab" aria-controls="struktur">Struktur Dasar CSS</a>
      <a class="list-group-item list-group-item-action" id="list-selector-list" data-toggle="list" href="#list-selector" role="tab" aria-controls="selector">Selector</a>
      <a class="list-group-item list-group-item-action" id="list-color-list" data-toggle="list" href="#list-color" role="tab" aria-controls="color">Background Color</a>
      <a class="list-group-item list-group-item-action" id="list-image-list" data-toggle="list" href="#list-image" role="tab" aria-controls="image">Background Gambar dan Comment</a>
      <a class="list-group-item list-group-item-action" id="list-text-list" data-toggle="list" href="#list-text" role="tab" aria-controls="text">Text</a>
      <a class="list-group-item list-group-item-action" id="list-font-list" data-toggle="list" href="#list-font" role="tab" aria-controls="font">Font</a>


      <a class="list-group-item list-group-item-action" id="list-decor-list" data-toggle="list" href="#list-decor" role="tab" aria-controls="decor">Menghias Link</a>
      <a class="list-group-item list-group-item-action" id="list-dimensi-list" data-toggle="list" href="#list-dimensi" role="tab" aria-controls="dimensi">Dimensi Element</a>
      <a class="list-group-item list-group-item-action" id="list-inline-list" data-toggle="list" href="#list-inline" role="tab" aria-controls="inline">Inline,Block, dan InlineBlock</a>
      <a class="list-group-item list-group-item-action" id="list-gone-list" data-toggle="list" href="#list-gone" role="tab" aria-controls="gone">Menghilangkan Element</a>
      <a class="list-group-item list-group-item-action" id="list-box-list" data-toggle="list" href="#list-box" role="tab" aria-controls="box">Box model dan Margin</a>
      <a class="list-group-item list-group-item-action" id="list-padding-list" data-toggle="list" href="#list-padding" role="tab" aria-controls="padding">Padding dan Border</a>
      <a class="list-group-item list-group-item-action" id="list-relative-list" data-toggle="list" href="#list-relative" role="tab" aria-controls="relative">Posistion Relative dan Static</a>
      <a class="list-group-item list-group-item-action" id="list-absolute-list" data-toggle="list" href="#list-absolute" role="tab" aria-controls="absolute">Position Absolute</a>
      <a class="list-group-item list-group-item-action" id="list-fixed-list" data-toggle="list" href="#list-fixed" role="tab" aria-controls="fixed">Position Fixed</a>
      <a class="list-group-item list-group-item-action" id="list-parent-list" data-toggle="list" href="#list-parent" role="tab" aria-controls="parent">Position Parent Element</a>
      <a class="list-group-item list-group-item-action" id="list-zindex-list" data-toggle="list" href="#list-zindex" role="tab" aria-controls="zindex">Z Index</a>
      <a class="list-group-item list-group-item-action" id="list-float-list" data-toggle="list" href="#list-float" role="tab" aria-controls="float">Float dan Clear</a>
      <a class="list-group-item list-group-item-action" id="list-advancedfloat-list" data-toggle="list" href="#list-advancedfloat" role="tab" aria-controls="advancedfloat">Pendalaman Float</a>
      <a class="list-group-item list-group-item-action" id="list-advancedselector-list" data-toggle="list" href="#list-advancedselector" role="tab" aria-controls="advancedselector">Pendalaman Selector</a>
      <a class="list-group-item list-group-item-action" id="list-reference-list" data-toggle="list" href="#list-reference" role="tab" aria-controls="reference">Referensi Selector</a>
      <a class="list-group-item list-group-item-action" id="list-hover-list" data-toggle="list" href="#list-hover" role="tab" aria-controls="hover">Hover dan Focus</a>
    </div>
  </div>


  <div style="margin-left:26%">

<div class="w3-container-fluid">
  <h1 align="center">CSS Dasar</h1>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-intro" role="tabpanel" aria-labelledby="list-intro-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/rbTEOOucUOs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-connect" role="tabpanel" aria-labelledby="list-connect-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/EGb53ml9zZE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-struktur" role="tabpanel" aria-labelledby="list-struktur-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/N3XWUloVpQA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-selector" role="tabpanel" aria-labelledby="list-selector-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/AOrB6olTgYI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-color" role="tabpanel" aria-labelledby="list-color-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/UMgmEOLyamg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-image" role="tabpanel" aria-labelledby="list-image-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/6F0yjJFyqI8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-text" role="tabpanel" aria-labelledby="list-text-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/MSpRjdi3lTs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-font" role="tabpanel" aria-labelledby="list-font-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/sMYMJaSVB3o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>



        <div class="tab-pane fade" id="list-decor" role="tabpanel" aria-labelledby="list-decor-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/7MxS7rw4vn8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-dimensi" role="tabpanel" aria-labelledby="list-dimensi-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/7EGigE_HIRI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-inline" role="tabpanel" aria-labelledby="list-inline-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/4mbNF7Ewv_o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-gone" role="tabpanel" aria-labelledby="list-gone-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/z5Rp918zNNo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-box" role="tabpanel" aria-labelledby="list-box-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/sWYQpD6E2R0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-padding" role="tabpanel" aria-labelledby="list-padding-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/sWb4TffRD6Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-relative" role="tabpanel" aria-labelledby="list-relative-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/FUPLlUJ6Q5c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-absolute" role="tabpanel" aria-labelledby="list-absolute-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/3dmbt-38aLc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-fixed" role="tabpanel" aria-labelledby="list-fixed-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/1tP38EecWG8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-parent" role="tabpanel" aria-labelledby="list-parent-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/O4HY6aR7Jm4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-zindex" role="tabpanel" aria-labelledby="list-zindex-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/6zZ4DVxcEho" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-float" role="tabpanel" aria-labelledby="list-float-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/_vcXUsAmHLY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>


        <div class="tab-pane fade" id="list-advancedfloat" role="tabpanel" aria-labelledby="list-advancedfloat-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/EVheuevaw0k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-advancedselector" role="tabpanel" aria-labelledby="list-advancedselector-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/rJKEXHaKsQ0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-reference" role="tabpanel" aria-labelledby="list-reference-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/13Zcp2cMAxk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="tab-pane fade" id="list-hover" role="tabpanel" aria-labelledby="list-hover-list" style="margin-left:15%"><iframe width="674" height="379.13" src="https://www.youtube.com/embed/muxmRyFP6Gk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
    </div>
    <div align="center">
      <a href="https://www.w3schools.com/tryit/tryit.asp?filename=tryhtml_default" target="_blank"><button class="btn btn-yoga">Uji Kode</button></a>
    </div>
</div>
</div>








  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/propeller.min.js"></script>

</body>
</html>
