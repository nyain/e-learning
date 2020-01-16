<!DOCTYPE html>
<html>
<title>JavaScript Dasar</title>
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
      <a class="list-group-item list-group-item-action" id="list-connect-list" data-toggle="list" href="#list-connect" role="tab" aria-controls="connect">Menghubungkan File JavaScript</a>
      <a class="list-group-item list-group-item-action" id="list-variable-list" data-toggle="list" href="#list-variable" role="tab" aria-controls="variable">Variable</a>
      <a class="list-group-item list-group-item-action" id="list-string-list" data-toggle="list" href="#list-string" role="tab" aria-controls="string">Tipe Data String</a>
      <a class="list-group-item list-group-item-action" id="list-number-list" data-toggle="list" href="#list-number" role="tab" aria-controls="number">Tipe Data Angka</a>
      <a class="list-group-item list-group-item-action" id="list-advancedvar-list" data-toggle="list" href="#list-advancedvar" role="tab" aria-controls="advancedvar">Pendalaman Variable</a>
      <a class="list-group-item list-group-item-action" id="list-math-list" data-toggle="list" href="#list-math" role="tab" aria-controls="math">Operator Matematika</a>
      <a class="list-group-item list-group-item-action" id="list-nummeth-list" data-toggle="list" href="#list-nummeth" role="tab" aria-controls="nummeth">Metode Angka</a>


      <a class="list-group-item list-group-item-action" id="list-nummeth2-list" data-toggle="list" href="#list-nummeth2" role="tab" aria-controls="nummeth2">Metode Angka part 2</a>
      <a class="list-group-item list-group-item-action" id="list-stringmeth-list" data-toggle="list" href="#list-stringmeth" role="tab" aria-controls="stringmeth">Metode String</a>
      <a class="list-group-item list-group-item-action" id="list-stringmeth2-list" data-toggle="list" href="#list-stringmeth2" role="tab" aria-controls="stringmeth2">Metode String part 2</a>
      <a class="list-group-item list-group-item-action" id="list-function-list" data-toggle="list" href="#list-function" role="tab" aria-controls="function">Function</a>
      <a class="list-group-item list-group-item-action" id="list-param-list" data-toggle="list" href="#list-param" role="tab" aria-controls="param">Parameter Function</a>
      <a class="list-group-item list-group-item-action" id="list-param2-list" data-toggle="list" href="#list-param2" role="tab" aria-controls="param2">Multi Parameter</a>
      <a class="list-group-item list-group-item-action" id="list-return-list" data-toggle="list" href="#list-return" role="tab" aria-controls="return">Return</a>
      <a class="list-group-item list-group-item-action" id="list-scope-list" data-toggle="list" href="#list-scope" role="tab" aria-controls="scope">Scope Variable</a>
      <a class="list-group-item list-group-item-action" id="list-array-list" data-toggle="list" href="#list-array" role="tab" aria-controls="array">Array</a>
      <a class="list-group-item list-group-item-action" id="list-arraymeth-list" data-toggle="list" href="#list-arraymeth" role="tab" aria-controls="arraymeth">Metode Array</a>
      <a class="list-group-item list-group-item-action" id="list-arraymeth2-list" data-toggle="list" href="#list-arraymeth2" role="tab" aria-controls="arraymeth2">Metode Array part 2</a>
      <a class="list-group-item list-group-item-action" id="list-boolean-list" data-toggle="list" href="#list-boolean" role="tab" aria-controls="boolean">Boolean</a>
      <a class="list-group-item list-group-item-action" id="list-ifelse-list" data-toggle="list" href="#list-ifelse" role="tab" aria-controls="ifelse">If Else</a>
      <a class="list-group-item list-group-item-action" id="list-logic-list" data-toggle="list" href="#list-logic" role="tab" aria-controls="logic">Operator Logika</a>


      <a class="list-group-item list-group-item-action" id="list-ifelse2-list" data-toggle="list" href="#list-ifelse2" role="tab" aria-controls="ifelse2">If Else dua kondisi</a>
      <a class="list-group-item list-group-item-action" id="list-truefalse-list" data-toggle="list" href="#list-truefalse" role="tab" aria-controls="truefalse">True dan False</a>
      <a class="list-group-item list-group-item-action" id="list-elseif-list" data-toggle="list" href="#list-elseif" role="tab" aria-controls="elseif">Else If</a>
      <a class="list-group-item list-group-item-action" id="list-nested-list" data-toggle="list" href="#list-nested" role="tab" aria-controls="nested">Nested If</a>
      <a class="list-group-item list-group-item-action" id="list-switch-list" data-toggle="list" href="#list-switch" role="tab" aria-controls="switch">Switch Case</a>
      <a class="list-group-item list-group-item-action" id="list-for-list" data-toggle="list" href="#list-for" role="tab" aria-controls="for">For Loop</a>
      <a class="list-group-item list-group-item-action" id="list-while-list" data-toggle="list" href="#list-while" role="tab" aria-controls="while">While Loop</a>
      <a class="list-group-item list-group-item-action" id="list-dowhile-list" data-toggle="list" href="#list-dowhile" role="tab" aria-controls="dowhile">Do While </a>
    </div>
  </div>


  <div style="margin-left:26%">

