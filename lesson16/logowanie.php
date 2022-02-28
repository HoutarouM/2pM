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
            $login = $_POST['login'];
            $pass = $_POST['pass'];

            if($login == 'admin' && $pass == '1234')
            {
                $_SESSION['login'] = $login;

                header('location: sesia2.php');
            }
        }
    ?>
</body>
</html>