<?php 

class Pessoa{

var $codigo;
var $nome;
var $altura;
var $idade;
var $nascimento;
var $escolaridade;
var $salario;

public function Crescer($centimetros){
	if($centimetros > 0){
		$this->altura += $centimetros;
	}else{
		echo "A altura é medida em centimetros, por favor forneça um valor correto";
	}
}

public function Formacao($formacao){
	$this->escolaridade = $formacao;
}

public function Envelhecer($anos){
	if($anos > 0){
		$this->idade += $anos;
	}
}

}