<?php
// CONSIGNA 1
for ($i = 1; $i <= 15; $i++){
    echo "$i ";
}
echo "<br><br>";

// ----------------------------------------------------------------
// CONSIGNA 2
for ($i = 1; $i <= 10; $i++){
    echo "Esto es un ciclo FOR <br>";
}

echo "<br><br>";

// ----------------------------------------------------------------
// CONSIGNA 3
for ($i = 1; $i <= 100; $i++){
    echo "$i ";
}

echo "<br><br>";

// ----------------------------------------------------------------
// CONSIGNA 4
for ($i = -5; $i <= 5; $i++){
    echo "$i ";
}

echo "<br><br>";

// ----------------------------------------------------------------
// CONSIGNA 5
for ($i = 20; $i <= 40; $i++){
    if ($i % 2 == 0){
        echo "$i ";
    };
}

echo "<br><br>";

// ----------------------------------------------------------------
// CONSIGNA 6
$i = 0;
while ($i != 15){
    $i++;
    echo "Lucas $i<br>";
    
}

echo "<br><br>";

// ----------------------------------------------------------------
// CONSIGNA 7
$i = 0;
$cant = 7;
while ($i != $cant){
    $i++;
    echo "Ana $i<br>";
    
}

echo "<br><br>";

// ----------------------------------------------------------------
// CONSIGNA 8
$i = 0;
$m = 9;

while ($i != $m){
    $i++;
    echo "$i ";
    
}

echo "<br><br>";

// ----------------------------------------------------------------
// CONSIGNA 9
$n = 9;
$i = -$n ;

while ($i != $n+1){
    echo "$i ";
    $i++;
}

echo "<br><br>";

// ----------------------------------------------------------------
// CONSIGNA 10
$n = 33;
$i = 17;

while ($i != $n+1){
    if ($i % 2 != 0){
        echo "$i ";
    }
    $i++;
}

echo "<br><br>";

?>