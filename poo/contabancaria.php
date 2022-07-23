<?php

declare(strict_types=1);

class ContaBancaria
{

 
    private string $banco;
    private string $nomeTitular;
    private string $numeroAgencia;
    private string $numeroConta;
    private float $saldo;

    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        float $saldo
    ) {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    public function getSaldo() :string
    {

        return 'Seu saldo atual é R$'.$this->saldo;

    }

    public function depositar(float $valor) :string
    {

        $this->saldo += $valor;
        return 'Depósito de R$'.$valor.' realizado';

    }

    public function sacar(float $valor) :string
    {

        $this->saldo -= $valor;
        return 'Saque de R$'.$valor.' realizado';

    }

}

$conta = new ContaBancaria(
    'Banco do Brasil',
    'Wlademir',
    '3654',
    '25436-10',
    0
);

echo $conta->getSaldo();

echo '<br>';

echo $conta->depositar(300.00);
echo '<br>';
echo $conta->getSaldo();

echo '<br>';

echo $conta->sacar(150.00);
echo '<br>';
echo $conta->getSaldo();