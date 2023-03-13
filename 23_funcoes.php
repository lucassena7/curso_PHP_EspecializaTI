<?php

$taxa = 2;

function somar (int $num1, int $num2): array
{
    global $taxa; //Permite acessar uma variável que foi definido fora da função

    $teste = 12;
    $soma = ($num1 + $num2) * $taxa;

    return 
    [
        //É possível retornar mais de um valor, retornando um array
        'Teste' => $teste,
        'Soma' => $soma,
    ];
}

//echo somar (2,2);

//echo $teste; //Não irá funcionar, pois teste é uma variável que foi definida dentro de uma função

$resultado = somar (1,2);
var_dump($resultado);

//É possível somente um valo do array
echo '<br>';
echo '<hr>';

var_dump($resultado['Soma']);