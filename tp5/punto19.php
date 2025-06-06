<?php
$valor1 = $_POST["n1"];
$i = 1;

while ($i <= $valor1) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
    $i++;
}
?>