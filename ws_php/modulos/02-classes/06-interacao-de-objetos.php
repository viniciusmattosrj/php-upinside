<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Interação de Objetos</title>
    </head>
    <body>
        <?php
            require('./class/InteracaoClasse.class.php');
            require('./class/InteracaoDeObjetos.class.php');
            
            $vinicius = new InteracaoClasse('Vinicius Mattos', 30, 'Programador', 1000);
            $zuck = new InteracaoClasse('Marcos', 22, 'Designer', 700);
            
            $concrete = new InteracaoDeObjetos('Concrete Solutions');
            $concrete->Contratar($vinicius, 'Dev Pleno', 6000);
            $concrete->Pagar();
            $concrete->Promover('Gerente de Projetos', 12000);
            $concrete->Pagar();
            $concrete->Demitir(5600);                        
            
            $concrete->Contratar($zuck,'Design', 2400);
            $concrete->Pagar();
            $concrete->Pagar();            
            $concrete->Promover('Adm Projetos', 2400);
            
            echo "<pre>";
            var_dump($vinicius, $zuck, $concrete);
            echo "</pre>";           
        ?>
    </body>
</html>
