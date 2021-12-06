<?php
    class CEO extends Dyrektor
    {
        public function __toString()
        {
            return "CEO imie: $this->imie <br>
                    nazwisko: $this->nazwisko <br>
                    waznoscGlosu: $this->wwaznoscGlosu";
        }

        public function dodajProdukt()
        {

        }

        public function dodajDyrektora()
        {

        }
    }
?>