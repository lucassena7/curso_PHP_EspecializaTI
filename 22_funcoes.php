<?php

function exibir ($value)
{
    echo "{$value} <br>";
}

$teste = 123;

exibir($teste);

//Posso limitar qual o parâmetro que minha função irá receber. Observe abaixo:
function mostrar (string $valor)
{
    echo "{$valor} <br>";
}

mostrar('Teste');

function somar (int $n1, int $n2): int //esse ':int' deixa especificado que o retorno da função tem q ser um inteiro
{
    return $n1 + $n2;
}

echo somar (12, 90);
echo '<br>';

function somarDois (int $n1, int $n2, int $taxa = 12): int //Como a taxa vai ser um valor fixo, ela é opcional
{
    return ($n1 + $n2) * ($taxa);
}

echo somarDois (1,2); //O valor da taxa pode ser omisso se ele for igual ao declarado no parâmetro da função. Se ele for variar, o número deverá ser passado.
echo '<br>';
echo somarDois (1,2,4);