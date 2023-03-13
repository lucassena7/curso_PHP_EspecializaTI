<?php

$names = ['a', 'b', 'c', 'd', 'e', 'f'];

echo '<hr>';

//for ($i = 0; $i < 5; $i++)
for ($i = 0; $i < count($names); $i++) //A função 'count' retorna a quantidade de índices que o array possui
{
    echo $names[$i];
}

echo '<hr>';