<?php
    require_once 'classeanimal.php';
    class Peixe extends Animal {
        private $corEscama;

        public function getCorEscama() {
            return $this->corEscama;
        }
        public function setCorEscama($ce) {
            $this->corEscama = $ce;
        }


        public function alimentar() {
            echo "<p>Comendo Substâncias da Água!</p>";
        }
        public function locomover() {
            echo "<p>Nadando!</p>";
        }
        public function emitirSom() {
            echo "<p>Som de Peixe!</p>";
        }
//As funções acima foram criadas de forma abstrata na classe Animal
    public function soltarBolha() {
        echo "<p>Soltou uma Bolha!</p>";
    }
    }


?>