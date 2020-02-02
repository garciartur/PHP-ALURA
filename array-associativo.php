<?php
	$conta1 = ['titular' => 'Vinícius' , 'saldo' => '1000'];
	$conta2 = ['titular' => 'Maria' , 'saldo' => '10000'];
	$conta3 = ['titular' => 'Alberto' , 'saldo' => '300'];

	echo "Titulares:" .PHP_EOL;

	$contas = [$conta1 , $conta2 , $conta3];

	for ($i=0 ; $i < count($contas) ; $i++){
		echo $contas [$i] ['titular'] . PHP_EOL;
	}
?>