<?php
	$idade = 16;
	$npessoas = 1;

	echo "Você precisa ter a partir de 18 anos para entrar ou a partir de 16 anos acompanhado." .PHP_EOL;

	if ($idade >= 18) {
		echo "Você tem $idade anos." .PHP_EOL;
		echo "Pode entrar.";
	}
	else if ($idade >=16 && $npessoas > 1) {
		echo "Você só tem $idade anos, mas está acompanhado." .PHP_EOL;
		echo "Pode entrar sozinho." .PHP_EOL;
	}
	else {
		echo "Você só tem $idade anos" .PHP_EOL;
		echo "Não pode entrar." .PHP_EOL;
	}

	echo "Tchau!";
?>