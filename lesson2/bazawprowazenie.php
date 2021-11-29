<?php
// kod do wypisania danych z bazy
    $connect = mysqli_connect("localhost", "root", "", "klasa2P2");

    if($connect){
        echo "<br>Polaczono<br>";
    }

    $query = "SELECT `login`, `email` FROM `loginy`";

    $res = mysqli_query($connect, $query);

    echo "<h3> login - email</h3>";

    while($rekord=mysqli_fetch_array($res)){
        echo "$rekord[0] - $rekord[1]<br>";
    }

    mysqli_close($connect);
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
        <h4>Dodaj nowego urzytkownika</h4>
        <p>Login: </p> <input type="text" name="login">
        <p>Haslo: </p> <input type="password" name="pass">
        <p>Email: </p> <input type="email" name="email">
        <input type="submit" value="click">
    </form>
</body>
</html>

<?php
// kod do dodania do bazy
if(!empty($_POST["login"]) && !empty($_POST["pass"]) && !empty($_POST["email"])){    
    $login = $_POST["login"];
    $pass = $_POST["pass"];
    $email = $_POST["email"];
    
    $connect = mysqli_connect("localhost", "root", "", "klasa2P2");

    $query = "INSERT INTO `loginy` (`id`, `login`, `pass`, `email`) VALUES (NULL, '$login', '$pass', '$email');";

    if($connect){
        mysqli_query($connect, $query);

        mysqli_close($connect);

        header("location:bazawprowazenie.php");
    }
}
?>

<?php
// kod do wypisania danych z bazy
    $connect = mysqli_connect("localhost", "root", "", "klasa2P2");

    if($connect){
        $query = "SELECT `login` FROM `loginy` ORDER BY login DESC;";

        $res = mysqli_query($connect, $query);

        echo "<h3> login </h3>";

        echo "<ol>";

        while($rekord=mysqli_fetch_array($res)){
            echo "<li>$rekord[0]</li>";
        }

        echo "</ol>";

        mysqli_close($connect);
    }
?>