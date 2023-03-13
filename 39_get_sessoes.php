<?php

// include '38_set_sessoes.php';
// echo $name;

//Para acessar informações que estão em outro arquivo 
session_start();

//É possível substituir counteúdo da variável
///$_SESSION['name'] = 'Sena Lucas';

//echo $_SESSION['name'];

//echo '<hr>';

//$_SESSION é um array. E para ver o conteúdo do array é so debugá-lo
//var_dump($_SESSION);

if (!isset($_SESSION['auth'])) //Se não existir a sessã
 {                             //A função 'isset' verifica se existe o valor.
    header('Location:38_set_sessoes.php');//redirecionando o usuário
 }
 else
 {
    echo 'Painel de Admin';
 }          