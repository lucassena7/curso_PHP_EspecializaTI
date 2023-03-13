<?php

$state = 'São Paulo/SP';

//O 'explode' a partir de um ou mais caracteres definidos, transforma uma string em um array de strings.

$arrayState = explode('/', $state); //primeiro é o delimitador e depois a variável/valor/string

var_dump($arrayState);

echo '<br>';
echo '<hr>';

var_dump($arrayState[0]); //Caso queira exibir somente o estado

echo '<br>';
echo '<hr>';

var_dump($arrayState[1]); //Caso queira exibir somente a UF

$info = 'Rio de Janeiro/RJ/Brasil/Terra';

$arrayInfo = explode('/', $info);

echo '<br>';
echo '<hr>';

var_dump($arrayInfo);

echo '<br>';
echo '<hr>';

//O 'implode' faz o processo inverso do 'explode'. Ou seja, transforma um array em uma string.

echo implode(' # ', $arrayInfo);//Primeiro é a variável/valor/string e depois o delimitador a ser colocado

echo '<br>';
echo '<hr>';

$arrayTeste = [1,2,3,4,5];
echo implode(' - ', $arrayTeste);