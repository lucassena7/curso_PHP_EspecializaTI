<?php

$var1 = 'Algo';
$var2 = 'Outro';

//No PHP, para concatenar, basta usar um '.'

echo $var1 . $var2;

echo '<br>';
echo '<br>';
echo '<hr>';

echo $var1 .' '. $var2; //Método usado para dar um espaço entre a concatenação

echo '<br>';
echo '<br>';
echo '<hr>';

echo $var1 .' '. $var2 . ' '. 12; //Também é possível passar o valor direto

//Se preferir, é possível criar uma 3° variável para receber a concatenação

$var3 = $var1 .' '. $var2 . ' '. 12;

echo '<br>';
echo '<br>';
echo '<hr>';

echo $var3;

echo '<br>';
echo '<br>';
echo '<hr>';

$name = 'Lucas Sena';
$company = 'DETRO';

//É possível criar uma frase a partir de concatenações
echo 'O ' . $name . ' faz parte da empresa: ' . $company . '.';

echo '<br>';
echo '<br>';
echo '<hr>';

//Um método mais fácil para criar uma frase a partir de concatenações
echo "O {$name} faz parte da Empresa: {$company}.";

//OBS: NÃO esquecer das aspas duplas ^^