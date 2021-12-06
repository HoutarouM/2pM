<?php
    private $oddzial;
    private $waznoscGlosu;
    private $podporzadkowaneGrupy;

    public function __construct($imie, $nazwisko, $adres, $email, $oddzial, $waznoscGlosu, $podporzadkowaneGrupy)
    {
        parent::__construct($imie, $nazwisko, $adres, $email);

        $this->oddzial = $oddzial;
        $this->waznoscGlosu = $waznoscGlosu;
        $this->podporzadkowaneGrupy = $podporzadkowaneGrupy;
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
            return "Dyrektor imie: $this->imie <br>
                    nazwisko: $this->nazwisko <br>
                    oddzial: $this->oddzial <br>
                    waznoscGlosu: $this->waznoscGlosu <br>
                    podporzadkowaneGrupy: $this->podporzadkowaneGrupy";
        }

    public function dodajPracownika()
    {

    }

    public function dodajPracownikaDoGrupy()
    {

    }

    public function oddacTaskGrupie()
    {

    }

    public function wybracLideraGrupy()
    {

    }
?>