<?php
	// Escribir un programa que permita cargar 20 números enteros en un
	// vector y que dado otro número entero M busque dicho número dentro del
	// vector. El programa debe mostrar la posición en la que se encuentra
	// dicho número M o un mensaje de error indicando que el elemento no se
	// encuentra en el vector.

	$m = 65;
	$array_numeros = array(1,2,3,4,57,56,87,3,12,54,7,324,35,46,2,768,79,80,9,23);

	// for($i = 0; $i <= count($array_numeros)-1; $i++){
	// 	if($array_numeros[$i] == $m){
	// 		echo "El número $m se encuentra en la posición $i";
	// 		break;
	// 	}
	// 	else if($i == count($array_numeros)-1){
	// 		echo "El número $m no se encuentra en el vector";
	// 	}
	
	// }

	// --------------------------------------------------------------------------	
	foreach($array_numeros as $i => $numero){
		if($numero == $m){
			echo "El número $m se encuentra en la posición $i";
			break;
		}
		else if($i == count($array_numeros)-1){
			echo "El número $m no se encuentra en el vector";
		}
	}

?>