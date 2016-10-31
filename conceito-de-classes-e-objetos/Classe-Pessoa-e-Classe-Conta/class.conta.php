<?php 

class Conta{

var $agencia;
var $dataDeCriacao;
var $titular;
var $senha;
var $saldo;
var $cancelada;

public function Saque($valor){
	if($valor > 0){
		$this->saldo -= $valor;
	}else{
		echo "Valor inválido";
	}
}

public function Depositar($valor){
	$this->saldo += $valor;
}

public function ObterSaldo(){
	if($this->saldo > 0){
		echo $this->saldo;
			}
	else{
		echo "Seu saldo esta negativo!";
	}
}
}
