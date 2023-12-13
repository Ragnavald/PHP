<?php 


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

$contas['586.589.456-08'] = [ #Para adicionar no array
    "titular" => "Maria",
    "Saldo" => 100000000,
];

foreach ($contas as $conta) {
    echo $conta['titular'].PHP_EOL;
    echo $conta['saldo'].PHP_EOL.PHP_EOL;
}

for ($i = 0; $i < count($contas); $i++) {

    echo $contas[$i]['titular'].PHP_EOL;
    echo $contas[$i]['saldo'].PHP_EOL.PHP_EOL;
}

foreach ($contas as $cpf => $conta) {   #aqui podemos ter acesso ao índice e a conta
    echo $cpf.PHP_EOL;
    echo $conta.PHP_EOL;
}


?>