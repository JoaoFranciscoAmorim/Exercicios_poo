<?php
    require_once 'classeusuario.php';
    class Gafanhoto extends Usuario {
        private $login;
        private $totAssistido;

        public function __construct($nome, $idade, $sexo, $login) {
            parent::__construct($nome, $idade, $sexo);
            //A linha acima chama o nome, idade e sexo do construct da mãe, ou seja, do usuario. Isso só funciona quando há o "extends".
            $this->login = $login;
            $this->totAssistido = 0;
        }

        public function assistirMaisUm() {
            $this->totAssistido ++;
        }

        public function getLogin() {
            return $this->login;
        }
        public function setLogin($l) {
            $this->login = $l;
        }
        public function getTotAssistido() {
            return $this->totAssistido;
        }
        public function setTotAssistido($ta) {
            $this->totAssistido = $ta;
        }

    }


?>