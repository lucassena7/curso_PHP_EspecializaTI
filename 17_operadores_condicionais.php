<?php

//O switch é indicado para fazer verificações em bloco

$number = 11;

/*
$number = 11;

if ($number == 14)
{
    echo 'Quatorze';
}
else if ($number == 13)
{
    echo 'Treze';
}
else if ($number == 12)
{
    echo 'Doze';
}
else
{
    echo 'Numero não identificado.';
}
*/
switch ($number)
{
    case $number == 12:
        echo 'Doze';
        break;
    
    case $number == 13:
        echo 'Treze';
         break;
    
    case $number == 14:
        echo 'Quatorze';
        break;
    
    case $number == 15:
        echo 'Quinze';
        break;

    default:
        echo 'Valor não encontrado';
        break;
}

/*
    //O switch também pode ser usado sem o uso da variável 

    switch ($number)
    {
        case 12:
            echo 'Doze';
            break;

        case 13:
            echo 'Treze';
            break;

        case 14:
            echo 'Quatorze';
            break;

        case 15:
            echo 'Quinze';
            break;

        default:
            echo 'Número não identificado';
            break;
    }
*/