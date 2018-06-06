<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Comportamento Inicial</title>
    </head>
    <body>
        <?php
        require_once './class/ComportamentoInicial.class.php';
                   
        $vinicius = new ComportamentoInicial('Zico', 27, 'Programador', 5.400);
        $zico = new ComportamentoInicial('Zico', 29, 'DevMaster', 7.600);
        $adilio = new ComportamentoInicial('Adilio', 28, 'Design', 4.300);
        
        $vinicius->ver();     
        
        ?>
    </body>
</html>
