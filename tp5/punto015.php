<?php
// 15. Ingresadas las notas de 4 parciales de un estudiante, indicar el estado del
//         alumno según su nota final (de 0 a 3.99 → Libre, de 4 a 6.99 → Regular y
//         de 7 a 10 → Promocionado). La nota final es el promedio de todos los
//         parciales.

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