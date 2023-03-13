<?php

//Array é um a variável que recebe um conjunto de variáveis. Ou seja, é um conjunto de valores.
//Um array pode ter várias posições e em cada posição ele pode armazenar um tipo de variável

$carros = array(1, 'Lucas', 12.2); //Declarando um array. OBS: O array começa na posição 0

$cars = ['Uno', 'Gol', 'Fusion', 'Civic'];

var_dump($carros); //Exibe o array completo
echo '<br>';
echo '<br>';
var_dump($carros[1]); //Exibe somente a string 'Lucas' que está na posição '1' do array
echo '<br>';
echo '<br>';
var_dump($cars); //Exibe somente a string 'Lucas' que está na posição '1' do array
echo '<br>';
echo '<br>';
var_dump($cars[2]); //Exibe somente a string 'Fusion' que está na posição '2' do array

//Abaixo, iremos apresentar alguns exemplos de arrays compostos
$car = [
    'Cor' => 'Branco',
    'Portas' => 4,
    'ano' => 2018,
    'Airbag' => false, //Quando é false, ele retorna NULL. Por isso nada é exibido.
    'Som' => 'JBL Clip 4',
];

echo '<br>';
echo '<br>';
echo $car['Som']; //Forma de exibir um índice específico de um array composto

//O valor de uma propriedade de um array composto pode ser alterado. Observe abaixo
echo '<br>';
echo '<br>';

echo ('Cor antes da troca: ');
echo $car['Cor'];

echo '<br>';
echo '<br>';

echo ('Cor depois da troca: ');
$car['Cor'] = 'Black';

echo $car['Cor'];

//Abaixo, iremos apresentar alguns exemplos de arrays multidimensionais
$veiculos = [
    'Mercedes' => [
        'color' => 'white',
        'motor' => 5.2,
        'name' => 'Carro da Mercedes',
    ],
    'Ford' => [
        'color' => 'black',
        'motor' => 3.2,
        'name' => 'Carro da Ford',
    ],
    'Ferrari' => [
        'color' => 'Red',
        'motor' => 10,
        'name' => 'Carro da Ferrari',
    ],
];

echo '<br>';
echo '<br>';
echo $veiculos['Ferrari']['motor'];