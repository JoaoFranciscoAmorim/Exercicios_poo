<?php
    require_once 'classevideo.php';
    require_once 'classegafanhoto.php';

    class Visualizacao {
        private $espectador;
        private $filme;

        public function __construct($espec, $filme) {
            $this->espectador = $espec;
            $this->filme = $filme;
            $this->filme->setViews($this->filme->getViews() + 1);
            $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        //Quando a classe Visualizacao começar, o setViews do filme (vídeo passado por parâmetro) adicionará mais 1 aos views.
        }

        public function getEspectador() {
            return $this->espectador;
        }
        public function setEspectador($espe) {
            $this->espectador = $espe;
        }
        public function getFilme() {
            return $this->filme;
        }
        public function setFilme($f) {
            $this->filme = $f;
        }

        
        public function avaliar() {
            $this->filme->setAvaliacao(5);
        //setAvaliacao() está na classe Video. O filme (video) é passado por parâmetro, no construct.
        }
        public function avaliarNota($nota) {
            $this->filme->setAvaliacao($nota);
        }
        public function avaliarPorc($porcentagem) {
            $nova = 0;
            if ($porcentagem <= 20) {
                $nova = 2;
            } elseif ($porcentagem > 20 && $porcentagem <=70) {
                $nova = 5;
            } else {
                $nova = 8;
            }
            $this->filme->setAvaliacao($nova);
        }

    }

?>