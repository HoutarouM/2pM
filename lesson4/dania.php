<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'dane');
        if($conn){
            $query = "SELECT `nazwa`, `cena` FROM `dania`";
            $res = mysqli_query($conn, $query);

            while($data = mysqli_fetch_array($res)){
                echo "<li>$data[0] w cenie $data[1] zl</li>";
            }

            mysqli_close($conn);
        }
    ?>
    </ul>
</body>
</html>