<?php
  
 /* Valores recebidos do formulário  */
 $nome = $_POST['nome'];
 $replyto = $_POST['replyto']; // Email que será respondido
 $mensagem_form = $_POST['mensagem'];
 $assunto = $_POST['assunto'];
  

 /* Layout da mensagem  */
 $corpo_mensagem = " 
 <br>Formulário via site
 <br>--------------------------------------------<br>
 <br><strong>Nome:</strong> $nome
 <br><strong>Email:</strong> $replyto
 <br><strong>Assunto:</strong> $assunto
 <br><strong>Mensagem:</strong> $mensagem_form
 <br><br>--------------------------------------------
 ";
 
?>