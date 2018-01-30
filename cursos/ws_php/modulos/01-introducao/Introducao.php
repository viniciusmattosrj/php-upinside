<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (phpversion() >= 5.4):
            echo phpversion(). 'Olá Mundo, podemos programar!';
        else:
            echo phpversion(). 'Olá Mundo, preciso autualizar o PHP!';
        endif;
        ?>
    </body>
</html>
