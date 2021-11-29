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
        <select name="zawodnik">         
        
        <?php
             $con = mysqli_connect('localhost', 'root', '', 'egzamin2');
             $query = "SELECT * FROM `zawodnik`";
             $res = mysqli_query($con, $query);
 
             while($data = mysqli_fetch_array($res))
             {
                 echo "<option value='$data[0]'>$data[2] $data[3]</option>";
             }
        ?>

        <input type="submit" value="click">

    </select>
    </form>
</body>
</html>