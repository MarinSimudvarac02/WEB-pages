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

        <?php
            include "spoj.php";

            session_start();
            if ($_SESSION['ime'] == NULL) {
                echo 'neispravna sesija';
                header("location: index.php");
            }
            if ($_SESSION['uloga'] == 'administrator') {

                $conn = new DatabaseConnection;
                $conn->connect();
                if (isset($_POST['ime'])) {
                    $ime = $_POST['ime'];
                    $pobjede = $_POST['pobjede'];
                    $nerjeseni = $_POST['nerjeseno'];
                    $porazi = $_POST['porazi'];
                    $bodovi = $_POST['bodovi'];
                    $sql = "UPDATE poredak SET ime='".$ime."',pobjede=".$pobjede.",nerjeseno=".$nerjeseni.",porazi=".$porazi.",bodovi=".$bodovi." WHERE ime='".$ime."'";
                    if ($conn->query($sql)) {
                        header("location: whatto.php");
                    } else {
                        echo "Error: " . $sql . ": -" . $conn->error();
                    }
                    if ($conn->query($sql)) {
                        header("location: tablica.php");
                    } else {
                        echo "Error: " . $sql . ": -" . $conn->error();
                    }
                }
            } else
                header("location:index.php");
    
        ?>

    </div>
</body>

</html>