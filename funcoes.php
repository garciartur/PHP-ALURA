<?php

function exibemsg (string $msg)
{
	echo $msg . PHP_EOL;
}

function saldo (array $conta)
{
	exibemsg ("Seu saldo atual é de R$ {$conta ['saldo']}.");
}

function sacar (array $conta , float $saque)
{
	if ($saque > $conta ['saldo']){
		exibemsg ("{$conta ['titular']}, você não tem saldo suficiente para sacar essa quantia.");
	}
	else {
		$conta ['saldo'] -= $saque;
		exibemsg ("{$conta ['titular']}, seu saque foi efetuado com sucesso!");
	}
	return saldo ($conta);
}

function depositar (array $conta, float $deposito)
{
	if ($deposito < 0){
		exibemsg ("{$conta ['titular']}, você não pode depositar valores negativos.");
	}
	else{
		$conta ['saldo'] += $deposito;
		exibemsg ("{$conta ['titular']}, seu depósito foi efetuado com sucesso!");
	}
	return saldo ($conta);
}

?>