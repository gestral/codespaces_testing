<?php
$valor1 = $_POST["n1"];

if ( $valor1 % 2 == 0 ){
    echo "El número ingresado es par.";
}
else{
    echo "El número ingresado es impar.";
}
?>