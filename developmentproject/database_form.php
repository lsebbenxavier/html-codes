<?php
   include_once ('connection.php');

   $nome = $_POST['nome'];
   $replyto = $_POST['replyto']; 
   $mensagem_form = $_POST['mensagem'];
   $assunto = $_POST['serviço'];

   $result_database_form "INSERT INTO database_form (nome, email, serviço , mensagem) VALUES (nome, email, serviço, mensagem)"
   $resultado_mysqli_query ($conn, $result_database_form) 
?>



  
