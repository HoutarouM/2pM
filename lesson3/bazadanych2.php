<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bazadanych3.php" method="post">
        Marka:<br>
        
        <?php
            $connect = mysqli_connect('localhost', 'root', '', 'komis');
            if($connect){
                $query = "SELECT DISTINCT `marka` FROM `samochody`";
                $res = mysqli_query($connect, $query);

                while($data = mysqli_fetch_array($res)){
                    echo "<input type='radio' name='marka' value='$data[0]'>$data[0]<br>";
                }

                mysqli_close($connect);
            }
        ?>
        <input type="submit" value="dalej">
    </form>
</body>
</html>

