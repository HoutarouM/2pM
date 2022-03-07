<?php

    session_start();

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
    login <input type="text" name="login">  <br>
    password  <input type="text" name="pass">  <br>

        <input type="submit" value="zaloguj">
    </form>

    

    <?php
        if(isset($_POST['login']) && isset($_POST['pass']))
        {
            $con = mysqli_connect('localhost', 'root', '', 'sesja');

            $login = $_POST['login'];
            $pass = $_POST['pass'];

            $pass = hash('sha256', $pass);

            $query = "SELECT `login`, `haslo` FROM `loginy` WHERE `login` = '$login' AND `haslo` = '$pass'";
            $res = mysqli_query($con, $query);

            if(mysqli_fetch_array($res))
            {
                $_SESSION['login'] = $login;    

                mysqli_close($con);

                header('location: sesia2.php');           
            } else {
                echo "zly login lub haslo";
            }        
            
            mysqli_close($con);
        }
    ?>
</body>
</html>