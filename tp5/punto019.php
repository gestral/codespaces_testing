<?php
// 19. Dado un número N ingresado por el usuario, mostrar los números
//         impares de 0 a N, con un ciclo WHILE.

$valor1 = $_POST["n1"];
$i = 1;

while ($i <= $valor1) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
    $i++;
}
?>