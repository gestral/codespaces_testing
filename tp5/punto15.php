<?php
$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];
$valor3 = $_POST["n3"];
$valor4 = $_POST["n4"];	

$nota_final = ($valor1 + $valor2 + $valor3 + $valor4) / 4;

if ($nota_final <= 3.99) {
    echo "Libre";
}
elseif ($nota_final >= 4 && $nota_final <= 6.99) {
    echo "Regular";
}
elseif ($nota_final >= 7 && $nota_final <= 10) {
    echo "Promocionado";
}

?>