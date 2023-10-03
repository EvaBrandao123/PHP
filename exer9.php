<?php
$num1 = 2098;
$num2 = 18;
$num3 = 3000;

$numeros = array($num1, $num2, $num3);

rsort($numeros);

echo " A ordem dos números é \t" . $numeros[0] . "\t " . $numeros[1] . "\t " . $numeros[2];
?>