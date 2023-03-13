<?php

$ages = [12, 14, 18, 20, 44, 50, 98, 78, 56, 90];

/*A função 'end()' retorna exatamente o último elemento do array

echo end($ages);
*/


/*A função 'array_filter' serve para filtrar os valores do array

$agesFiltered = array_filter($ages, function ($age) {
    return $age >= 18;
});

var_dump($agesFiltered);
*/


//A função 'array_map()' permite formatar ou fazer algo com os valores do array
$names = ['Lucas', 'Miguel', 'Sena'];

/*
$names[0] = strtoupper($names[0]);
$names[1] = strtoupper($names[1]);
$names[2] = strtoupper($names[2]);
*/

/*
$names = array_map(function ($name) {
    return strtoupper($name);
}, $names);
*/

//Na função 'array_map()', primeiro passamos a função de callback e depois passamos o array com os valores a serem formatados

//É possível fazer o método acima utilizando uma função. Veja abaixo

function ApplyToupper ($value)
{
    return strtoupper($value);
}

$names = array_map('applyToupper', $names);

var_dump($names);

