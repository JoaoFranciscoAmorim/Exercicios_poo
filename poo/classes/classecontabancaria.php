<?php
class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    

    public function getNumConta() {
        return $this->numConta;
    }
    public function setNumConta($n) {
        $this->numConta = $n;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($t) {
        $this->tipo = $t;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setDono($d) {
        $this->dono = $d;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($s) {
        $this->saldo = $s;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($st) {
        $this->status = $st;
    }

    public function abrirConta($t) {
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->setSaldo(150);
        }
    //O parâmetro $t será passado pela outra página e definirá o tipo da conta, através da função setTipo, chamada e executada aqui. Depois, a função abrirConta chamará e executará a função setStatus, passando o parâmetro true.
    }

    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda possui saldo. Impossível encerrá-la!</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta está em débito. Impossível encerrá-la!</p>";
        } else {
            $this->setStatus(false);
        }

    }

    public function depositar($s) {
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $s);
        //Se a conta da pessoa estiver aberta, esta função executará o setSaldo com o parâmetro do saldo atual mais o valor $s
        } else {
            echo "<p>Conta fechada. Impossível depositar!</p>";
        }
    }

    public function sacar($v) {
        if ($this->getStatus() == true) {
            if ($this->getSaldo() >= $v) {
                $this->setSaldo($this->getSaldo() - $v);
            } else {
                echo "<p>Saldo insuficiente!</p>";
            }
        } else {
            echo "<p>Conta fechada. Impossível sacar!</p>";
        }
    }

    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } else if ($this->getTipo() == "CP") {
            $valor = 20;
        }
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $valor);
        } else {
            echo "<p>A conta parece estar fechada.</p>";
        }
    }
    
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "Conta criada com sucesso!";
    }

}


?>