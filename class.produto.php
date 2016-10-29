<?php

class Produto {
	
	var $codigo;
	var $descricao;
	var $preco;
	var $quantidade;

	function exibirCaracteristicas(){

		echo 'codigo '.$this->codigo.'<br />';
		echo 'descricao '.$this->descricao.'<br />';
		echo 'preco '.$this->preco.'<br />';
		echo 'quantidade '.$this->quantidade;

	}

} 