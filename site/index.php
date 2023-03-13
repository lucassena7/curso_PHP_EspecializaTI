 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu site em PHP</title>
 </head>
 <body>
    <?php
        //O Include e o Require fazem o mesmo papel. A diferença está na lógica de privilégios. Ambos servem para incluir arquivos dentro do código.

        //include('includes/header.php'); //dentro do include, passe o caminho do arquivo a ser incluido.

        //require('includes/header.php'); //Se o arquivo a ser incluido apresentar algum erro ou não for encontrado, o require para de ler a página e 'trava' no erro. 

        require_once('includes/header.php'); //O require_once tem a mesma lógica do 'include_once'
        //Existe a função 'include_once' que inclui o arquivo uma única vez. É possível usar dentro de um loop que continuará incluindo uma vez.
    ?>
 <!--<header>
    <h1>Header</h1>
 </header> -->
    <div>
        <?php
        echo 'Teste';
        ?>
    </div>
    <!--<footer>
        #footer
    </footer>-->
    <?php
        include_once('includes/footer.php');
    ?>
 </body>
 </html>