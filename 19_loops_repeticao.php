<?php

//O foreach é muito útil para a interação de arrays

$names = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

$nomes = [
    'a' => 'aa',
    'b' => 'bb',
    'c' => 'cc',
    'd' => 'dd',
    'e' => 'ee',
    'f' => 'ff',
    'g' => 'gg',
    'h' => 'hh',
];

foreach ($names as $name)
{
    echo "{$name} <br>";
}

echo '<br>';
echo '<hr>';

//o 'foreach' também permite exibir a chave do array
foreach ($nomes as $key => $nome)
{
    echo "{$key} => {$nome} <br>";
}
