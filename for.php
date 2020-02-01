<?php
	for ($contador = 1;$contador <= 15;$contador++) {
		if ($contador == 13 || $contador == 8){
			continue;
		}
	echo "#$contador" .PHP_EOL;
	}
?>