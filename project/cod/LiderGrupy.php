<?php
require_once('Osoba.php');
require_once('Produkt.php');

class LiderGrupy extends Osoba
{
    private $podporzadkowanePracownicy;

    public function __construct($imie, $nazwisko, $adres, $email, $grupa)
    {
        parent::__construct($imie, $nazwisko, $adres, $email, $grupa);

        $this->podporzadkowanePracownicy = [];
    }

    public function __toString()
    {
        $podporzadkowanePracowniki = '';

        for ($i = 0; $i < count($this->podporzadkowanePracownicy); $i++) {
            $podporzadkowanePracowniki .= "<li>" . $this->podporzadkowanePracownicy[$i] . "</li>";
        }

        return "Lider Grupy $this->grupa <br>
                imie: $this->imie <br>
                nazwisko: $this->nazwisko <br>
                podporządkowane pracowniki: <ul>" . $podporzadkowanePracowniki . "</ul>";
    }

    public function dodacProgramistaDoPodparzadkownych($pracownik)
    {
        array_push($this->podporzadkowanePracownicy, $pracownik);
    }

    public function dostacZadania()
    {
    }

    public function podzielicMiedzyPracownikow()
    {
    }

    public function zmienicStanWykonaniaProjectu()
    {
    }

    public function zwrocPodporzadkowanychPracownikow()
    {
        return $this->podporzadkowanePracownicy;
    }
}
