<?php
include_once "spoj.php";

session_start();
if ($_SESSION['ime'] == NULL) {
    echo 'neispravna sesija';
    header("location: index.php");
}
if ($_SESSION['uloga'] == 'administrator') {

    $conn = new DatabaseConnection;
    $conn->connect();

    if (isset($_POST['broj'])) {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $pozicija = $_POST['pozicija'];
        $broj = $_POST['broj'];
        $sql = "INSERT INTO orolik(ime,prezime,pozicija,broj) VALUES ('$ime','$prezime','$pozicija','$broj')";

        if ($conn->query($sql)) {
            header("location: unos.php");
        } else {
            echo "Error: " . $sql . ": -" . $conn->error();
        }

        $conn->close();

        echo "<h2>Unos uspiješan</h2>";
        header("location: ispis.php");
    }
} else
    header("location:index.php");
?>
