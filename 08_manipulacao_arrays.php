<?php

$infoEmpresa = [
    'name' => 'CompanyTI',
    'founder' => 'Lucas Sena',
    'year_current' => 2027,
];

$infoEmpresaUniao = [
    'courses' => ['PHP', 'JS', 'C', 'Python'],
    'total_courses' => 26,
];

//var_dump($infoEmpresa['name']);


/* A função 'array_keys()' serve para mostrar todas as chaves/índices de um array

var_dump(array_keys($infoEmpresa));
*/


/* A função 'array_values()' serve para mostrar todos os valores das chaves/índices de um array

var_dump(array_values($infoEmpresa));
*/


/* A função 'count()' retorna a quantidade de índices que o array possui

var_dump(count($infoEmpresa));
*/


/* A função 'array_merge' serve para unir dois ou mais arrays
*/
$infoEmpresa = array_merge($infoEmpresa, $infoEmpresaUniao);

echo '<pre>'; //esta tag mostra os dados como realmente ele estão no editor
var_dump($infoEmpresa);