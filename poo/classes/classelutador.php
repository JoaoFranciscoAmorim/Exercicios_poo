<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    //Como no construct foram criados parâmetros, é preciso passar esses parâmetros quando criar o objeto, na página lutador

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nom) {
        $this->nome = $nom;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nac) {
        $this->nacionalidade = $nac;
    }

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($ida) {
        $this->idade = $ida;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($alt) {
        $this->altura = $alt;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($pes) {
        $this->peso = $pes;
        $this->setCategoria();
    }
    public function getCategoria() {
        return $this->categoria;
    }
    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->peso <= 83.9){
            $this->categoria = "Médio";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function setVitorias($vit) {
        $this->vitorias = $vit;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function setDerrotas($der) {
        $this->derrotas = $der;
    }
    public function getEmpates() {
        return $this->empates;
    }
    public function setEmpates($emp) {
        $this->empates = $emp;
    }

    function apresentar() {
        echo "<p>--------</p>";
        echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
        echo "Veio diretamente de " . $this->getNacionalidade();
        echo " Tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . "Kg";
        echo "<br>Tem " . $this->getVitorias() . " vitórias ";
        echo $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.";
    }
    function status() {
        echo "<p>--------</p>";
        echo "<br>" . $this->getNome() . " é um peso " . $this->getCategoria();
        echo " e já ganhou " . $this->getVitorias() . " vezes, ";
        echo "perdeu " . $this->getDerrotas() . " vezes e ";
        echo "empatou " . $this->getEmpates() . " vezes.";
    }
    function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

}


?>