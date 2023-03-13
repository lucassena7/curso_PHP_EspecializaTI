<?php

$cart = [
    0 => 'Arroz',
    1 => 'Feijao', 
    2 => 'Batata Frita', 
    3 => 'Macarrão',
];

//O PHP possui algumas funções de ordenação. 

// A função 'arsort()' ordena do maior para o menor, ou seja, de forma Decrescente

echo '<pre>';

arsort($cart);

echo '<pre>';

var_dump($cart);

echo '<br>';
echo '<hr>';


// A função 'asort()' ordena do menor para o maior, ou seja, de forma Crescente
echo '<br>';

echo '<pre>';

asort($cart);

var_dump($cart);

echo '<br>';
echo '<hr>';

// A função 'sort()' faz a mesma coisa que a função 'asort', além de ordenar o número das chaves também
echo '<br>';

echo '<pre>';

sort($cart);

var_dump($cart);

echo '<br>';
echo '<hr>';