<?php

$name = 'lucas miguel de Sena costa';

echo strtoupper($name); //A função 'strtoupper' transforma todos os caracteres em letra maíscula

echo '<br>';
echo '<hr>';

echo strtolower($name); //A função 'strtolower' transforma todos os caracteres em letra minúscula

echo '<br>';
echo '<hr>';

echo ucfirst($name); //Pega o primeiro caracter da palavra e transforma em letra maíuscula.

//É possível combinar essas funções ^^

echo '<br>';
echo '<hr>';

echo ucfirst(strtolower($name)); //Transforma todos os caracteres em letra maíuscula e depois transforma a primeira letra em maiúscula.

echo '<br>';
echo '<hr>';

echo ucwords(strtolower($name)); //Transforma a primeira letra de cada palavra em maiúscula
