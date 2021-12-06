<?php

class Osoba
{
    private $imie;
    private $nazwisko;
    private $adres;
    private $email;

    public function __construct($imie, $nazwisko, $adres, $email)
    {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->adres = $adres;
        $this->email = $email;
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
        return "Osoba imie: $this->imie <br>
                nazwisko: $this->nazwisko <br>
                adres: $this->adres <br>
                email: $this->email <br>";
    }
}

?>