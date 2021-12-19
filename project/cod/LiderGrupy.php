<?php
require_once('Osoba.php');
require_once('Produkt.php');

class LiderGrupy extends Osoba
{
    private $podporzadkowanePracownicy;
    private $programisciZaangazowaneWProekcie;

    public function __construct($imie, $nazwisko, $adres, $email, $grupa)
    {
        parent::__construct($imie, $nazwisko, $adres, $email, $grupa);

        $this->podporzadkowanePracownicy = [];
        $this->programisciZaangazowaneWProekcie = [];
    }

    public function __toString()
    {
        $podporzadkowanePracowniki = '';

        for ($i = 0; $i < count($this->podporzadkowanePracownicy); $i++) {
            $podporzadkowanePracowniki .= "<li>" . $this->podporzadkowanePracownicy[$i]->imie . " ". $this->podporzadkowanePracownicy[$i]->nazwisko . "</li>";
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

    public function wolnePracowniki()
    {
        $iloscWolnych = 0;

        for ($i = 0; $i < count($this->podporzadkowanePracownicy); $i++) {
            if ($this->podporzadkowanePracownicy[$i]->czyZajety() == false) {
                $iloscWolnych++;
            }
        }

        return $iloscWolnych;
    }

    public function dostacProdukt($produkt)
    {
        $this->podzielicMiedzyPracownikow($produkt);       
    }

    public function podzielicMiedzyPracownikow($produkt)
    {
        for ($i = 0; $i < count($produkt->zadania); $i++) {
            $this->nadacPracownikuZadanie($produkt->zadania[$i]);
        }
    }

    public function nadacPracownikuZadanie($zadanie)
    {
        for ($i = 0; $i < count($this->podporzadkowanePracownicy); $i++) {
            $this->podporzadkowanePracownicy[$i]->dostacZadanie($zadanie);

            array_push($this->programisciZaangazowaneWProekcie, $this->podporzadkowanePracownicy[$i]);
        }
    }

    public function zwrocZaangazowanychProgramictow()
    {
        return $this->programisciZaangazowaneWProekcie;
    }

    public function zwrocPodporzadkowanychPracownikow()
    {
        return $this->podporzadkowanePracownicy;
    }
}
