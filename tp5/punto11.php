<?php
$valor1 = $_POST["n1"];

if ($valor1 < 4 && $valor1 > 0) {
    echo "Libre";
} elseif ($valor1 < 7 && $valor1 >= 4) {
    echo "Regular";
} elseif ($valor1 < 10 && $valor1 >= 7) {
    echo "Promocionado";
}

?>