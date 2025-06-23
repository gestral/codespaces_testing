<?php
// 17. Dado un nombre de una persona y un número X ingresados por el
//         usuario, mostrarlo X veces seguidas, utilizando el ciclo FOR.

$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];

for ($i = 1; $i <= $valor1; $i++) {
    echo $valor2 . "<br>";
}

?>