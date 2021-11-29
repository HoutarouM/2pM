<?php
    $con = mysqli_connect('localhost', 'root', '', 'egzamin3');    
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Wpisz imie <input type="text" name="name"><br>
        Wpisz nazwisko <input type="text" name="lastname"><br>
        Wpisz adres <input type="text" name="adres"><br>
        Wpisz datu <input type="date" name="date"><br>
        Ile punktow <input type="number" name="points"><br>
        <input type="submit" value="click">
    </form>
</body>
</html>

<?php
    if(!empty($_POST['name']) && !empty($_POST['lastname']) && !empty($_POST['adres']) &&
    !empty($_POST['date']) && !empty($_POST['points']))
    {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $adres = $_POST['adres'];
        $date = $_POST['date'];
        $points = $_POST['points'];

        $query = "INSERT INTO `karty_wedkarskie` (`id`, `imie`, `nazwisko`, `adres`, `data_zezwolenia`, `punkty`) VALUES (NULL, '$name', '$lastname', '$adres', '$date', '$points');";

        mysqli_query($con, $query);
    }
    mysqli_close($con);
?>