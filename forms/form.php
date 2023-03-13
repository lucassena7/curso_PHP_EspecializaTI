<?php
/*As requisições mais usadas são os métodos: 'GET' e 'POST'. Quando o método não é especificado ele é mandado por 'GET' (padrão)
O método POST não exibe os dados
O método GET exibe os dados. São exibidos na URL. */

//var_dump($_GET); //Exibe todas as informações passadas no formulário pelo método 'GET'

//echo "<br><hr>";

//var_dump($_GET['nome']);//é possível exibir campos específicos

//echo "<br><hr>";

/*
var_dump($_POST);//Exibe todas as informações passadas no formulário pelo método 'POST'

echo "<br><hr>";

echo "Nome: {$_POST['nome']}"; //é possível exibir campos específicos
echo "<br>";
echo "Senha: {$_POST['senha']}";
echo "<br>";
echo "Email: {$_POST['email']}";
echo "<br>";
echo "Concordou? " . isset($_POST['concordo']) && $_POST['concordo'] != '' ? 'Sim' : 'Não'; //Se a pessoa concordou e a resposta for diferente de 'vazio' responda 'SIM'. Caso contrário repsonda 'NÃO'.
echo "<br>";
echo "Sexo: {$_POST['sexo']}";
echo "<br>";
echo "Estado: {$_POST['estado']}";
echo "<br>";
echo "Descrição: {$_POST['descricao']}";
echo "<br>";
*/
if ($_REQUEST['nome'] == '' && strlen($_REQUEST['nome']) <= 3)
{
    echo 'O campo nome é inválido !';

    return;
    //die();
    //exit;
}
echo "Nome: {$_REQUEST['nome']}"; //é possível exibir campos específicos
    echo "<hr>";
    echo "Senha: {$_REQUEST['senha']}";
    echo "<hr>";
    echo "Email: {$_REQUEST['email']}";
    echo "<hr>";
    echo "Concordou? " . isset($_REQUEST['concordo']) && $_REQUEST['concordo'] != '' ? 'Sim' : 'Não'; //Se a pessoa concordou e a resposta for diferente de 'vazio' responda 'SIM'. Caso contrário repsonda 'NÃO'.
    echo "<hr>";
    echo "Sexo: {$_REQUEST['sexo']}";
    echo "<hr>";
    echo "Estado: {$_REQUEST['estado']}";
    echo "<hr>";
    echo "Descrição: {$_REQUEST['descricao']}";
    echo "<hr>";

//O $_REQUEST diferente do POST e do GET, não tem um tipo de requisição específica. Ele é universal, porém ele é um pouco mais lento.