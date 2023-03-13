<?php

//O while roda o trecho do código enquanto certa condição for verdadeira

$names = ['a', 'b', 'c', 'd'];

//O while faz primeiro a verificação e depois o loop
$i = 0;
while ($i < count($names))
{
    echo $names[$i];

    $i++;
}

echo '<br>';
echo '<hr>';

//Existe o Do while () que primeiro ele faz o loop e depois faz a verificação
$a = 11;
do {
    echo $a;

    $a++;
} while ($a <= 10);