<?php
require_once 'classepessoadois.php';
    class Alunodois extends Pessoadois {
        private $matricula;
        private $curso;

        public function pagarMensalidade() {
            if($this->getMatricula()) {
            echo "<p>Pagando mensalidade do aluno " . $this->getNome();
            echo "<br>";
            } else {
                echo "<p>A matrícula não está ativa!</p>";
                echo "<br>";
            }
        }
        public function cancelarMatr() {
            $this->setMatricula(false);
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