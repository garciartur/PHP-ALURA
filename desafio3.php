<?php
	$altura = 1.67;
	$peso = 64;
	$imc = $peso / ($altura ** 2);

	echo "Seu imc é " . number_format($imc , 2 , ',' , '.') .PHP_EOL;

	if ($imc < 18.5) {
		echo "Abaixo do peso";
	}
		else if ($imc >= 18.5 && $imc < 25){
			echo "Peso normal";
		}
			else if ($imc >= 25 && $imc < 30){
				echo "Sobrepeso";
			}
				else if ($imc >= 30 && $imc < 35) {
					echo "Obesidade Grau I";
				}
					else if ($imc >=35 && $imc < 40) {
						echo "Obesidade Grau II";
					}
	else{
		echo "Obesidade Grau III";
	}
?>