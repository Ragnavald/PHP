<?php 

$lista = [];
$notas = [];
echo "Quantos alunos tem na classe? ";
$alunos = (int)readline();


for ($i = 0; $i < $alunos; $i++) { 
    echo "Digite o nome do ".($i+1)."° aluno: ";
    $lista[$i] = readline();
    echo "Digite a nota do ".($i+1)."° aluno: ";
    $notas[$i] = readline();
}

$media = array_sum($notas)/count($lista);
echo "A média da sala é".$media;

?>