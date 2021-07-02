<?php
    require_once 'classeanimal.php';
    class Ave extends Animal {
        private $corPena;

        public function getCorPena() {
            return $this->corPena;
        }
        public function setCorPena($c) {
            $this->corPena = $c;
        }


        public function alimentar() {
            echo "<p>Comendo Frutas!</p>";
        }
        public function locomover() {
            echo "<p>Voando!</p>";
        }
        public function emitirSom() {
            echo "<p>Som de Ave!</p>";
        }
//As funções acima foram criadas de forma abstrata na classe Animal
    public function fazerNinho() {
        echo "<p>Fez um Ninho!</p>";
    }
    }


?>