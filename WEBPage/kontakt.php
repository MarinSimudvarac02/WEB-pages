<?php
include "spoj.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-konakt.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
    <title>Nk Orolik - Kontakt</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav w-100">
      <li class="nav-item">
        <a href="index.php">Početna</a>
      </li>
     <li class="nav-item">
     <a href="dresovi.php">Dresovi</a>
      </li>
      <li class="nav-item">
      <li><a href="ispis.php">Momčad</a></li>
      </li>
      <li class="nav-item">
        <li><a href="tablica.php">Tablica</a></li>>
      </li>
      <li class="nav-item">
      <li><a href="kontakt.php">Kontakt</a></li>
      </li>
      <li class="nav-item">
        <li><a href="sponzori.php">Sponzori</a></li>
      </li>
    </ul>
      <?php
                if (isset($_SESSION['ime'] )) {
            ?><ul class="nav justify-content-end">
            <li id="desno"><a href="odjava.php" class="logout">Odjava</a></li>
                </ul>
            <?php
                }
                else{
                ?>
                <ul class="nav justify-content-right">
                <li class="nav-item">
                     <li id="desno"><a href="prijava.php">Prijava</a></li>
                    </li>
                </ul>
                    <ul class="nav justify-content-end">
                    <li class="nav-item">
                <li id="desno"><a href="registracija.php">Registracija</a></li>
                </li>
                </ul>
                <?php
            }?>
    
  </div>
</nav>           
      <div>
      <img src="grbic.png" alt="">
      <h1>Kontakt</h1>
    </div>
    <div class="parent">
        <div class="mapouter">
            <div class="kontakt">
                <strong>Opći kontakt</strong>
                <br>
                <p> 
                    mail: nkorolik@gmail.com 
                    <br>
                    Tel: +385 31 540 012
                </p>
                <strong>Uprava</strong>
                <br>
                <p> 
                    Antonio Nađ
                    <br>
                    mail: uprava-nkorolik@gmail.com 
                    <br>
                    Tel: +385 99 788 3596
                </p>
                <strong>Marketing</strong>
                <br>
                <p> 
                    Mato Lučić
                    <br>
                    mail: marketing-nkorolik@gmail.com 
                    <br>
                    Tel: +385 91 614 4685
                </p>
                <br>
                <strong>Ulaznice</strong>
                <p> 
                    Aleksandro Logov
                    <br>
                    mail: ulaznice-nkorolik@gmail.com 
                    <br>
                    Tel: +385 97 750 5384
                </p>
            </div>
        </div>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Orolik&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                </iframe><a href="https://formatjson.org/">format json</a>
            </div>
            <style>.mapouter{position:relative;text-align:right;width:400px;height:600px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}
            </style>
        </div>
    </div>
</body>
</html>