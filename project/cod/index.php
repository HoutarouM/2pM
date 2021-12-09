<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>

<body>
    <?php
    require_once('ITFirma.php');

    // Instrukcja
    // na poczatku tworzymy firme
    // dalej dodajemy nowe produkty
    // dalej dodajemy nowych liderow
    // na koncu dodajemy pracownikow

    $firma1 = new ITFirma('Apple', 'Silicon Walley 5');

    $firma1->dodajProdukt('produkt', 1);

    $firma1->dodajZadanieDoProduktu('produkt', 'zadanie1');

    $firma1->dodajLidera('Natan', 'Nowak', 'adres test', 'natan@gmail.com', 1);

    $firma1->dodajPracownika("Marcin", "Hock", 'aaa steet 5', 'marcin@gmail.com', 1, 'junior');

    echo $firma1;
    ?>
</body>

</html>