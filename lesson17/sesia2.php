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
    <p>tylko dla zalogowanych</p>

    <form action="" method="post">
        <input type="submit" name="wyloguj" value="wyloguj">
    </form>

    <form action="" method="post">
        <input type="checkbox" name="koszyk[]" value="mleko"> mleko
        <input type="checkbox" name="koszyk[]" value="chleb"> chleb
        <input type="checkbox" name="koszyk[]" value="woda"> woda

        <input type="submit" value="click">
    </form>

    <?php     
    
    $con = mysqli_connect('localhost', 'root', '', 'sesja');

    $login = $_SESSION['login'];

    $koszyk = '';

    $query = "SELECT `koszyk` FROM `loginy` WHERE `login` = '$login'";
    $res = mysqli_query($con, $query);
    $data = mysqli_fetch_array($res);

    while($data = mysqli_fetch_array($res)){
        $koszyk = $koszyk . $data[0] . ' ';
    }

        if(isset($_POST['koszyk']))
        {            
            for($i = 0; $i < count($_POST['koszyk']); $i++)
            {   
                $k = $_POST['koszyk'];

                if (str_contains($k[$i], $koszyk)) {
                    $koszyk = $koszyk . $_POST['koszyk'][$i] . ' ';
                }                
            }
            
            $_SESSION['koszyk'] = $koszyk;
        }

        if(isset($_POST['wyloguj']))
        {
            $query = "UPDATE `loginy` SET `koszyk` = '$koszyk' WHERE `login` = '$login';";

            mysqli_query($con, $query);

            mysqli_close($con);

            // chce wylogowac sie
            unset($_SESSION['login']);

            session_destroy();

            header('location: logowanie.php');
        }
    ?>
</body>
</html>
