<?php
// 12. Desarrolle un algoritmo que permita leer un valor A y decir si dicho
//         número es positivo, negativo o cero.

$valor1 = $_POST["n1"];

if ($valor1 > 0) {
    echo "El número es positivo";
} else if ($valor1 < 0) {
    echo "El número es negativo";
} else {
    echo "El número es cero";
}

?>