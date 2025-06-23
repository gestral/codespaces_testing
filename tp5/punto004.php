<?php
// 4. Calcular el área de un triángulo dada su base y altura, que son ingresadas
//         por el usuario. Fórmula a aplicar: sup=(base*altura)/2.

$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];
$area = ($valor1 * $valor2) / 2;

echo "El area del triangulo con los valores ingresados por el usuario ($valor1 y $valor2) es: $area.";
?>