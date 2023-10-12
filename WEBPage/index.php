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
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>NK Orolik</title>
</head>
<body>

    <div class="container">
        <img src="grbic.png" alt="">
        <h1>Nogometni Klub Orolik</h1>
        <br>
        <a href="ispis.php"><button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-list-alt"></span> Momčad
          </button></a>
          <a href="tablica.php">
        <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-list"></span> 
            Tablica
          </button> </a>
          <a href="kontakt.php">
            <button type="button" class="btn btn-default btn-sm">           
            <span class="glyphicon glyphicon-map-marker"></span> Kontakt
          </button></a>
    </div>
    
</body>
</html>