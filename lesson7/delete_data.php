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
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'egzamin2');
            $query = "SELECT `id`, `wynik`, `dataUstanowienia` FROM `wyniki`";
            $res = mysqli_query($con, $query);

            while($data = mysqli_fetch_array($res))
            {
                echo "<input type='checkbox' name='wynik[]' value='$data[0]'> wynik: $data[1] data: $data[2] <br>";
            }
        ?>

        <input type="submit" value="usun">
    </form>

    <?php
        if(isset($_POST['wynik']))
        {
            $wynik = $_POST['wynik'];
            // print_r($wynik);
            $query = "DELETE FROM `wyniki` WHERE `wyniki`.`id` = $wynik[0]";
            for($i = 1; $i < count($wynik); $i++)
            {
                $query = $query."OR `id` = wynik[$i]";                
            } 
            mysqli_query($con, $query);           
        }

        mysqli_close($con);
    ?>
</body>
</html>