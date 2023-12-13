<?php

require "functions.php";

$contas = [   #IMPORTANTE O PHP SÓ CONSEGUE TRABALHAR COM CHAVES DO TIPO INTEIRO OU STRING
    '123.412.341-23' => [
        "titular"=> "Vinícius",
        "saldo"=> 1000
    ],
    '154.786.560-43' => [
        "titular"=> "Ronaldo",
        "saldo"=> 10000
    ],

    '042.495.103-41' => [
        "titular"=> "Matheus",
        "saldo"=> 5
        ]
];

#UMA FUNÇÃO SÓ RECONHECE AS VARIÁVEIS QUE FORAM DEFINIDAS NO PRÓPRIO ESCOPO
function saque(array $contas, float $valor) : array
{   
    if ($valor <= $contas["saldo"]) {
        $contas['saldo'] -= $valor;
        echo "Saque realizado com sucesso!".PHP_EOL;
        echo "Saldo restante: ".$contas['saldo'].PHP_EOL;
    }
    else{
        printText("Sem saldo o suficiente!");
    }

    return $contas;
}

function deposito(array $conta, float $valor) : array 
{
    if ($valor > 0) {
        $conta['saldo'] += $valor;
        printText("Saldo: ".$conta['saldo']);
    }
    return $conta;
}

function printText(string $msg): void {

    echo $msg."<br>";

}   

saque($contas['123.412.341-23'], 225);
deposito($contas['123.412.341-23'], 225);

function titularMaiusculo(array &$conta){    #PASSAGEM POR REFERÊNCIA 

    $conta['titular'] = strtoupper($conta['titular']);

}

titularMaiusculo($contas['123.412.341-23']);

foreach ($contas as $cpf => $info) {

    list('titular' => $titular, 'saldo' => $saldo) = $info;
    printText("$cpf {$info['titular']}"); #INTERPOLAÇÃO  string complexa

}

echo "<ul>";

foreach($contas as $conta){

    exibeconta($conta);

}


echo "</ul>";

#remover variável
unset($contas['123.412.341-23']);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

<?php foreach ($contas as $info) {
?>
    <dl>
        <dt><h3></h3></dt>
        <dd><?php echo "Titular: {$info['titular']}"?><dd>
        <dd><?php echo "Saldo: {$info['saldo']}"?><dd>

    </dl>
<?php }?>
</body>
</html>
