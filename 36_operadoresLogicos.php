<?php

$valor1 = 2;
$valor2 = 2;

//Operador Lógico 'AND' == '&&' --> Mais recomendado (&&)
if ($valor1 == $valor2 AND $valor1 == 2) //Se e somente se atender as duas especificações do 'if'
{
    echo "Entrou no IF";
}
else
{
    echo "Entrou no ELSE";
}

echo "<br><hr>";


//Operador Lógico 'OR' == '||' --> Mais recomendado (||)
if ($valor1 == $valor2 OR $valor1 == 3) //Se atender uma das especificações do 'if'
{
    echo "Entrou no IF";
}
else
{
    echo "Entrou no ELSE";
}


echo "<br><hr>";

//É possível combinar dois ou mais operadores lógicos
if (($valor1 == $valor2 AND $valor1 == 2) || ($valor2 == 2)) //Primeiro ele compara se valor1 == valor 2 e o valor 1 == 2. Depois ele verifica se o valor2 == 2. Se uma das sentenças for verdadeira, ele entra no IF
{
    echo "Entrou no IF";
}
else
{
    echo "Entrou no ELSE";
}


echo "<br><hr>";

//Operador Lógico '!' -> Operador de negação
if (!$valor1 != 2) 
{
    echo "Entrou no IF";
}
else
{
    echo "Entrou no ELSE";
}