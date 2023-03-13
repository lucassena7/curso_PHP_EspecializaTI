<?php

$valor1 = 2;
$valor2 = 3;

//Pós Incremento
$valor1++; //Chamado de pós incremento, ele pega a própria variável e incrementa +1 --> Mesma coisa que fazer $valor1 = $valor1 + 1;

echo "$valor1 <br><hr>";


//Pré Decremento
$valor2--; //Chamado de pós decremento, ele pega a própria variável e decrementa -1 --> Mesma coisa que fazer $valor2 = $valor2 - 1;

echo "$valor2 <br><hr>";


//Pré Incremento
++$valor1;

echo "$valor1 <br><hr>";


//Pré Decremento
--$valor2;

echo "$valor2 <br><hr>";


//Afinal, qual a diferença do Pré para o Pós  ?
$valor3 = 2;
$valor4 = 2;

//echo $valor3 + $valor4++; //Repare que ele não incrementou na soma. Ele primeiro devolve o valor da soma para depos incrementar.

echo "<br><hr>";

echo $valor4; //Repare que o valor4 já foi incrementado

echo "<br><hr>";

echo $valor3 + ++$valor4; //Agora sim ele incrementa. Ele primeiro incrementa e depois devolve o valor da soma

//A mesma lógica serve para o Pré/Pós Decremento.