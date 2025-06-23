<?php
// 11. Escribir un programa para ingresar la nota de un examen y luego
//         mostrar “Promocionado” (7 a 10), “Regular” (4 a 6) o “Libre” (menor a 4)
//         según la nota ingresada.
        
$valor1 = $_POST["n1"];

if ($valor1 < 4 && $valor1 > 0) {
    echo "Libre";
} elseif ($valor1 < 7 && $valor1 >= 4) {
    echo "Regular";
} elseif ($valor1 < 10 && $valor1 >= 7) {
    echo "Promocionado";
}

?>