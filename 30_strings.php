<?php

//Definindo o timezone (fuso horário)
date_default_timezone_set('America/Sao_Paulo'); //a função 'date_default_timezone_set()' define o fuso horário a ser trabalhado
echo 'Timezone: ' . date_default_timezone_get() . '<br>'; //a função 'date_default_timezone_get()' retorna o fuso horário definido na máquina

echo '<br><hr>';

echo 'Ano atual: ' . date('Y') . '<br>'; //Colocando o 'Y' ele retorna o ano atual  ---> Y = 2023 ; y = 23
echo 'Mês atual: ' . date('M') . '<br>'; //Colocando o 'M' ele retorna o mês atual  ---> M = Feb; m = 02
echo 'Mês atual: ' . date('D') . '<br>'; //Colocando o 'D' ele retorna o dia atual  ---> D = Thu; d = 16

echo '<br><hr>';

//É possível combinar as funções
echo 'Data atual: ' . date('d/m/Y') . '<br>';
echo 'Data atual: ' . date('Y/m/d') . '<br>'; 

echo '<br><hr>';

//é possível trabalhar com horas também
echo 'Hora atual: ' . date('H') . ' horas' . '<br>'; //Colocando o 'H' ele retorna a hora atual. H = formato 24h ; h = formato 12h
echo 'Minuto atual: ' . date('i') . ' minutos' . '<br>'; //Colocando o 'i' ele retorna o minuto atual
echo 'Segundo atual: ' . date('s') . ' segundos' . '<br>'; //Colocando o 'i' ele retorna o segundo atual

echo '<br><hr>';

//É possível combinar as funções
echo 'Horário atual: ' . date('H:i:s') . '<br>'; 
