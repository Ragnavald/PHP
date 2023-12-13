<?php 

$nums_impar = [];
$qtd = readline("De 0 a :");

for ($i = 0; $i<= $qtd; $i++){
    if($i%2 != 0)
    {
        $nums_impar[$i] = $i;
    }
}
foreach ($nums_impar as $number){   
    echo $number .PHP_EOL;

}

?>