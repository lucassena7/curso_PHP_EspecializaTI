<?php

$domain = 'https://www.google.com'; //Fazendo a variável 'domain' que armazenará o domínio do google

//A partir da função 'str_replace' eu posso substituir parte de uma string

echo str_replace('www.', 'https://www.', $domain); //Primeiro: o que vai ser substituído; Segundo: O que vai ser colocado; Terceiro: Variável que armazena a string
//Vale lembrar que a função 'str_replace' substitui TODAS as ocorrências.

echo '<br>';
echo '<hr>';

echo substr($domain, 0, 4); //A função 'substr' retorna parte de uma string. Primeiro: variável que armazena a string; Segundo: start. Terceiro: Ponto de parada

echo '<br>';
echo '<hr>';

echo substr($domain, -4); //retorna os últimos 4 caracteres

echo '<br>';
echo '<hr>';

$protocol = substr($domain, 0, 8); //Protocol armazena os oito primeiros caracteres

if ($protocol == 'https://')
{
    echo 'É seguro !';
}
else
{
    echo 'Não é seguro !';
}

echo '<br>';
echo '<hr>';

var_dump(substr($domain, 12, -4));

echo '<br>';
echo '<hr>';

//A função 'strlen' retorna a quantidade de caracteres de uma string
echo strlen($domain);