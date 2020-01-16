<!DOCTYPE html>
<html>
<title>PHP Dasar</title>
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
      <a class="list-group-item list-group-item-action" id="list-echo-list" data-toggle="list" href="#list-echo" role="tab" aria-controls="echo">Echo</a>
      <a class="list-group-item list-group-item-action" id="list-gabung-list" data-toggle="list" href="#list-gabung" role="tab" aria-controls="gabung">Penggabungan HTML dan PHP</a>
      <a class="list-group-item list-group-item-action" id="list-variable-list" data-toggle="list" href="#list-variable" role="tab" aria-controls="variable">Comment dan Variable</a>
      <a class="list-group-item list-group-item-action" id="list-string-list" data-toggle="list" href="#list-string" role="tab" aria-controls="string">Tipe Data String</a>
      <a class="list-group-item list-group-item-action" id="list-integer-list" data-toggle="list" href="#list-integer" role="tab" aria-controls="integer">Tipe Data Integer dan Float</a>
      <a class="list-group-item list-group-item-action" id="list-math-list" data-toggle="list" href="#list-math" role="tab" aria-controls="math">Operator Matematika</a>
      <a class="list-group-item list-group-item-action" id="list-nummeth-list" data-toggle="list" href="#list-nummeth" role="tab" aria-controls="nummeth">Metode Matematika</a>


      <a class="list-group-item list-group-item-action" id="list-stringmeth-list" data-toggle="list" href="#list-stringmeth" role="tab" aria-controls="stringmeth">Metode String</a>
      <a class="list-group-item list-group-item-action" id="list-array-list" data-toggle="list" href="#list-array" role="tab" aria-controls="array">Array</a>
      <a class="list-group-item list-group-item-action" id="list-arraymeth-list" data-toggle="list" href="#list-arraymeth" role="tab" aria-controls="arraymeth">Metode Array</a>
      <a class="list-group-item list-group-item-action" id="list-asoarray-list" data-toggle="list" href="#list-asoarray" role="tab" aria-controls="asoarray">Associative Array</a>
      <a class="list-group-item list-group-item-action" id="list-asoarraymeth-list" data-toggle="list" href="#list-asoarraymeth" role="tab" aria-controls="asoarraymeth">Metode Associative Array</a>
      <a class="list-group-item list-group-item-action" id="list-arraymulti-list" data-toggle="list" href="#list-arraymulti" role="tab" aria-controls="arraymulti">Array Multi Dimensi</a>
      <a class="list-group-item list-group-item-action" id="list-for-list" data-toggle="list" href="#list-for" role="tab" aria-controls="for">For Loop</a>
      <a class="list-group-item list-group-item-action" id="list-arrayresult-list" data-toggle="list" href="#list-arrayresult" role="tab" aria-controls="arrayresult">Mengeluarkan Hasil Array</a>
      <a class="list-group-item list-group-item-action" id="list-foreach-list" data-toggle="list" href="#list-foreach" role="tab" aria-controls="foreach">Foreach Array</a>
      <a class="list-group-item list-group-item-action" id="list-foreachaso-list" data-toggle="list" href="#list-foreachaso" role="tab" aria-controls="foreachaso">Foreach Associative Array</a>
      <a class="list-group-item list-group-item-action" id="list-dowhile-list" data-toggle="list" href="#list-dowhile" role="tab" aria-controls="dowhile">While dan Do While</a>
      <a class="list-group-item list-group-item-action" id="list-boolean-list" data-toggle="list" href="#list-boolean" role="tab" aria-controls="boolean">Boolean</a>
      <a class="list-group-item list-group-item-action" id="list-ifelse-list" data-toggle="list" href="#list-ifelse" role="tab" aria-controls="ifelse">If Else</a>
      <a class="list-group-item list-group-item-action" id="list-logic-list" data-toggle="list" href="#list-logic" role="tab" aria-controls="logic">Operator Logika</a>


      <a class="list-group-item list-group-item-action" id="list-ifelse2-list" data-toggle="list" href="#list-ifelse2" role="tab" aria-controls="ifelse2">If Else LEbih Dari kondisi</a>
      <a class="list-group-item list-group-item-action" id="list-nested-list" data-toggle="list" href="#list-nested" role="tab" aria-controls="nested">Nested If</a>
      <a class="list-group-item list-group-item-action" id="list-truefalse-list" data-toggle="list" href="#list-truefalse" role="tab" aria-controls="truefalse">True dan False</a>
      <a class="list-group-item list-group-item-action" id="list-and-list" data-toggle="list" href="#list-and" role="tab" aria-controls="and">Dan Juga Atau</a>
      <a class="list-group-item list-group-item-action" id="list-switch-list" data-toggle="list" href="#list-switch" role="tab" aria-controls="switch">Switch Case</a>
      <a class="list-group-item list-group-item-action" id="list-function-list" data-toggle="list" href="#list-function" role="tab" aria-controls="functionr">Function</a>
      <a class="list-group-item list-group-item-action" id="list-paramfunc-list" data-toggle="list" href="#list-paramfunc" role="tab" aria-controls="paramfunc">Parameter Pada Function</a>
      <a class="list-group-item list-group-item-action" id="list-return-list" data-toggle="list" href="#list-return" role="tab" aria-controls="return">Return</a>


      <a class="list-group-item list-group-item-action" id="list-scope-list" data-toggle="list" href="#list-scope" role="tab" aria-controls="scope">Scope</a>
      <a class="list-group-item list-group-item-action" id="list-anonymous-list" data-toggle="list" href="#list-anonymous" role="tab" aria-controls="anonymous">Anonymous Function</a>
      <a class="list-group-item list-group-item-action" id="list-callback-list" data-toggle="list" href="#list-callback" role="tab" aria-controls="callback">Callback Function</a>
      <a class="list-group-item list-group-item-action" id="list-error-list" data-toggle="list" href="#list-error" role="tab" aria-controls="error">Menampilkan Error</a>
      <a class="list-group-item list-group-item-action" id="list-die-list" data-toggle="list" href="#list-die" role="tab" aria-controls="die">Die dan Var Dump</a>
    </div>
  </div>


  <div style="margin-left:26%">

