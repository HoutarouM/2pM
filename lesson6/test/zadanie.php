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
        Adres <input type="text" name="adres"><br>

        Czy pilne? <input type="checkbox" name="pilne"><br>

        <select name="dydp">         
            <?php
                $connect = mysqli_connect("localhost", 'root', '', 'egzamin3');
                if($connect){
                    $query = "SELECT * FROM `dyspozytorzy`";

                    $res = mysqli_query($connect, $query);

                    while($data = mysqli_fetch_array($res))
                    {
                        echo "<option value='$data[0]'>$data[1] $data[2]</option>";
                    }

                    mysqli_close($connect);
                }
            ?>
        </select><br>

        <input type="submit" value="dodaj do bazy">
    </form>

    <?php
    if(isset($_POST['adres']) && isset($_POST['dydp']))
    {
        if(isset($_POST['pilne']))
        {
            $pilne = 1;
        }
        else
        {
            $pilne = 0;  
        }

        $adres = $_POST['adres'];
        $dysp = $_POST['dydp'];

        $connect = mysqli_connect("localhost", 'root', '', 'egzamin3');
        if($connect){
            $query = "INSERT INTO `zgloszenia` (`id`, `ratownicy_id`, `dyspozytorzy_id`, `adres`, `pilne`, `czas_zgloszenia`) VALUES (NULL, '2', '$dysp', '$adres', '$pilne', NOW())";

            mysqli_query($connect, $query);

            mysqli_close($connect);
        }

    }    
    ?>
</body>
</html>