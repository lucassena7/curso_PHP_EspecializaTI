<?php

$name = 'Lucas Sena';

//A função 'isset' verifica se uma variável existe
if (isset($name))
{
    echo $name;
}
else
{
    echo 'Variável não existe !';
}

echo '<br>';
echo '<hr>';

//A função 'unset' remove/deleta da memória uma variável
unset($name);

if (isset($name))
{
    echo $name;
}
else
{
    echo 'Variável não existe !';
}