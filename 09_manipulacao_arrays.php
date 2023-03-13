<?php

// A função 'array_pop()' remove o último elemento do array

$cart = ['Arroz', 'Feijao', 'Batata Frita', 'Macarrao'];

var_dump($cart);

array_pop($cart);

echo '<br>';
echo '<br>';

var_dump($cart);

echo '<br>';
echo '<hr>'; //Função do HTML que faz uma 'linha'
echo '<br>';


// A função 'array_shift()' remove o primeiro elemento do array
var_dump($cart);

array_shift($cart);

echo '<br>';
echo '<br>';

var_dump($cart);

echo '<br>';
echo '<hr>'; //Função do HTML que faz uma 'linha'
echo '<br>';


// A função 'unset()' remove todos os índices de um array ou um índice específico
var_dump($cart);

unset($cart[0]);

echo '<br>';
echo '<br>';

var_dump($cart);

echo '<br>';
echo '<hr>'; //Função do HTML que faz uma 'linha'
echo '<br>';


// A função 'array_push()' adiciona um elemento no final do array
var_dump($cart);

array_push($cart, 'Tapete');//É possível adicionar um novo array, um inteiro, uma string, uma variável...

echo '<br>';
echo '<br>';

var_dump($cart);

echo '<br>';
echo '<hr>'; //Função do HTML que faz uma 'linha'
echo '<br>';


// A função 'array_unshift()' adiciona um elemento no início do array
var_dump($cart);

array_unshift($cart, 'Refrigerante');

echo '<br>';
echo '<br>';

var_dump($cart);

echo '<br>';
echo '<hr>'; //Função do HTML que faz uma 'linha'
echo '<br>';


//A função 'array_unique()' remove elementos duplicados no array. Observe abaixo
var_dump($cart);

array_unshift($cart, 'Tapete'); //Adicionando um elemento já existente no array

$cart = array_unique($cart);
echo '<br>';
echo '<br>';

var_dump($cart);



