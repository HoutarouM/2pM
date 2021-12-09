<?php
require_once('Osoba.php');

class Programist extends Osoba
{
    private $oddzial;
    private $posada;
    private $czyZajety;
    private $lider;

    public function __construct($imie, $nazwisko, $adres, $email, $oddzial, $posada)
    {
        parent::__construct($imie, $nazwisko, $adres, $email, null);

        $this->oddzial = $oddzial;
        $this->posada = $posada;

        $this->czyZajety = false;
    }

    public function __toString()
    {
        return "Programist imie: $this->imie <br>
                    nazwisko: $this->nazwisko <br>
                    oddzial: $this->oddzial <br>
                    grupa: $this->grupa <br>
                    posada: $this->posada <br>
                    lider: " . $this->lider->imie . ' ' . $this->lider->nazwisko . " <br>
                    czy zajęty: " . ($this->czyZajety ? 'tak' : 'nie') . " <br>";
    }

    public function dostacZadanie($zadanie)
    {
        if ($this->czyZajety == false) {
            $this->podjacPraceNadZadaniem($zadanie);
        }
    }

    public function podjacPraceNadZadaniem($zadanie)
    {
        $this->czyZajety = true;

        echo "Imie: $this->imie, pracuje nad: $zadanie.";
    }

    public function dostacLidera($lider)
    {
        $this->czyMaLidera = true;

        $this->lider = $lider;

        $this->grupa = $lider->grupa;
    }
}
