<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="bazadanych4.php" method="post">
    <br>Model:<br>
    <?php
    if(isset($_POST['marka'])){
        $marka = $_POST['marka'];         

        $connect = mysqli_connect('localhost', 'root', '', 'komis');
            if($connect){
                $query = "SELECT DISTINCT `model` FROM `samochody` WHERE marka = '$marka';";
                $res = mysqli_query($connect, $query);

                while($data = mysqli_fetch_array($res)){
                    echo "<input type='radio' name='model' value='$data[0]'>$data[0]<br>";
                }

                mysqli_close($connect);
            }
    }
?>
    <input type="submit" value="dalej">
    </form>
</body>
</html>