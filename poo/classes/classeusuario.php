<?php
    abstract class Usuario {
        private $nome;
        private $idade;
        private $sexo;
        private $exp;

        public function __construct($nome, $idade, $sexo) {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
            $this->exp = 0;
        }

        public function getNome() {
            return $this->nome;
        }
        public function setNome($n) {
            $this->nome = $n;
        }
        public function getIdade() {
            return $this->idade;
        }
        public function setIdade($i) {
            $this->idade = $i;
        }
        public function getSexo() {
            return $this->sexo;
        }
        public function setSexo($s) {
            $this->sexo = $s;
        }
        public function getExp() {
            return $this->exp;
        }
        public function setExp($e) {
            $this->exp = $e;
        }

        protected function ganharExp($ex) {
            $this->exp += $ex;
        }
        //Métodos abstratos só podem ser criados dentro de classes abstratas.
    }


?>