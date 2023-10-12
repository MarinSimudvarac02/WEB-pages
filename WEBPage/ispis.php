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
    <title>NK Orolik - momčad</title>
    <link rel="stylesheet" href="style-momcad.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
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
      <h2>Momčad NK Orolik</h2>
      <?php

$conn = new DatabaseConnection;
$conn->connect();

$sql = "SELECT * FROM orolik";
$resultAll = $conn->query($sql);

if (!$resultAll) {
    die($conn->error());
}
if ($conn->getCount($resultAll) > 0) {

    echo "<div class=\"col col-6\">";
    echo "<table class=\"table\">";

    while ($row = $conn->getArray($resultAll)) {
        echo "<tr>";
        echo "<td>" . $row['ime'] . "</td>";
        echo "<td>" . $row['prezime'] . "</td>";
        echo "<td>" . $row['pozicija'] . "</td>";
        echo "<td>" . $row['broj'] . "</td>";
        echo "<td>" . $row['datum dolaska'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
}
?>
<?php 
    if (isset($_SESSION['ime'] )) {
    if ($_SESSION['uloga'] == 'administrator') {
?>
<button onclick="location.href='dodaj_igraca.php';">Dodaj igrača</button>
<button onclick="location.href='odabir.php';">Izbriši igrača</button>
<?php 
    }
}
    else{

        ?>
        <button onclick="location.href='prijava.php';">Prijavi se!</button>
        <?php
    }
?>
</body>
</html>