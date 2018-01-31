<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require './class/ModelagemDeClasse.class.php';
            
            $vinicius = new ModelagemDeClasse('Vinicius', 30, 'Programador', 5700);
            $vinicius->setProfissao('Full Stack');
            
            $vinicius->Trabalhar('um e-commerce',12000);
            
            echo "<pre>";
            var_dump($vinicius);
            echo "</pre>";
            
        ?>
    </body>
</html>
