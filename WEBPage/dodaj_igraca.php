<?php
include 'spoj.php';

session_start();

if ($_SESSION['uloga'] == 'administrator') {
    echo "<h1>Dobro došli!</h1>";
} else
    header("location:index.php");
?>
<!DOCTYPE html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style-dodajbrisi.css">
    <title>NK Orolik</title>
</head>

<body>

    <div class="col col-6">
        <div>
            <ul class="list-group">
                <li class="list-group-item"><a href="index.php">Početna</a></li>
            </ul>
        </div>

        <form action="unos.php" method="post">
            <label class="form-label" for="ime">Ime </label>
            <input class="form-control" type="text" name="ime" id="ime"><br>
            <label class="form-label" for="prezime">Prezime</label>
            <input class="form-control" type="text" name="prezime" id="prezime"><br>
            <label class="form-label" for="pozicija">Pozicija igrača</label>
            <input class="form-control" type="text" name="pozicija" id="pozicija"><br>
            <label class="form-label" for="broj">Broj igrača</label>
            <input class="form-control" type="number" name="broj" id="broj">
            <input onclick="location.href='ispis.php';" class="btn btn-info" type="submit" value="Dodaj!">
        </form>
    </div>
</body>

</html>