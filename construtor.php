<?php
class ContaBancaria {
    private $saldo;
    private $titular;

    // Método construtor
    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
        echo "Conta criada para $titular com saldo inicial de R$ $saldoInicial\n";
    }

    // Método para depositar dinheiro
    public function depositar($quantia) {
        if ($quantia > 0) {
            $this->saldo += $quantia;
            echo "Depositado: R$ $quantia\n";
        } else {
            echo "Quantia inválida para depósito\n";
        }
    }

    // Método para sacar dinheiro
    public function sacar($quantia) {
        if ($quantia > 0 && $quantia <= $this->saldo) {
            $this->saldo -= $quantia;
            echo "Sacado: R$ $quantia\n";
        } else {
            echo "Quantia inválida ou saldo insuficiente\n";
        }
    }

    // Método para obter o saldo atual
    public function obterSaldo() {
        return $this->saldo;
    }

    // Método destrutor
    public function __destruct() {
        echo "Conta de $this->titular encerrada\n";
    }
}

// Testando a classe ContaBancaria
$conta = new ContaBancaria("Murilo Henrique", 9000);
$conta->depositar(2000);
$conta->sacar(800);
echo "Saldo atual: R$ " . $conta->obterSaldo() . "\n";
?>