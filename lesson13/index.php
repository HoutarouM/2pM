<?php
    require('Osoba.php');
    require('Uczen.php');
    include('Nauczyciel.php');
    require_once('ZespolUczniow.php');
    require_once('Szkola.php');

    // require plik jest wymagany, jesli nie ma error
    // include dolacza jesli jest, jesli nie ma warrning

    $szkola1 = new Szkola('zs10', 'Chopina Zabrze');

    $szkola1->dodajNauczyciela("Edmund", "Niziurski", "biologia");

    $szkola1->dodajKlase('1p', $szkola1->nauczyciele[0]);
    $szkola1->dodajKlase('2p', $szkola1->nauczyciele[0]);
    $szkola1->dodajKlase('3p', $szkola1->nauczyciele[0]);

    $szkola1->dodajUczniaDoSzkoly('Emil', "Nowak");
    $szkola1->dodajUczniaDoSzkoly('Emil', "Nowak");
    $szkola1->dodajUczniaDoSzkoly('Emil', "Nowak");

    echo $szkola1;

    echo $szkola1->nauczyciele[0]->przedmiot;

    echo Szkola::$liczba_uczniow;
?>