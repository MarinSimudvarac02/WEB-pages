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
    <link rel="stylesheet" href="style-sponzori.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
    <title>NK Orolik - sponzori</title>
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
    <h1>Sponzori NK Orolik-a</h1>
    <div>
        <strong>Kiki dizajn j.d.o.o.</strong>
            <br>
            <div class="kikioboje">
            <div class="kikidizajn">
                <p> 
                    Izrada stolarija/namještaja po mjeri
                    <br>
                    Adresa: Dr.Franje Tuđmana 49, Orolik 
                    <br>
                    Tel: +385 97 786 4468
                </p>
            </div>
                <div >
                    <img src="kikidizajn.png" alt="">
                </div>
                <br>
            </div>
        <strong>Kuća za odmor Nađ</strong>
            <br>
            <div class="kuca">
            <div class="nad">
                <p> 
                    Srijemska kuća sređena u tradicijskom stilu,<br>
                    na obroncima Fruške gore
                    <br>
                    Adresa: Dr.Franje Tuđmana 40, Orolik 
                    <br>
                    Tel: +385 97 786 4468
                </p>
            </div>
            
            <div>
                <img id="kzon"src="kucazaodmor.png" alt="">
            </div>
            </div>
                <strong>Općina Stari Jankovci</strong>
                <br>
                <div class="opcina">
                    <div class="jankovci">
                        <p> 
                            Dragan Sudarević
                            <br>
                            Adresa: Dr.Franje Tuđmana 1, Stari Jankovci 
                            <br>
                            Tel: +385 32 541 902
                        </p>
                    </div>
                    <div>
                        <img src="opcina.png" alt="">
                    </div>
                <br>
            </div>
                <strong>Elektros j.d.o.o.</strong>
                <div class="elektros">
                    <div class="sinisa">
                        <p> 
                            Siniša Vukov
                            <br>
                            Elektroinstalacijski radovi
                            <br>
                            Dr. Franje Tuđmana 10, Orolik 
                            <br>
                            Tel: +385 32 548 149 
                        </p>
                    </div>
                    <div>
                        <img src="domaci-.png" alt="">
                    </div>
                </div>
        </div>

</body>
</html>