<?php
class Uczen extends Osoba{
    // kalsa Uczen to klasa potamna
    // klasa Oboba to klasa bazowa
    // klasa Uczen dziedziczy wszystkie metody publiczne i chronieone
    private $nr_Ucznia;

    public function __construct($imie, $nazwisko, $nr)
    {
        parent::__construct($imie, $nazwisko);
        $this->nr_Ucznia = $nr;
    }

    public function __toString()
    {
        return 'imie: '. $this->imie."<br>nazwisko: ". $this->nazwisko. "<br> nr_Ucznia: ". $this->nr_Ucznia. "<br>";
    }
}
?>
