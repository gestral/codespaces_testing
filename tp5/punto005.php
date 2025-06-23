<?php
// 5. Un profesor desea saber el porcentaje varones y mujeres de su clase
//         sabiendo que tiene N alumnos en total, CV varones y CM mujeres. El
//         profesor tiene que poder ingresar al programa los valores de N, CV y CM.

$valor1 = $_POST["n1"];
$valor2 = $_POST["n2"];
$valor3 = $_POST["n3"];

if (($valor2 + $valor3) != $valor1){
    echo "El total de alumnos es incorrecto.";
}
else{
    $total_alumnos = ($valor3 * 100) / $valor1;
    $total_alumnas = ($valor2 * 100) / $valor1;

    echo "Porcentaje de alumnos: $total_alumnos% <br>";
    echo "Porcentaje de alumnas: $total_alumnas%";    
}

?>