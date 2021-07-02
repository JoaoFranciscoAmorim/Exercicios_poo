<?php
    require_once 'classeanimal.php';
    class Mamifero extends Animal {
        private $corPelo;

        public function getCorPelo() {
            return $this->corPelo;
        }
        public function setCorPelo($cp) {
            $this->corPelo = $cp;
        }


        public function alimentar() {
            echo "<p>Mamando!</p>";
        }
        public function locomover() {
            echo "<p>Correndo!</p>";
        }
        public function emitirSom() {
            echo "<p>Som de Mamífero!</p>";
        }
//As funções acima foram criadas de forma abstrata na classe Animal
    }


?>