<?php
   include_once ('connection.php');

   $nome = $_POST['nome'];
   $replyto = $_POST['replyto']; // Email que será respondido
   $mensagem_form = $_POST['mensagem'];
   $assunto = $_POST['serviço'];

   $resultdatabase_form "INSERT INTO database_form (nome, email, serviço , mensagem) VALUES (nome, email, serviço, mensagem)"
   $mysqli_query ($conn, $resultdatabase_form) 
?>



  
