<?php
    require('Osoba.php');
    require('Uczen.php');
    include('Nauczyciel.php');
    require_once('ZespolUczniow.php');
    require_once('Szkola.php');

    // require plik jest wymagany, jesli nie ma error
    // include dolacza jesli jest, jesli nie ma warrning    

    $nauczyciel1 = new Nauczyciel("Edmund", "Niziurski", "biologia");

    $szkola1 = new Szkola('zs10', 'Chopina Zabrze');

    $szkola1->dodajKlase('1p', $nauczyciel1);
    $szkola1->dodajKlase('2p', $nauczyciel1);
    $szkola1->dodajKlase('3p', $nauczyciel1);

    $szkola1->dodajUczniaDoSzkoly('Emil', "Nowak");
    $szkola1->dodajUczniaDoSzkoly('Emil', "Nowak");
    $szkola1->dodajUczniaDoSzkoly('Emil', "Nowak");

    echo $szkola1;

    echo Szkola::$liczba_uczniow;
?>