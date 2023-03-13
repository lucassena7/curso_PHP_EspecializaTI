<?php

//Funções recursivas são funções funções que chamam ela mesma

/* 
Relembrando fatorial
   4 => 4*3*2*1
   2 => 2*1
   3 => 3*2*1
*/

function fatorial (int $number)
{
    if ($number > 1)
    {
        $number = $number * fatorial ($number -1);
        //$number =* fatorial ($number -1); //É a mesma coisa que a de cima
    }
    
   return $number;
}

echo fatorial (4);