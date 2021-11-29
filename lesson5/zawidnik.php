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
    Pozycja:  
        <select name="poz">                      
            <?php
                $con = mysqli_connect('localhost', 'root', '', 'egzamin');
                if($con){
                    $query = "SELECT id, `nazwa` FROM `pozycja`";

                    $res = mysqli_query($con, $query);

                    while($data = mysqli_fetch_array($res)){
                        echo "<option value='$data[0]'>$data[1]</option>";
                    }
                }
            ?>
        </select>
        <br>
        Imie <input type="text" name="name"><br>
        Nazwisko <input type="text" name="lastname"><br>
        <input type="submit" value="click">
    </form>
</body>
</html>

<?php
    if(isset($_POST["poz"]) && !empty($_POST['name']) && !empty($_POST['lastname'])){
        $poz = $_POST["poz"];

        $name = $_POST["name"];
        $lastname = $_POST['lastname'];

        $query = "INSERT INTO `zawodnik` (`id`, `pozycja_id`, `imie`, `nazwisko`) VALUES (NULL, '$poz', '$name', '$lastname');";
    }
?>