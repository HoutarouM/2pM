<?php
class Produkt
{
    private $nazwa;
    private $procesWykonania;
    private $wymaganaLiczbaProgramistow;
    private $zangazowaneProgramisci;
    private $zadania;

    public function __construct($nazwa, $wymaganaLiczbaProgramistow)
    {
        $this->nazwa = $nazwa;        
        $this->wymaganaLiczbaProgramistow = $wymaganaLiczbaProgramistow;

        $this->procesWykonania = 'w planach';

        $this->zangazowaneProgramisci = [];
        $this->zadania = [];
    }

    public function __get($zamienna)
    {
        return $this->$zamienna;
    }

    public function __set($zminenna, $dane)
    {
        $this->$zminenna = $dane;
    }

    public function __toString()
    {
        $zangazowaneProgramisci = '';
        $zadania = '';

        for ($i = 0; $i < count($this->zangazowaneProgramisci); $i++) {
            $zangazowaneProgramisci = $zangazowaneProgramisci . $this->zangazowaneProgramisci[$i] . "<br>";
        }

        for ($i = 0; $i < count($this->zadania); $i++) {
            $zadania = $zadania . $this->zadania[$i] . "<br>";
        }

        return "Produkt nazwa: $this->nazwa <br>
                zaangazowane programisci:  <br>
                proces wykonania: $this->procesWykonania <br>
                wymagana liczba programistow: $this->wymaganaLiczbaProgramistow <br>
                zadania:  <br>";
    }

    public function dodajZadanie($zadanie)
    {
        array_push($this->zadania, $zadanie);
    }
}