<div class="w3-container-fluid">
  <h1 align="center">PHP Dasar</h1>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="list-intro" role="tabpanel" aria-labelledby="list-intro-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/JEvlT5du2Ec" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-echo" role="tabpanel" aria-labelledby="list-echo-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/cOJ8fwR-BSA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-gabung" role="tabpanel" aria-labelledby="list-gabung-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/QebnGe5-PUo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-variable" role="tabpanel" aria-labelledby="list-variable-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/m8viqR-PuI4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-string" role="tabpanel" aria-labelledby="list-string-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/PBiQd6aVa74" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-integer" role="tabpanel" aria-labelledby="list-integer-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/_Al0A4IXTpQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-math" role="tabpanel" aria-labelledby="list-math-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/ljz90HYEPyM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-nummeth" role="tabpanel" aria-labelledby="list-nummeth-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/wIc3mlUqHQA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>



        <div class="tab-pane fade" id="list-stringmeth" role="tabpanel" aria-labelledby="list-stringmeth-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/zE8uCShBZW0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-array" role="tabpanel" aria-labelledby="list-arraymeth-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/vWsO7QbgcOA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-arraymeth" role="tabpanel" aria-labelledby="list-arraymeth-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/leog-wPnyZU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-asoarray" role="tabpanel" aria-labelledby="list-asoarray-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/6RxYyPl3z-A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-asoarraymeth" role="tabpanel" aria-labelledby="list-asoarraymeth-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/SdnrZTzxwM8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-arraymulti" role="tabpanel" aria-labelledby="list-arraymulti-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/LmYTFNM0HA4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-for" role="tabpanel" aria-labelledby="list-for-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/0dlEeOfSOJQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-arrayresult" role="tabpanel" aria-labelledby="list-arrayresult-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/DaZjDtPy4e4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-foreach" role="tabpanel" aria-labelledby="list-foreach-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/pmn7OGy4xao" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-foreachaso" role="tabpanel" aria-labelledby="list-foreachaso-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/Kr4cbnbjAF8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-dowhile" role="tabpanel" aria-labelledby="list-dowhile-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/ewSN2S-jnaM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-boolean" role="tabpanel" aria-labelledby="list-boolean-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/nIbRLSiNRnk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-ifelse" role="tabpanel" aria-labelledby="list-ifelse-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/lD7Jw3uppH8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-logic" role="tabpanel" aria-labelledby="list-logic-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/AYxN25oFXqw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-ifelse2" role="tabpanel" aria-labelledby="list-ifelse2-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/mbZalZ9clzk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-nested" role="tabpanel" aria-labelledby="list-nested-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/X_DcaCIs4-s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-truefalse" role="tabpanel" aria-labelledby="list-truefalse-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/m9hg0V-Wn-s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-and" role="tabpanel" aria-labelledby="list-and-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/7pGLvXw0y-g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-switch" role="tabpanel" aria-labelledby="list-switch-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/vXbiQsd3sc8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-function" role="tabpanel" aria-labelledby="list-function-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/AopapHr8z0w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-paramfunc" role="tabpanel" aria-labelledby="list-paramfunc-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/_g_3thwwrds" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-return" role="tabpanel" aria-labelledby="list-return-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/qzjlVzDHzEo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>



        <div class="tab-pane fade" id="list-scope" role="tabpanel" aria-labelledby="list-scope-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/c16srm8U3sE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-anonymous" role="tabpanel" aria-labelledby="list-anonymous-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/RU9rAOlvDj8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-callback" role="tabpanel" aria-labelledby="list-callback-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/QwYqIg7t7rY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-error" role="tabpanel" aria-labelledby="list-error-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/AshqM8dZ_KQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="tab-pane fade" id="list-die" role="tabpanel" aria-labelledby="list-die-list" style="margin-left:15%">
          <iframe width="674" height="379.13" src="https://www.youtube.com/embed/vsCr9kFXd68" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <!-- tombol -->
    <div align="center">
      <a href="http://www.writephponline.com/" target="_blank"><button class="btn btn-yoga">Uji Kode</button></a>
    </div>
</div>
</div>








  <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/propeller.min.js"></script>

</body>
</html>
