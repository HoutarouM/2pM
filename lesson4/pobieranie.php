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
        <p>Imie i nazwisko</p>
        <input type="text" name="imie">
        <br>
        <input type="text" name="nazwisko">
        <input type="submit" value="click">
    </form>

    <?php

    if(isset($_POST['imie']) && isset($_POST['nazwisko'])){
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];

        $local_file = 'localfile.txt';

        $wp = fopen($local_file, 'w');

        $data = $imie.' '.$nazwisko;

        file_put_contents($local_file, $data);

        fclose($wp);
        }   

?>
</body>
</html>