<div class="w3-container-fluid">
  <h1 align="center">JavaScript Dasar</h1>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-intro" role="tabpanel" aria-labelledby="list-intro-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/ttYTx_wGcQY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-connect" role="tabpanel" aria-labelledby="list-connect-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/q6uYDRHqY5w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-variable" role="tabpanel" aria-labelledby="list-variable-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/9yMqIxTg7VI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-string" role="tabpanel" aria-labelledby="list-string-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/yL138EO6Q0w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-number" role="tabpanel" aria-labelledby="list-number-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/JZVhReT-h6s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-advancedvar" role="tabpanel" aria-labelledby="list-advancedvar-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/GbSQ0pG8zDM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-math" role="tabpanel" aria-labelledby="list-math-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/Ftxxn7TQDt0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-nummeth" role="tabpanel" aria-labelledby="list-nummeth-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/p0R8GRKiJQM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>



        <div class="tab-pane fade" id="list-nummeth2" role="tabpanel" aria-labelledby="list-nummeth2-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/LCcf6B834Yo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-stringmeth" role="tabpanel" aria-labelledby="list-stringmeth-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/7_hszi4WUtc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-stringmeth2" role="tabpanel" aria-labelledby="list-stringmeth2-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/PKDiHY0LGcg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-function" role="tabpanel" aria-labelledby="list-function-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/3WbGabR8ZOM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-param" role="tabpanel" aria-labelledby="list-param-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/qhcOGwQ5ZMA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-param2" role="tabpanel" aria-labelledby="list-param2-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/T9fqAx1XvJI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-return" role="tabpanel" aria-labelledby="list-return-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/rNCTU5C6zmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-scope" role="tabpanel" aria-labelledby="list-scope-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/KKLbpAGh50Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-array" role="tabpanel" aria-labelledby="list-array-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/pVmIFqyOI1I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-arraymeth" role="tabpanel" aria-labelledby="list-arraymeth-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/aqWxGvlBP8k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-arraymeth2" role="tabpanel" aria-labelledby="list-arraymeth2-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/dSn9YdhrxIk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-boolean" role="tabpanel" aria-labelledby="list-boolean-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/LJ9lqmWTedg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-ifelse" role="tabpanel" aria-labelledby="list-ifelse-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/pYn2G04FUDw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-logic" role="tabpanel" aria-labelledby="list-logic-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/9ormrb_zVFU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-ifelse2" role="tabpanel" aria-labelledby="list-ifelse2-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/9MKvOXFjzo0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-truefalse" role="tabpanel" aria-labelledby="list-truefalse-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/7lSOnFw3FCg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-elseif" role="tabpanel" aria-labelledby="list-elseif-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/fs0M9Dct-lU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-nested" role="tabpanel" aria-labelledby="list-nested-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/203MejHQz5U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-switch" role="tabpanel" aria-labelledby="list-switch-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/IarABfUWEPw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-for" role="tabpanel" aria-labelledby="list-for-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/1GygMhVL68M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-while" role="tabpanel" aria-labelledby="list-while-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/9z89AOmwglU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-dowhile" role="tabpanel" aria-labelledby="list-dowhile-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/KKVO65cjszE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <!-- tombol -->
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
