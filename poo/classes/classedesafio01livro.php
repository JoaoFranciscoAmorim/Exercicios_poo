<?php
require_once 'classedesafio01.php';
//require_once 'interfacedesafio01.php';
    class Livro {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function detalhes() {
            echo "Livro " . $this->titulo . " escrito por " . $this->autor;
            echo "<br> Páginas: " . $this->totPaginas;
            echo "<br> Atual: " . $this->pagAtual;
            echo "<br> Sendo lido por: " . $this->leitor->getNome();
        }

        function __construct($tit, $aut, $totp, $lei) {
            $this->titulo = $tit;
            $this->autor = $aut;
            $this->totPaginas = $totp;
            $this->leitor = $lei;
            $this->aberto = false;
            $this->pagAtual = 0;
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($ti) {
            $this->titulo = $ti;
        }
        public function getAutor() {
            return $this->autor;
        }
        public function setAutor($au) {
            $this->autor = $au;
        }
        public function getTotPaginas() {
            return $this->totPaginas;
        }
        public function setTotPaginas($to) {
            $this->totPaginas = $to;
        }
        public function getPagAtual() {
            return $this->pagAtual;
        }
        public function setPagAtual($pa) {
            $this->pagAtual = $pa;
        }
        public function getAberto() {
            return $this->aberto;
        }
        public function setAberto($ab) {
            $this->aberto = $ab;
        }
        public function getLeitor() {
            return $this->leitor;
        }
        public function setLeitor($le) {
            $this->leitor = $le;
        }

        public function abrir() {
            $this->aberto = true;
        }
        public function fechar() {
            $this->aberto = false;
        }
        public function folhear($p) {
            if ($p > $this->getTotPaginas()) {
                $this->pagAtual = 0;
            } else {
                $this->pagAtual = $p;
            }
        }
        public function avancarPag() {
            if ($this->getPagAtual() === $this->getTotPaginas()) {
                echo "<p>Você está na última página.</p>";
            } else {
            $this->pagAtual ++;
            }
        }
        public function voltarPag() {
            $this->pagAtual --;
        }

    }


?>