<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klub wędkowania</title>
    <link rel="stylesheet" type="text/css" href="styl2.css">
</head>
<body>
    <div id="baner">
        <h2>Wędkuj z nami!</h2>
    </div>
    <div id="lewy">
        <img src="ryba2.jpg" alt="Szczupak">
    </div>
    <div id="prawy">
        <h3>Ryby spokojnego żeru(białe)</h3>
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'wedkowanie');
            if($con)
            {
                $query = "SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE `styl_zycia` = '2'";
                $res = mysqli_query($con, $query);

                while($data = mysqli_fetch_array($res))
                {
                    echo $data['id']." ".$data['nazwa'].", wystepuje w ".$data['wystepowanie']."<br>";
                }

                mysqli_close($con);
            }
        ?>
        <br>
        <ol>
            <li><a href="https://wedkuje.pl/">Odwiedź tak</a></li>
            <li><a href="https://www.pzw.org.pl/">Polski Związek Wędkarski</a></li>
        </ol>
    </div>
    <div id="stopka">
        <p>Stronę wykonał:</p>
    </div>
</body>
</html>