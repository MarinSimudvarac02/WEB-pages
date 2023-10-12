<?php
include 'spoj.php';
session_start();

if ($_SESSION['uloga'] == 'administrator') {
    echo "<h1>Dobro došli!</h1>";
} else
    header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style-dodajbrisi.css">
        <title>Nk Orolik</title>
    </head>
    <body>
        <div class="col col-6">
             <div>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="index.php">Početna</a></li>
                    </ul>
        </div>
        <div col col-2>
            <form action="whatto.php" method="POST">
                <label class="form-label" for="ime">Ime kluba </label>
                <input class="form-control" type="text" name="ime" id="ime" ><br>
                <label class="form-label" for="pobjede">Pobjede </label>
                <input class="form-control" type="number" name="pobjede" id="pobjede"><br>
                <label class="form-label" for="nerjeseno">Nerješeni</label>
                <input class="form-control" type="number" name="nerjeseno" id="nerjeseno"><br>
                <label class="form-label" for="porazi">Porazi</label>
                <input class="form-control" type="number" name="porazi" id="porazi"><br>
                <label class="form-label" for="bodovi">Broj bodova</label>
                <input class="form-control" type="number" name="bodovi" id="bodovi">
                <input  class="btn btn-info" name="update" type="submit" value="Ažuriraj!">
            </form>
        </div>
    </body>
</html>

