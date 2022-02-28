<?php

    session_start();

    if(!isset($_SESSION['login']))
    {
        header('location: logowanie.php');
    }

    if(isset($_SESSION['licznik'])) {
        echo "juz u nas byles";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="wyloguj" value="wyloguj">
    </form>

    <?php
        if(isset($_POST['wyloguj']))
        {
            session_destroy();

            unset($_SESSION['login']);

            header('location: logowanie.php');
        }
    ?>
</body>
</html>
