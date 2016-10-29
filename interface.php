<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Aprendendo POO com PHP</title>
</head>
<body>

<h1>Aprendendo POO com PHP</h1>

<?php 

	include_once 'classes/class.produto.php';

	$produto = new Produto;

	$produto->codigo = 001;
	$produto->descricao = "Computador Intell";
	$produto->preco = 100;
	$produto->quantidade = 2;

	echo $produto->exibirCaracteristicas();

 ?>



</body>
</html>