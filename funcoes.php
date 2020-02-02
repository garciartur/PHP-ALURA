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

$contascorrentes = [
	'159.887.320-64' => ['titular' => 'Vinícius' , 'saldo' => '1000'],
	'258.893.478-55' => ['titular' => 'Maria' , 'saldo' => '10000'],
	'557.222.016-85' => ['titular' => 'Alberto' , 'saldo' => '300'],
];

$contascorrentes ['222.587.710-00'] = ['titular' => 'Cláudia', 'saldo' => '2000'];

$contascorrentes ['258.893.478-55'] = sacar ($contascorrentes ['258.893.478-55'] , 1000);
$contascorrentes ['557.222.016-85'] = depositar ($contascorrentes ['557.222.016-85'], 700);

?>