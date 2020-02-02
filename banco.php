<?php
require 'funcoes.php';

$contascorrentes = [
	'159.887.320-64' => ['titular' => 'Vinícius' , 'saldo' => '1000'],
	'258.893.478-55' => ['titular' => 'Maria' , 'saldo' => '10000'],
	'557.222.016-85' => ['titular' => 'Alberto' , 'saldo' => '300'],
];

$contascorrentes ['222.587.710-00'] = ['titular' => 'Cláudia', 'saldo' => '2000'];

$contascorrentes ['258.893.478-55'] = sacar ($contascorrentes ['258.893.478-55'] , 1000);
$contascorrentes ['557.222.016-85'] = depositar ($contascorrentes ['557.222.016-85'], 700);

?>
