<?php
//1) Calcular la suma de dos valores ingresados por el usuario.
$valor1 = $_POST["n1"];

if ( $valor1 >= 18 ){
    echo "Es mayor de edad, puede ingresar.";
}
else{
    echo "Es menor de edad, no puede ingresar.";
}
?>