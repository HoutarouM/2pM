<?php
    class ZespolUczniow{
        private $nazwa;
        private $uczniowie = [];
        private $wychowawca;

        public function __construct($nazwa, $wych)
        {
            $this->nazwa = $nazwa;
            $this->wychowawca = $wych;
        }        

        public function dodajUczniaDoKlasy($uczen)
        {
            if(!$this->isInClass($uczen))
            {
                array_push($this->uczniowie, $uczen);
            }            
        }

        public function isInClass($uczen)
        {
            foreach ($this->uczniowie as $ucz) {
                    if($uczen == $ucz)
                    {
                        return true;
                    }
                }
                return false;
        }

        public function __toString()
        {
            $text = "Klasa: ".$this->nazwa;

            foreach ($this->uczniowie as $ucz) {
                $text = $text."<li>".$ucz."</li>";
            }    
            
            $text = $text."Wychowawca: <br>".$this->wychowawca;

            return $text;
        }
    }
?>
