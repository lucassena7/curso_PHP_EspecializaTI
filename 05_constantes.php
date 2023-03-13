<?php
//Constantes são valores imutáveis, ou seja, uma vez definida ela não pode ser mudada.
//Por boa prática, é indicado que as contantes sejam declaradas com os caracteres MAIÚSCULOS.

define("NOME_CONSTANTE", 123);
const CONSTANTE_NOME = 321; //-> Outra forma de declarar uma constante

//NAME_CONSTANTE = 321;  -> Não é possível alterar o valor de uma constante. ERROR !.

echo NOME_CONSTANTE;
echo '<br>';
echo CONSTANTE_NOME;
