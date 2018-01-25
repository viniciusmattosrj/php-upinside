<html lang="pt-br">
   <head>
       <meta charset="UTF-8">
       <title></title>
   </head>
   <body>
      <?php
        require('./class/AtributosMetodos.class.php');
        
        $pessoa = new AtributosMetodos();
        $pessoa->setUsuario('Vinicius', 30, 'WebMaster');
        $pessoa->getUsuario();
      ?>       
   </body>    
</html>