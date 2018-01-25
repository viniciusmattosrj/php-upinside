<html lang="pt-br">
   <head>
       <meta charset="UTF-8">
       <title></title>
   </head>
   <body>
      <?php
        require('./class/ClassesObjetos.class.php');

        $teste = new ClassesObjetos();
        $teste->getClass('De introdução','mostrar uma classe');
        $teste->verClass();
      ?>       
   </body>    
</html>