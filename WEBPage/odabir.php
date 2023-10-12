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
<form action="" method="POST">
            <input class="form-control" type="number" name="broj" id="broj" placeholder="Unesite broj igrača kojeg želite obrisati"><br>
            <input  class="btn btn-info" name="delete" type="submit" value="Izbrisi!">
        </form>
        </div>
</body></html>
<?php
if ($_SESSION['ime'] == NULL) {
    echo 'neispravna sesija';
    header("location: index.php");
}
if ($_SESSION['uloga'] == 'administrator') {

    $conn = new DatabaseConnection;
    $conn->connect();

    if (isset($_POST['broj'])) {
        $broj = $_POST['broj'];
        $sql = "DELETE FROM orolik WHERE broj=$broj";

        if ($conn->query($sql)) {
            header("location: odabir.php");
        } else {
            echo "Error: " . $sql . ": -" . $conn->error();
        }

        $conn->close();
        header("location: ispis.php");
    }
} else
    header("location:index.php");
?>

