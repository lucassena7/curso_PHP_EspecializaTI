<?php

// echo '<pre>';
// var_dump($_FILES);

$file = $_FILES['imagens'];
$path = 'arquivos/';

/*Se o diretório não existir
if (!is_dir($path))
{
    mkdir('uploads');
    mkdir($path);
}
*/

for ($i = 0; $i < count($file['name']) ;$i++) {

    $j = $i + 1;
    if ( move_uploaded_file($file['tmp_name'][$i], $path . $file['name'][$i]) )
    {
        echo "Sucesso ao mover o arquivo {$j}<br>";
    }
    else
    {
        echo "Falha ao mover o arquivo {$j}<br>";
    }
}
