<?php

//Uma sessão depende do usuário estar com o navegador aberto. Já o cookie, nós podemos definir um timer maior para deixar o valor salvo no navegador do usuário.

//Sessão salva uma parte no servidor e uma parte no client. Já o cookie, ele salva diretamente no client.

setcookie('cookie_teste','Teste Cookie');//criando um cookie. 1°=identificador do cookie; 2°=valor do cookie

setcookie('testando','OK', time() + 5); //criando um cookie. 1°=identificador do cookie; 2°=valor do cookie; 3°=Tempo de expiração (em SEGUNDOS)

// echo $_COOKIE['cookie_teste'];