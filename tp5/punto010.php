<?php
// 10. Escribir un programa que permita ingresar dos valores A y B, y que
//         escriba cuál es el mayor.

$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];

if ($valor1 > $valor2) {
    echo "El mayor es: " . $valor1;
} elseif ($valor2 > $valor1) {
    echo "El mayor es: " . $valor2;
} else {
    echo "Los números son iguales";
}

?>