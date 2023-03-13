<?php

//Operador de soma '+'
$valor1 = 2;
$valor2 = 3;

$result = $valor1 + $valor2;

echo "O resultado da soma entre {$valor1} + {$valor2} = {$result} <br>";


//Operador de adição '-'
echo '<hr>';

$result = $valor2 - $valor1; //A variável '$result' pode ser reaproveitada

echo "O resultado da adição entre {$valor1} - {$valor2} = {$result} <br><hr>";


//Operador de multiplicação '*'

$result = $valor2 * $valor1;

echo "O resultado da multiplicação entre {$valor1} * {$valor2} = {$result} <br><hr>";


//Operador de multiplicação '*'

$result = $valor2 / $valor1;

echo "O resultado da divisão entre {$valor1} / {$valor2} = {$result} <br><hr>";


//Resto da divisão '%'
$result = $valor2 % $valor1;

echo "O resultado do resto da divisão entre {$valor1} % {$valor2} = {$result} <br><hr>";

if ($valor2 % 2 == 0)
{
    echo "O valor {$valor2} é par <br><hr>";
}
else
{
    echo "O valor {$valor2} é ímpar <br><hr>";
}

$result = (2 + 2 - 8 / 4) * 2; //Obs: Colocar parenteses para priorizar parte do cálculo

echo "Resultado da operação: (2 + 2 - 8 / 4) * 2 = $result";