<?php

    $con = mysqli_connect('localhost', 'root', '', 'sesja');

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
    password  <input type="password" name="pass">  <br>
    repeat password  <input type="password" name="rpass">  <br>

        <input type="submit" value="zaloguj">
    </form>

    <?php
        if(isset($_POST['login']) && isset($_POST['pass']) && isset($_POST['rpass']))
        {
            $login = $_POST['login'];

            $check = "SELECT `login` FROM `loginy` WHERE `login` = '$login'";

            $check = mysqli_query($con, $check);

            if(mysqli_fetch_array($check))
            {
                echo "wybierz inny login";

                exit;
            }

            if($_POST['pass'] == $_POST['rpass'])
            {
                $pass = $_POST['pass'];
            } else {
                echo 'haslo musze sie powtarzac';

                exit;
            }

            $pass = hash("sha256", $pass);

            $query = "INSERT INTO `loginy`(`id`, `login`, `haslo`, `koszyk`) VALUES (NULL, '$login', '$pass', NULL)";

            mysqli_query($con, $query);

            mysqli_close($con);

            header('location: logowanie.php');
        }
    ?>
</body>
</html>
