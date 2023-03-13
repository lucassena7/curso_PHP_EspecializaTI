<?php

//Declaramos uma varíavel basicamente para guardarmos um valor na memória e conseguir recuperar este valor depois.
//Uma variável pode sofrer mutações ao longo do programa.
//O PHP é fracamente tipado, ou seja, não é necessário especificar um tipo de variável.
//O PHP é case sensitive, ou seja, ele diferencia caracteres maiúsculos de caracteres minúsculos.
$name = 'Lucas Sena'; //Para declarar uma variável é só colocar $

echo $name;
echo '<br>'; //Este comando é uma quebra de linha

$name = 'Lc'; //Atribuindo um novo valor á variável '$name'

echo $name;
echo '<br>';

$name = 12.5; //Atribuindo um novo valor á variável '$name'

echo $name;
echo '<br>';

$name = 123; //Atribuindo um novo valor á variável '$name'
echo $name;

// o atalho 'CTRL + d' seleciona recursos iguais.

/*Boas práticas para declarar variáveis
    . Não iniciar com números;
    . Não utilizar espaços;
    . Não usar caracteres especiais (!@#$%¨&*()-~{}[];.<>\)
    . Ter menos de 15 caracteres;
    . Nome fazer sentido.
*/
