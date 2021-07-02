<?php
    require_once 'interfacevideo.php';
    class Video implements AcoesVideo {
        private $titulo;
        private $avaliacao;
        private $views;
        private $curtidas;
        private $reproduzindo;

        public function __construct($titulo) {
            $this->titulo = $titulo;
            $this->avaliacao = 1;
            $this->views = 0;
            $this->curtidas = 0;
            $this->reproduzindo = false;
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($t) {
            $this->titulo = $t;
        }
        public function getAvaliacao() {
            return $this->avaliacao;
        }
        public function setAvaliacao($a) {
            $media = 0;
            $media = ($this->avaliacao + $a)/$this->getViews();
            $this->avaliacao = $media;
        }
        public function getViews() {
            return $this->views;
        }
        public function setViews($v) {
            $this->views = $v;
        }
        public function getCurtidas() {
            return $this->curtidas;
        }
        public function setCurtidas($c) {
            $this->curtidas = $c;
        }
        public function getReproduzindo() {
            return $this->reproduzindo;
        }
        public function setReproduzindo($rep) {
            $this->reproduzindo = $rep;
        }

        public function play() {
            $this->setReproduzindo(true);
        }
        public function pause() {
            $this->setReproduzindo(false);
        }
        public function like() {
            if ($this->getReproduzindo()) {
            $this->curtidas ++;
            } else {
                echo "<p>O vídeo " . $this->getTitulo() . " não está reproduzindo! </p>";
            }
        }

    }
?>