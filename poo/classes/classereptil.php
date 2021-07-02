<?php
    require_once 'classeanimal.php';
    class Reptil extends Animal {
        private $corEscama;

        public function getCorEscama() {
            return $this->corEscama;
        }
        public function setCorEscama($ce) {
            $this->corEscama = $ce;
        }


        public function alimentar() {
            echo "<p>Comendo Vegetais!</p>";
        }
        public function locomover() {
            echo "<p>Rastejando!</p>";
        }
        public function emitirSom() {
            echo "<p>Som de Réptil!</p>";
        }
//As funções acima foram criadas de forma abstrata na classe Animal
    }


?>