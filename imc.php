<?php 

$peso = readline("Digite o seu peso: ");
$altura = readline("Altura: ");

$imc = $peso/($altura**2);

if ($imc <= 18.5)
echo "Baixo Peso!";
else if ($imc >= 18.6 && $imc <= 24.9)
echo "Peso normal";
elseif ($imc >= 25 && $imc <= 29.9)
echo "Sobrepeso";
else if ($imc >= 30 && $imc <= 34.9)
echo "Obesidade grau 1";
else if ($imc >= 35 && $imc <= 39.9)
echo "Obesidade grau 2";
else
echo "Obesidade grau 3";
?>