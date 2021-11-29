<?php
$con = mysqli_connect('localhost', 'root', '', 'egzamin');
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
        Zespol 1:
        
        <select name="zes1">
            
        <?php        
            $query = "SELECT `zespol` FROM `liga`";

            $res = mysqli_query($con, $query);
            while($data = mysqli_fetch_array($res)){
                echo "<option value='$data[0]'>$data[0]</option>";
            }
                
            ?>
        </select>
        Zespol 2:
        <select name="zes2">
        <?php
            $query = "SELECT `zespol` FROM `liga`";

            $res = mysqli_query($con, $query);
            while($data = mysqli_fetch_array($res)){
                echo "<option value='$data[0]'>$data[0]</option>";
            }
            
                
            ?>
        </select>
        Podaj wynik
        <input type="text" name="wynik">
        Podaj data
        <input type="date" name="data">

        <input type="submit" value="click">
    </form>
</body>
</html>

<?php
    if(isset($_POST['zes1']) && isset($_POST['zes2']) && !empty($_POST['wynik']) && !empty($_POST['data'])){
        $zes1 = $_POST['zes1'];
        $zes2 = $_POST['zes2'];

        $wynik = $_POST['wynik'];
        $data = $_POST['data'];

       if($zes1 != $zes2){
                $query = "INSERT INTO `rozgrywka` (`id`, `zespol1`, `zespol2`, `wynik`, `data_rozgrywki`) VALUES (NULL, '$zes1', '$zes2', '$wynik', '$data')";
    
                mysqli_query($con, $query);
            } else {
            echo "Wybierz rozne zespoly";
        }
        mysqli_close($con);
        header('lacation: zespol.php')
    }
?>

