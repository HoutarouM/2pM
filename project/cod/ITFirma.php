<?php
    private $nazwa;
    private $adres;
    private $pracowniki = [];
    private $produkty = [];
    private $czyJestCEO = false;

    public function __construct($nazwa, $adres)
    {
        $this->nazwa = $nazwa;
        $this->adres = $adres; 
    }

    public function __get($zmienna)
    {
        return $this->$zmienna;
    }

    public function __set($zmienna, $dane)
    {
        $this->$zmienna = $dane;
    }

    public function __toString()
    {
        return "IT firma nazwa: $this->nazwa <br>
                adres: $this->adres <br>
                pracownicy: $this->pracownicy <br>
                podukty: $this->produkty <br>";
        // TODO: napisac wypisywanie pracownikow i produktow
    }

    public function dodajProdukt()
    {

    }

    public function dodajPracownika()
    {

    }

    public function dodajPracownikaDoGrupy()
    {

    }

    public function czyJestCEO()
    {

    }

    public function dodajCEO()
    {

    }
?>