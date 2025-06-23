<?php
// 18. Dado un número N ingresado por el usuario, mostrar los números pares
//         de 0 a N, con un ciclo FOR.

$valor1 = $_POST["n1"];

for ($i = 1; $i <= $valor1; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>