<?php
require_once("../config.php");
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
</head>

<body>
    <h2>Rejestracja</h2>

    <form action="" method="post">
        email: <input type="text" name="email"><br>
        nick: <input type="text" name="nick"><br>
        haslo: <input type="password" name="pass"><br>
        powtorz haslo <input type="text" name="r_pass"><br>

        <input type="submit" value="Rejestrój">
    </form>

    <?php
    if (
        !empty($_POST['email'])
        && !empty($_POST['nick'])
        && !empty($_POST['pass'])
        && !empty($_POST['r_pass'])
    ) {
        
    }
    ?>
</body>

</html>