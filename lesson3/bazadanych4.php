<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="res.php" method="post">
    <br>Rocznik:<br>
    <?php
    if(isset($_POST['model'])){
        $model = $_POST['model']; 

        $connect = mysqli_connect('localhost', 'root', '', 'komis');
            if($connect){
                $query = "SELECT DISTINCT `rocznik` FROM `samochody` WHERE model = '$model';";
                $res = mysqli_query($connect, $query);

                while($data = mysqli_fetch_array($res)){
                    echo "<input type='radio' name='rocznik' value='$data[0]'>$data[0]<br>";
                }

                mysqli_close($connect);
            }
    }
?>

    <br>Kolor:<br>
    <?php
    if(isset($_POST['model'])){
        $model = $_POST['model']; 

        $connect = mysqli_connect('localhost', 'root', '', 'komis');
            if($connect){
                $query = "SELECT DISTINCT `kolor` FROM `samochody` WHERE model = '$model';";
                $res = mysqli_query($connect, $query);

                while($data = mysqli_fetch_array($res)){
                    echo "<input type='radio' name='kolor' value='$data[0]'>$data[0]<br>";
                }

                mysqli_close($connect);
            }
    }
?>
    <br>Stan:<br>
    <?php
    if(isset($_POST['model'])){
        $model = $_POST['model'];

        $connect = mysqli_connect('localhost', 'root', '', 'komis');
            if($connect){
                $query = "SELECT DISTINCT `stan` FROM `samochody` WHERE model = '$model';";
                $res = mysqli_query($connect, $query);

                while($data = mysqli_fetch_array($res)){
                    echo "<input type='radio' name='stan' value='$data[0]'>$data[0]<br>";
                }

                mysqli_close($connect);
            }
    }
?>
    <input type="submit" value="dalej">
    </form>
</body>
</html>