<?php
require_once('Ksiazka.php');
require_once('Czytelnik.php');

class Czytelnia
{
    private $czytelnicy;
    private $ksiazki;

    public function __construct()
    {
        $this->czytelnicy = [];
        $this->ksiazki = [];
    }

    public function dodajKsiazke($tytul, $autor, $nazwa)
    {
        $ksiazka = new Ksiazka($tytul, $autor, $nazwa);

        array_push($this->ksiazki, $ksiazka);
    }

    public function dodajCzytelnika($imie, $nazwisko)
    {
        $czytelnik = new Czytelnik($imie, $nazwisko);

        array_push($this->czytelnicy, $czytelnik);
    }

    public function wyp_ksiazke($nazwa)
    {
        foreach($this->ksiazki as $ksiazka)
        {
            if($ksiazka->nazwa == $nazwa)
            {
                if($ksiazka->zajeta == false)
                {
                    daj_ksiazke($ksiazka);

                    $ksiazka->zajeta == true;
                }
            }
        }
    }

    public function daj_ksiazke($imie_czytelnika, $ksiazka)
    {
        foreach($this->czytelnicy as $czytelnik)
        {
            if($czytelnik->imie == $imie_czytelnika)
            {
                array_push($czytelnik->listaCzytanych, $ksiazka);
            }
        }
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
        $ksiazki = '';

        foreach($this->ksiazki as $ksiazka)
        {
            $ksiazki .= $ksiazka;
        }

        return "";
    }
}
?>
