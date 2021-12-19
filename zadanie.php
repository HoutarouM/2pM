<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Lubisz kotow?
        <input type="radio" name="odp" value="t">tak
        <input type="radio" name="odp" value="n">nie

        <input type="submit" value="click">
    </form>

    <?php
        if(isset($_POST['odp']))
        {
            $ans = $_POST['odp'];

            if(!file_exists('ankieta.txt'))
            {
                $plik = fopen("ankieta.txt", "w");

                fclose($plik);
            }

            $plik = fopen("ankieta.txt", "a");
            
            fwrite($plik, $ans);

            fclose($plik);

            // echo readfile('ankieta.txt'); odczyt calego pliku
            
            $text = file_get_contents('ankieta.txt');

            $tcount = substr_count($text, 't');
            $ncount = substr_count($text, 'n');

            echo 'Tak glosowali: ' . $tcount."<br>";
            echo 'Nie glosowali: ' . $ncount;
        }
    ?>

    <?php
        $plik = fopen('ankieta.txt', 'r');

        // fgets, fgetss, fgetcsv 
        
        while(!feof($plik))
        {
            $odczy = fgets($plik, 999);

            echo $odczy."<br>";
        }

        fclose($plik);

        $plik = fopen('ankieta.txt', 'r');

        // fgets, fgetss, fgetcsv 
        
        while(!feof($plik))
        {
            $odczy = fgetc($plik);

            echo $odczy."<br>";
        }

        fclose($plik);
    ?>
</body>
</html>

