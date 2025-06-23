<?php
// 14. Escribir un programa que lea los nombres y edades de dos personas e
//         imprima cuál de ellas tiene más edad o si son de la misma edad.

$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];
$valor3 = $_POST["n3"];
$valor4 = $_POST["n4"];	

if ($valor2 > $valor4) {
    echo "$valor1 es mayor que $valor3";
}
elseif ($valor2 == $valor4) {
    echo "Ambos tienen la misma edad";
}
else {
    echo "$valor1 es menor que $valor3";
}

?>