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
    <link rel="stylesheet" href="style-dresovi.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
    <title>NK Orolik - dresovi</title>
    
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
    <div class="dres22">
        <h1>Dresovi sezona 2022/2023</h1>
        <div class="domaci">
            <strong>Domaći dres </strong>
            <br>
            <img id="prvo" src="domaci-.png" alt="">
        </div>
        <div class="gostujuci">
            <strong>Gostujući dres </strong>
            <br>
            <img id="prvo" src="gostujuci.png" alt="">
        </div>
    </div>
    <div class="ostalo">
        <h1>Prvi dresovi 2019.godine</h1>
        <div class="prvi">
            <strong>Domaći dres (Prva verzija 2019.god )</strong>
            <br>
            <img id="drugo" src="domaci.png" alt="">
        </div>
        <div class="drugi">
            <strong>Domaći dres dugih rukava (Prva verzija 2019.god)</strong>
            <br>
            <img id="drugo" src="dres_dugih.png" alt="">
        </div>
    </div>
</body>
</html>