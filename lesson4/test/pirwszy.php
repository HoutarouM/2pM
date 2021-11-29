<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h2>Wybrac typ:</h2>
    <form action="" method="post">
    <select name="typ">
        
    <?php
//W nalowku 3 spnia wisujemy nazwy podzespolow.
//W akapicie opisy podzespolow. 
// Wyisywac tylko podzespoly dostene.
// dobra

// bdb
// Pytamy o typ podzepolu

// cel
// Typ z taleli typy

    $connect = mysqli_connect('localhost', 'root', '', 'dane');
    if($connect){
        $query = "SELECT * FROM `typy`";

        $res = mysqli_query($connect, $query);

        while($data = mysqli_fetch_array($res))
        {
            echo "<option value='$data[0]'>$data[1]</option>";
        }

        mysqli_close($connect);
    }
?>
</select>
<br>
<input type="submit" value="dalej">
</form>
<?php
//W nalowku 3 spnia wisujemy nazwy podzespolow.
//W akapicie opisy podzespolow. 
// Wyisywac tylko podzespoly dostene.
// dobra

// bdb
// Pytamy o typ podzepolu

// cel
// Typ z taleli typy

if(isset($_POST['typ'])){
    $typ = $_POST['typ'];

    $connect = mysqli_connect('localhost', 'root', '', 'dane');
    if($connect){
        $query = "SELECT `nazwa`, `opis` FROM `podzespoly` WHERE `dostepnosc` = 1 AND `typy_id` = '$typ'";
        $res = mysqli_query($connect, $query);

        while($data = mysqli_fetch_array($res)){
            echo "<div style='border: 1px solid black'>
            <h3>$data[0]</h3>
            <p>$data[1]</p>
        </div>";
        }

        mysqli_close($connect);
    }
}
?>
</body>
</html>


