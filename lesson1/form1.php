<?php
    if(isset($_POST["mc"]))
    {
        $odp = $_POST["mc"];

        if($odp == "grudzien")
        {
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
    <form action="" method="post">
        Ktore miesiace sa jesiene?<br>
        <!-- [] w name pozwalaja odczytywac dane jako tablica -->
        <input type="checkbox" name="jesien[]" value="luty">Luty
        <input type="checkbox" name="jesien[]" value="grudzien">Grudzien
        <input type="checkbox" name="jesien[]" value="czerwiec">Czerwiec
        <input type="checkbox" name="jesien[]" value="wrzesien">Wrzesien
        <input type="checkbox" name="jesien[]" value="pazdziernik">Pazdziernik
        <input type="checkbox" name="jesien[]" value="lisopad">Lisopad
        <input type="submit" value="click">
    </form>
</body>
</html>

<?php
if(isset($_POST["jesien"]))
    {
        $odp = $_POST["jesien"];

        //print_r($odp);

        $odpowiedz = true;

        for($i = 0; $i < count($odp); $i++)
        {
            if($odp[$i] == "luty" || $odp[$i] == "grudzien" || $odp[$i] == "czerwiec")
            {
                $odpowiedz = false;
            }
        }

        if($odpowiedz){
            echo "Dobra odp";
        } else {
            echo "Zla odp";
        }   
    }
?>