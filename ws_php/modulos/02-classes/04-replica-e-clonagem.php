<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS PHP - Réplica é Clonagem</title>
    </head>
    <body>
        <?php
            require './class/ReplicaClonagem.class.php';
            $readA = new ReplicaClonagem("posts", "categoria = 'noticias'", 'ORDER BY data DESC');
            $readA->Ler();
            $readA->setTermos("categorias = 'internet'");
                       
            $readB = clone($readA);
            $readB->setTermos("categoria = 'redes sociais'");
                     
            /* Criei um clone para evitar lentidão nas consultas anteriores. O clone é um novo objeto */
            $readC = clone($readA);
            $readC->setTabela('comentarios');
            $readC->setTermos("post = 25");
            
            $readA->Ler();
            $readB->Ler();
            $readC->Ler();                
            
            echo "<pre>";
            var_dump($readA, $readB, $readC);
            echo "</pre>";
        ?>
    </body>
</html>
