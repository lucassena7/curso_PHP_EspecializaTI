<?php

//$nomes = ['Lucas', 'Miguel', 'Sena', 'Costa'];

$name = 'Lucas';
$sobrenome = 'Sena';
$ano = 2000;

/*
Uma outra forma de se fazer um array

$infoPessoa = [$name, $sobrenome, $ano];
*/


//Uma outra forma de se fazer um array

$infoPessoa = compact('name', 'sobrenome', 'ano');

//var_dump($infoPessoa);


/*
A função 'is_array()' verifica se a variável passada é um array ou não. Observe abaixo:

var_dump(is_array($name)); //Retorna falso pq '$name' não é um array.

var_dump(is_array($infoPessoa)); //Retorna TRUE, uma vez que '$infoPessoa' é um array.
*/

//A função 'in_array()' verifica se existe um valor dentro do array. Obersrve abaixo
var_dump(in_array('Sena', $infoPessoa));