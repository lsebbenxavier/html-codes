<?php
   include_once ('connection.php');

   $nome = $_POST['nome'];
   $email = $_POST['email']; 
   $serviço = $_POST['serviço'];
   $mensagem_form = $_POST['mensagem'];
   
   $result_database_form= "INSERT INTO database_form (nome, email, serviço , mensagem) VALUES ('$nome', '$email', '$serviço', '$mensagem')"
   $result_database_form= mysqli_query($conn, $result_database_form) 
?>



  
