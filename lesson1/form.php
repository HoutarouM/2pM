<?php
if(isset($_POST["miesiac"])){
    echo "form wypeliony<br>";

    $odp = $_POST["miesiac"];

    if ($odp == "wrzesien") {
        echo "Dobra odp";
    } else {
        echo "Zla odp";
    }
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
<form action="form1.php" method="POST">
    <br>
    Kiedy przychodzi Mikolaj?<br>
    <input type="radio" name="mc" value="wrzeszen">We Wrzeszniu<br>
    <input type="radio" name="mc" value="listopad">W Listopadzie<br>
    <input type="radio" name="mc" value="grudzien">W Grudniu<br>
    <input type="submit" value="click">
</form>
</body>
</html>
