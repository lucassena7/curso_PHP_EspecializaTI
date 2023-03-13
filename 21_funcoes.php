<?php

//Não podemos nomear as funções com o uso de palavras reservadas. É indicado que o nome seja relacionado com sua funcionalidade

function testFunction()
{
    echo 'Teste função <br>';
}

testFunction();
testFunction();
testFunction();
testFunction();
testFunction();

echo '<br>';
echo '<hr>';
echo '<br>';

function testando ()
{
    return 'Testando <br>';
}

echo testando();
echo testando();
echo testando();
echo testando();
echo testando();

echo '<br>';
echo '<hr>';
echo '<br>';

//É possivél também definir o tipo de retorno de uma função. Observe abaixo
function testeTestando (): string //boolean, array, integer
{
    return 'Teste <br>';
}

echo testeTestando();
echo testeTestando();
echo testeTestando();
echo testeTestando();
echo testeTestando();
