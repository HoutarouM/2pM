<?php

    print_r($GLOBALS);

    if(isset($_COOKIE['obecny'])) {
        echo "witamy ponownie <br>";
    } else {
        echo "witamy po raz pierwszy, ustawiamy ciasteczko";

        setcookie("obecny", "wartosc", time() + 30);
        // zostawiamy ciasteczko
        // nazwa obecny
        // na 30 sekund
    }

    // licznik czasu pomiedzy odswierzeniem strony
    if(!isset($_COOKIE['czas'])) {
        echo "jeszcze cie tu nie bylo";

        setcookie('czas', time(), time() + 60 * 60);
    } else {
        $teraz = time();
        $kiedys = $_COOKIE['czas'];

        $ile_secund = $teraz - $kiedys;

        echo "Bylo sie u nas ostatnio $ile_secund";

        setcookie('czas', time(), time() + 60 * 60);
    }

    echo "<br>";

    // licznik odswierzen strony

    if(!isset($_COOKIE['licznik']))
    {
        echo "witamy po raz pierwszy, ustawiamy ciasteczko";

        setcookie('licznik', 1, time() + 60 * 60 * 24 * 30);
    } else {
        $ktory = $_COOKIE['licznik'] + 1;

        echo "Ktory zaz $ktory";

        setcookie('licznik', $ktory, time() + 60 * 60 * 24 * 30);
    }

?>