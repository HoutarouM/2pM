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
        $con = mysqli_connect('localhost', 'root', '', 'egzamin3');
        
        $query = "SELECT `id`, `wynik` FROM `wyniki`";
        $res = mysqli_query($con, $query);

        while($data = mysqli_fetch_array($res))
        {
            echo "<input type='checkbox' name='wynik[]' value='$data[0]'>$data[1]<br>";
        }
        ?>

        <input type="submit" value="click">
    </form>

    <?php
        if(isset($_POST['wynik']))
        {
            $wyniki = $_POST['wynik'];
            for($i = 0; $i < count($wyniki); $i++)
            {
                $query = "DELETE FROM `wyniki` WHERE `wyniki`.`id` = $wyniki[$i]";
                mysqli_query($con, $query);

                header('Location: http://localhost/2pM/lesson8/delete.php');
            }
        }

        mysqli_close($con);
    ?>
    
</body>
</html>