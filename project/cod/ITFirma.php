<?php
require_once('Produkt.php');
require_once('LiderGrupy.php');
require_once('Programist.php');

class ITFirma
{
    private $nazwa;
    private $adres;
    private $pracowniki;
    private $programisci;
    private $lidery;
    private $produkty;

    public function __construct($nazwa, $adres)
    {
        $this->nazwa = $nazwa;
        $this->adres = $adres;

        $this->pracowniki = [];
        $this->programisci = [];
        $this->lidery = [];
        $this->produkty = [];
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
        $pracowniki = '';
        $produkty = '';

        for ($i = 0; $i < count($this->pracowniki); $i++) {
            $pracowniki .= "<li>" . $this->pracowniki[$i] . "</li>";
        }

        for ($i = 0; $i < count($this->produkty); $i++) {
            $produkty .= "<li>" . $this->produkty[$i] . "</li>";
        }

        return "IT firma nazwa: $this->nazwa <br>
                adres: $this->adres <br>
                pracownicy: <ul> $pracowniki </ul>
                podukty: <ul> $produkty </ul>";
    }

    public function dodajLidera($imie, $nazwisko, $adres, $email, $grupa)
    {
        $lider = new LiderGrupy($imie, $nazwisko, $adres, $email, $grupa);
        array_push($this->pracowniki, $lider);
        array_push($this->lidery, $lider);
    }

    public function dodajProdukt($nazwa, $wymaganaLiczbaProgramistow)
    {
        // sprawdzenie czy tablica jest pysta
        // jeśli jest dodaj pierwszy element
        if (empty($this->produkty)) {
            $produkt = new Produkt($nazwa, $wymaganaLiczbaProgramistow);
            array_push($this->produkty, $produkt);
        } else {
            // sprawdzenie czy produkt o podanej nazwie istnieje
            // jeśli tak wypisz że już istnieje
            // jeśli nie dodaj nowy produkt
            for ($i = 0; $i < count($this->produkty); $i++) {
                if ($this->produkty[$i]->nazwa != $nazwa) {
                    $produkt = new Produkt($nazwa, $wymaganaLiczbaProgramistow);
                    array_push($this->produkty, $produkt);
                } else {
                    echo 'Produkt z podaną nazwą już istnieje. <br>';
                }
            }
        }
    }

    public function dodajZadanieDoProduktu($nazwa, $zadanie)
    {
        // poszuk produktu po nazwie
        // po znalezieniu dodaje zadanie
        for ($i = 0; $i < count($this->produkty); $i++) {
            if ($this->produkty[$i]->nazwa == $nazwa) {
                $this->produkty[$i]->dodajZadanie($zadanie);
            }
        }
    }

    public function dodajPracownika($imie, $nazwisko, $adres, $email, $oddzial, $posada)
    {
        $programist = new Programist($imie, $nazwisko, $adres, $email, $oddzial, $posada);
        array_push($this->pracowniki, $programist);
        array_push($this->programisci, $programist);

        $this->nadajLidera($programist);
    }

    public function nadajLidera($pracownik)
    {
        for ($i = 0; $i < count($this->lidery); $i++) {
            // jeden liner nie moge miec wiecej od 4 pracownikow
            // sprawdzenie czy ma 4 lub mniej pracownikow
            if (count($this->lidery[$i]->zwrocPodporzadkowanychPracownikow()) <= 4) {
                $this->lidery[$i]->dodacProgramistaDoPodparzadkownych($pracownik);

                $pracownik->dostacLidera($this->lidery[$i]);
            }
        }
    }
}
