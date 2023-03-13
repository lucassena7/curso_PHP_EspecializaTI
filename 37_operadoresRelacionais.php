<?php

//Operadores relacionais também são chamados de Operadores de comparação

$valor1 = 2;
$valor2 = '2'; //Posso passar um número como string que na comparação o PHP converte automaticamente e reconhece


//Utilizando === (3=), além de verificar se o número é igual, ele verifica se o tipo da variável também é igual
if ($valor1 === $valor2)
{
    echo "Entrou no IF";
}
else
{
    echo "Entrou no ELSE";
}


echo "<hr><br>";

//!= e <> tem o mesmo significado. Significam 'diferente'
if ($valor1 != $valor2)
{
    echo "Entrou no IF";
}
else
{
    echo "Entrou no ELSE";
}


echo "<hr><br>";

//!== verifica se além dos valores, o tipo da variável também é diferente
if ($valor1 !== $valor2)
{
    echo "Entrou no IF";
}
else
{
    echo "Entrou no ELSE";
}


echo "<hr><br>";

//Os operadores '<' e '>' indicam menor e maior respectivamente
if ($valor1 > $valor2)
{
    echo "Entrou no IF";
}
else
{
    echo "Entrou no ELSE";
}

echo "<hr><br>";

//Também há como comparar utilizando '<=' ou '>='
if ($valor1 >= $valor2)
{
    echo "Entrou no IF";
}
else
{
    echo "Entrou no ELSE";
}