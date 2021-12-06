<?php

class Osoba{
    private $imie;
    private $nazwisko;

    public function __construct($imie, $nazwiako){
        $this->imie = $imie;
        $this->nazwisko = $nazwiako;
    }

    public function zwroc_imie()
    {
        return $this->imie;
    }

    public function __get($zmienna)
    {
        return $this->$zmienna;
    }

    public function zmien_imie($imie)
    {
        return $this->imie = $imie;
    }

    public function __set($zmienna, $imie)
    {
        // zabezpiecztc zeby wpisywali sie odpowiednie dane
        $this->$zmienna = $imie;
    }

    public function __toString()
    {
        return "Object klasy osoba<br>
        Imie: $this->imie,<br>
        Nazwisko: $this->nazwisko<br>";
    }
}

?>