<?php
require_once 'classepessoa.php';
    class Aluno extends Pessoa {
        private $matricula;
        private $curso;

        public function cancelarMatr() {
            echo "<p>Matrícula Cancelada!</p>";
        }

        public function getMatricula() {
            return $this->matricula;
        }
        public function setMatricula($m) {
            $this->matricula = $m;
        }
        public function getCurso() {
            return $this->curso;
        }
        public function setCurso($c) {
            $this->curso = $c;
        }

    }


?>