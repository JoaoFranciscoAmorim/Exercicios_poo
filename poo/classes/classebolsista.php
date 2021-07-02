<?php
require_once 'classealunodois.php';
    class Bolsista extends Alunodois {
//A classe Bolsista, sendo extensão de Alunodois, terá todas as características e métodos de Alunodois e de Pessoadois.
        private $bolsa;

        public function renovarBolsa() {
            echo "<p>Bolsa Renovada!</p>";
        }

        public function pagarMensalidade() {
            echo $this->getNome() . " é bolsista. Mensalidade tem desconto!";
            echo "<br>";
            //Esta função irá sobrepor a função pagarMensalidade para todos os bolsistas.
        }

        public function getBolsa() {
            return $this->bolsa;
        }
        public function setBolsa($b) {
            $this->bolsa = $b;
        }
        

    }


?>