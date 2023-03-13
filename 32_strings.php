<?php

//Principais funções de criptografia

//$salt = '!@#$%¨&*()_+';
$password = '123456'; //. $salt;

//A função 'MD5' retorna uma string de 32 caracteres. OBS: Ela gera sempre a mesma hash para um valor. Para solucionar este problema, é indicado que use o md5 combinado com uma outra string ($salt)
echo md5($password);


//A função 'sha1' retorna uma string de 40 caracteres.
echo '<br><hr>';
echo sha1($password);


//A função 'crypt' combina duas strings (aumentar a segurança) e retorna um hash.
echo '<br><hr>';
echo crypt($password, 'alo');


//A função 'base64' permite criptografar e descriptografar
$passCr = base64_encode($password); //Fazendo a variável 'passCr' receber a criptografia da variável 'password'
echo '<br><hr>';
echo $passCr;

echo '<br>';
echo base64_decode($passCr); //Exibindo a variável descriptografada


//A função 'hash' retorna uma string de 128 caracteres.
echo '<br><hr>';
echo hash('sha512', $password); //Primeiro: O tipo de criptografia (Md5, sha1...). Segundo: A variável a ser criptografada


//É possível fazer uma função que combine alguns tipos de criptografia.
echo '<br><hr>';
echo cryptC($password);
function cryptC (string $value): string
{
    $hash = crypt($value, '!@#$%¨&*()_+');

    $hash = md5($value);

    $hash = sha1($hash);

    $hash = hash('sha512', $hash);

    return $hash;
}

