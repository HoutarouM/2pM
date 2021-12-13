<?php
    // w - zapis
    // a - dopisywanie
    // r - czyt
    $plik = fopen("dane.txt", "w");
    // jezeli otwieramy nieistnirjacy plik do zapisu to zostaje on utworzony

    fwrite($plik, 'inny zapis'.PHP_EOL);
    // jezeli w pliku jest juz co zapisa to zawartosc bedzie nadpisana 

    fclose($plik);

    $plik2 = fopen('dane.txt', 'a');

    fwrite($plik2, 'cos nowego');
    // a tryb dopisywania do pliku
    // zawartosc nie zmieniona
    // dopis na koncu pliku

    fclose($plik2);

    if(! $plik2 = fopen('dane.txt', 'r'))
    {
        echo 'nie znaleziono';
    } 
    else
    {
        while(!feof($plik2))
        {
            $text = fread($plik2, 100);

            echo $text;
        }
    }


?>