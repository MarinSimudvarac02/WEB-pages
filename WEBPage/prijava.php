<?php
include "spoj.php";
session_start();

if ($_POST) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $conn = new DatabaseConnection;
        $conn->connect();

        $myusername = mysqli_real_escape_string($conn->getConnection(), $_POST['username']);
        $mypassword = mysqli_real_escape_string($conn->getConnection(), $_POST['password']);

        $sql = "SELECT id from korisnici WHERE k_ime = '$myusername' and lozinka = '$mypassword'";

        $result = $conn->query($sql);
        $row = $conn->getArray($result);
        $count = $conn->getCount($result);

        $id = $row['id'];

        $sql2 = "SELECT * FROM korisnici WHERE id = '$id'";
        $resultAll = $conn->query($sql2);

        if (!$resultAll) {
            die($conn->error());
        }

        if ($conn->getCount($resultAll) > 0) {
            $rowData = $conn->getArray($resultAll);
        }

        if ($count == 1) {
            $_SESSION['ime'] = $rowData['ime'];
            $_SESSION['prezime'] = $rowData['prezime'];
            $_SESSION['uloga'] = $rowData['uloga'];
                header("location: index.php");
                exit();

        } else {
            $error = "You don't have account, try again";
        }
    } else {
        $error = "Your login name or password is inavlid";
    }
    if ($_SESSION['uloga'] == 'admin') {
        $ime = $_SESSION['ime'];
        $prezime = $_SESSION['prezime'];
        echo "<h1>Dobro došli $ime $prezime !</h1>";
    } else
        header("location:index.php");
    echo "<label class=\"text-danger\">$error</label>";
}
?>
<!DOCTYPE html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="col col-3">
        <h2>Log in</h2>
        <p>Molimo ispunite vaše podatke za prijavu</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Korisničko ime</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label>Lozinka</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Nemate račun? <a href="registracija.php">Registrirajte se sada</a>.</p>
        </form>
    </div>
</body>

</html>