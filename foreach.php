<?php
	$contascorrentes = [
		'15988732064' => ['titular' => 'Vinícius' , 'saldo' => '1000'],
		'25889347855' => ['titular' => 'Maria' , 'saldo' => '10000'],
		'55722201685' => ['titular' => 'Alberto' , 'saldo' => '300'],
	];

	foreach ($contascorrentes as $cpf => $contas){
		echo $contas ['titular'] .PHP_EOL;
	}
?>