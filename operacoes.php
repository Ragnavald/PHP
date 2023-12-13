<?php

echo"Programa solucionador de equação de segundo grau";
echo "Digite o a: ";
$a = (int)readline();
echo "Digite o b: ";
$b = (int)readline();
echo "Digite o c: ";
$c = (int)readline();

$delta =  $b**2 - (4*$a*$c);
$r1 = 0;
$r2 = 0;

if( $delta > 0){
    $r1 = (-$b + sqrt($delta))/(2*$a);
    $r2 = (-$b - sqrt($delta))/(2*$a);
}elseif( $delta < 0){
    $r1 = "not in real numbers";
    $r2 = "not in real numbers";
}else{
    $r1 = -$b/(2*$a);
    $r2 = -$b/(2*$a);
}

echo "x1: $r1  x2: $r2";

#Escapar caracteres especiais
echo "x1: \"$r1\"  x2: \"$r2\"";

?>