<?php
$valor1 = $_POST["n1"];

for ($i = 1; $i <= $valor1; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>