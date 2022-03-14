<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
</head>

<body>
    <div id="menu">
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
    </div>
    <div id="logo">
        <h2>Podzespoły komputerowe</h2>
    </div>
    <div id="main">
        <h1>Dzisiejsze promocje</h1>
        <table>
            <tr>
                <th>NUMER</th>
                <th>NAZWA PODZESPOLU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>

            <!-- skrypt -->
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'sklep');

            $query = "SELECT `id`, `nazwa`, `opis`, `cena` FROM `podzespoly` WHERE `cena` < 1000";

            $res = mysqli_query($con, $query);

            while ($data = mysqli_fetch_array($res)) {
                echo "<tr>
                                <td>$data[0]</td>
                                <td>$data[1]</td>
                                <td>$data[2]</td>
                                <td>$data[3]</td>
                            </tr>";
            }

            mysqli_close($con);
            ?>

        </table>
    </div>
    <div id="footer1">
        <img src="scalak.jpg" alt="promocje na procesory">
    </div>
    <div id="footer2">
        <h4>Nasz Sklep Komputerowy</h4>
        <p>Współpracujemy z hurtownią <a href="http://www.edata.pl/" target="_blank">edata</a></p>
    </div>
    <div id="footer3">
        <p>zadzwon: 601 602 603</p>
    </div>
    <div id="footer4">
        <p>Stronę wykonał: </p>
    </div>
</body>

</html>