<?php

require_once "spoj.php";

if (isset($_POST['username'])) {

    unset($error);

    $conn = new DatabaseConnection;
    $conn->connect();

    $sql = 'SELECT * FROM korisnici WHERE ime = "' . $username . '"';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $error = "Korisničko ime zauzeto!<br>";

    } else {

        if (isset($_POST['username'])) {

            $ime = $_POST['ime'];
            $prezime = $_POST['prezime'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "INSERT INTO korisnici (ime,prezime,k_ime,lozinka,uloga) VALUES('$ime','$prezime','$username','$password','korisnik')";

            if ($conn->query($sql)) {
                header("location: index.php");
            } else {
                echo "Error: " . $sql . ": -" . $conn->error();
            }

            $conn->close();
            echo "<h2>Unos uspiješan</h2>";
        }
    }
}
?>
<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Nk Orolik</title>
</head>

<body>
<h2>Registracija</h2>
        <p>Molimo ispunite vaše podatke za registraciju</p>
    <div class="col col-6">
        <form action="" method="post">
            <label class="form-label" for="ime">Ime</label>
            <input class="form-control" type="text" name="ime" id="ime"><br>
            <label class="form-label" for="prezime">Prezime</label>
            <input class="form-control" type="text" name="prezime" id="prezime"><br>
            <label class="form-label" for="username">Korisničko ime</label>
            <input class="form-control" type="text" name="username" id="username"><br>
            <label class="form-label" for="password">Lozinka</label>
            <input class="form-control" type="password" name="password" id="password"><br>
            <input class="btn btn-info" type="submit" value="Predaj">
        </form>
    </div>
</body>

</html>