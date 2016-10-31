<?php

class Produto {
	
	var $codigo;
	var $descricao;
	var $preco;
	var $quantidade;

	function exibirCaracteristicas(){

		echo 'Codigo: '    .$this->codigo.'<br />';
		echo 'Descricao: ' .$this->descricao.'<br />';
		echo 'Preco: '     .$this->preco.'<br />';
		echo 'Quantidade: '.$this->quantidade;

	}

} 