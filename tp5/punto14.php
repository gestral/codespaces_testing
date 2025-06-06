<?php
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