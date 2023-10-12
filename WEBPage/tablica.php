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
        <h2>Tablica 3 Županijske nogometne lige Vukovar područje Vinkovci</h2>
        <div clas='parrent'>
        <div id="tablica">
        <?php

            $conn = new DatabaseConnection;
            $conn->connect();

            $sql = "SELECT * FROM poredak ORDER BY bodovi DESC";
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
                    echo "<td>" . $row['pobjede'] . "</td>";
                    echo "<td>" . $row['nerjeseno'] . "</td>";
                    echo "<td>" . $row['porazi'] . "</td>";
                    echo "<td>" . $row['bodovi'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            }
                if (isset($_SESSION['ime'] )) {
                if ($_SESSION['uloga'] == 'administrator') {
            ?></div>
            <button onclick="location.href='updatetable.php';">Ažuriraj tablicu</button>

            <?php 
                    }
                }
                else{

                    ?>
                    <button onclick="location.href='prijava.php';">Prijavi se!</button>
                    <?php
                }
            ?>
            
            <div clas='child'>
                <h3>Odigrane Utakmice <span id="dots">...</span></h3>
                
                <br>
                <table id="more">
                    <tr>
                        <th>Domaćin</th>
                        <th>Rezultat </th>
                        <th>Gost</th>
                        
                    </tr>
                    <tr>
                        <td>NK Orolik</td>
                        <td>0:7</td>
                        <td>HNK Vinkovci</td>
                        
                    </tr>
                    <tr>
                        <td>NK Obilić Ostrovo</td>
                        <td>4:3</td>
                        <td>NK Orolik</td>
                        
                    </tr>
                    <tr>
                        <td>NK Orolik</td>
                        <td>0:5</td>
                        <td>NK Šokadija (Đ)</td>
                    </tr>
                    <tr>
                        <td>NK Meteor</td>
                        <td>8:0</td>
                        <td>NK Orolik</td>
                        
                    </tr>
                    <tr>
                        <td>NK Orolik</td>
                        <td>7:0</td>
                        <td>NK Polet DNS</td>
                        
                    </tr>
                    <tr>
                        <td>NK Hrvatski Sokol (M)</td>
                        <td>9:1</td>
                        <td>NK Orolik</td>
                        
                    </tr>
                    <tr>
                        <td>NK Orolik</td>
                        <td>6:4</td>
                        <td>NK Čelik Gaboš</td>
                        
                    </tr>
                    <tr>
                        <td>NK Bosut Apševci</td>
                        <td>6:4</td>
                        <td>NK Orolik</td>
                        
                    </tr>
                    <tr>
                        <td>NK Orolik</td>
                        <td>0:3</td>
                        <td>NK Podgrađe</td>
                        
                    </tr>
                    <tr>
                        <td>NK Orolik</td>
                        <td>2:2</td>
                        <td>NK Borac Banovci</td>
                        
                    </tr>
                    <tr>
                        <td>NK Sremac Markušica</td>
                        <td>4:1</td>
                        <td>NK Orolik</td>
                        
                    </tr>
                </table> 
                <br>
                <button onclick="myFunction()" id="myBtn">Read more</button> 
            </div>
            <br>
            <div clas='child'>
                <h3>Raspored ostalih utakmica<span id="dots2">...</span></h3>
                
            <br>
                <table id="more2">
                    <tr>
                        <th>Domaćin</th>
                        <th>Gost</th>
                        <th>Datum</th>
                        
                    </tr>
                    <tr>
                        
                        <td>HNK Vinkovci</td>
                        <td>NK Orolik</td>
                        <td>26.3.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Orolik</td>
                        <td>NK Obilić Ostrovo</td>
                        <td>2.4.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Šokadija (Đ)</td>
                        <td>NK Orolik</td>
                        <td>9.4.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Orolik</td>
                        <td>NK Meteor</td>
                        <td>15.4.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Polet DNS</td>
                        <td>NK Orolik</td>
                        <td>23.4.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Orolik</td>
                        <td>NK Hrvatski Sokol (M)</td>
                        <td>30.4.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Čelik Gaboš</td>
                        <td>NK Orolik</td>
                        <td>7.5.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Orolik</td>
                        <td>NK Bosut Apševci</td>
                        <td>14.5.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Podgrađe</td>
                        <td>NK Orolik</td>
                        <td>21.5.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Borac Banovci</td>
                        <td>NK Orolik</td>
                        <td>28.5.2023.</td>
                    </tr>
                    <tr>
                        
                        <td>NK Orolik</td>
                        <td>NK Sremac Markušica</td>
                        <td>4.6.2023.</td>
                    </tr>
                </table> 
               <br>
                <button onclick="myFunction2()" id="myBtn2">Read more</button> 
            </div>
            </div>
            <script type="text/javascript">
            function myFunction() {
                var dots = document.getElementById("dots");
                var moreText = document.getElementById("more");
                var btnText = document.getElementById("myBtn");

                if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
                } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
                }} 
                function myFunction2() {
                var dots2 = document.getElementById("dots2");
                var moreText2 = document.getElementById("more2");
                var btnText2 = document.getElementById("myBtn2");

                if (dots2.style.display === "none") {
                dots2.style.display = "inline";
                btnText2.innerHTML = "Read more";
                moreText2.style.display = "none";
                } else {
                dots2.style.display = "none";
                btnText2.innerHTML = "Read less";
                moreText2.style.display = "inline";
                }
                }
            </script>
    </body>
</html>