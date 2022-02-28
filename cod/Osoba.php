<?php
class Osoba
{
    private $imie;
    private $nazwisko;
    private $adres;
    private $email;
    private $grupa;

    public function __construct($imie, $nazwisko, $adres, $email, $grupa)
    {
        $this->imie = $imie;
        $this->nazwisko = $nazwisko;
        $this->adres = $adres;
        $this->email = $email;
        $this->grupa = $grupa;
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
                email: $this->email <br>
                grupa: $this->grupa <br>";
    }
}
