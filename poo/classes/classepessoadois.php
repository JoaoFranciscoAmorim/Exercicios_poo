<?php
    abstract class Pessoadois {
        private $nome;
        private $idade;
        private $sexo;
        public final function fazerAniversario() {
            $this->idade ++;
            //Final functions não podem ser sobrepostas por classes filhas. Da mesma forma, final classes não podem ter filhos, pois são obrigatoriamente folhas.
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
    }


?>