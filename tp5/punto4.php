<?php
$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];
$area = ($valor1 * $valor2) / 2;

echo "El area del triangulo con los valores ingresados por el usuario ($valor1 y $valor2) es: $area.";
?>