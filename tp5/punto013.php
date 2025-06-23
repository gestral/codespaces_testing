<?php
// 13. Desarrolle un programa que permita leer tres valores A, B y C y luego
//         indique el menor de ellos.

$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];
$valor3 = $_POST["n3"];

$menor = $valor1;
if ($valor2 < $menor) {
    $menor = $valor2;
}
if ($valor3 < $menor) {
    $menor = $valor3;
}
echo "El menor de los tres números es: $menor";
?>