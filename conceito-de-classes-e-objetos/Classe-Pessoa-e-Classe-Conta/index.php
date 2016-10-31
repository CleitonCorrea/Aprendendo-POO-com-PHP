<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<title>Aprendendo POO com PHP</title>
</head>
<body>

<h1>Utilizando as Classes Conta e Cliente</h1>

<?php 

	include_once 'class.conta.php';
	include_once 'class.pessoa.php';

	$cleiton = new Pessoa;

	$cleiton->nome          = "Cleiton Correa";
	$cleiton->altura        = 99;
	$cleiton->idade         = 32;
	$cleiton->codigo        = 00001;
	$cleiton->nascimento    = "14/06/1984";
	$cleiton->escolaridade  = "Bacharel em Ciencia da Computação";
	$cleiton->salario       = 50000000;

	$conta = new Conta;
	
	$conta->agencia        = "Banco do Brasil 0024";
	$conta->dataDeCriacao  = "02/10/2016";
	$conta->titular        = $cleiton;
	$conta->senha          = 222;
	$conta->saldo          = 0;
	$conta->cancelada      = "N"; 

	$conta->Depositar(300);

	echo "Titular da Conta: ".$conta->titular->nome."<br />";
	echo "Agência:          ".$conta->agencia."<br />";
	echo "Saldo:            ".$conta->saldo.'<br />';
	echo "</hr>";

	$conta->Saque(50);

	echo "Saldo após o saque: ".$conta->saldo;

   

 ?>



</body>
</html>