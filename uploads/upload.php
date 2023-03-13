<?php

// echo '<pre>';
// var_dump($_FILES['imagem']['name']);

$file = $_FILES['imagem'];

if (move_uploaded_file($file['tmp_name'],  'arquivos/' . $file['name'] ) )
{
    echo 'Sucesso !';
}
else
{
    echo 'Falha !';
}