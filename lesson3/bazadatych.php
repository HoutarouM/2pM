<table border="2px solid black">
    <tr>
    <th>marka</th>
    <th>model</th>
    <th>rocznik</th>
    <th>kolor</th>
</tr>
<?php
    $connect = mysqli_connect('localhost', 'root', '', 'komis');

    if($connect){
        $query = "SELECT `marka`, `model`, `rocznik`, `kolor` FROM `samochody`";

        $res = mysqli_query($connect, $query);
            while($rec = mysqli_fetch_array($res)){
                echo "<tr><td>$rec[0]</td>
                <td>$rec[1]</td>
                <td>$rec[2]</td>
                <td>$rec[3]</td></tr>";
            }

        mysqli_close($connect);
    }
?>
</table>
<br>


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
        W jakim koloze samochody chcesz zobaczyc?<br>
        <select name="colour">
<?php
    $connect = mysqli_connect('localhost', 'root', '', 'komis');

    if($connect){
        $query = "SELECT DISTINCT `kolor` FROM `samochody`";

        $res = mysqli_query($connect, $query);
            while($rec = mysqli_fetch_array($res)){
                echo "<option value='$rec[0]'>$rec[0]</option>";
            }

        mysqli_close($connect);
    }
?>
</select>
        <input type="submit" value="click">
        </form>
<?php
if(isset($_POST['colour'])){
    $connect = mysqli_connect('localhost', 'root', '', 'komis');

    if($connect){
        $color = $_POST['colour'];
        
        $query = "SELECT `marka`, `model`, `rocznik`, `kolor`, `stan` FROM `samochody` WHERE kolor='$color';";
        echo "<table border='2px solid black'>
        <tr>
        <th>marka</th>
        <th>model</th>
        <th>rocznik</th>
        <th>kolor</th>
        <th>stan</th>
    </tr>";
        $res = mysqli_query($connect, $query);
            while($rec = mysqli_fetch_array($res)){
                echo "<tr><td>$rec[0]</td>
                <td>$rec[1]</td>
                <td>$rec[2]</td>
                <td>$rec[3]</td>
                <td>$rec[4]</td></tr>";
            }

        mysqli_close($connect);
        }
    }
    ?>

    </table>
</body>
</html>