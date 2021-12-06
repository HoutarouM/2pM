<?php
class Nauczyciel extends Osoba{
    private $przedmiot;

    public function __construct($imie, $nazwisko, $przedmiot)
    {
        parent::__construct($imie, $nazwisko);
        $this->przedmiot = $przedmiot;
    }

    public function __toString()
    {
        return 'imie: '. $this->imie."<br>nazwisko: ". $this->nazwisko. "<br> pzredmiot: ". $this->przedmiot. "<br>";
        // return parent::__toString(). "przedmiot<br>". $this->przedmiot."<br>";
    }
}
?>
