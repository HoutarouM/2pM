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
        <h3>Dodaj ogloszenia do bazy</h3>
        <p>Podaj tytul ogloszenia
            <input type="text" name="tytul">
        </p>
        <p>Dodatj tresc ogloszenia
            <textarea name="tresc" cols="30" rows="5"></textarea>
        </p>
        <input type="submit" value="dodaj">
    </form>

    <?php
        // Wstaw do bazy danych ogloszenie z formu
        // formularz zawiera input typ text
        // duze pole na trzesc ogloszenia

        if(!empty($_POST["tytul"]) && !empty($_POST["tresc"])){
            echo 'wypelniono formulaz';

            $tytul = $_POST['tytul'];
            $tresc = $_POST['tresc'];

            $connect = mysqli_connect('localhost', 'root', '', 'dane');
            if($connect){
                $query = "INSERT INTO `ogloszenie` (`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (NULL, '1', '2', '3', '$tytul', '$tresc');";

                mysqli_query($connect, $query);

                mysqli_close($connect);
            }
        }
    ?>
</body>
</html>
