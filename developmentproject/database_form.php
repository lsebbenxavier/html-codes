<?php 
   include_once ('connection.php');
   $nome = $_POST['nome'];
   $email = $_POST['email']; 
   $serviço = $_POST['serviço'];
   $mensagem = $_POST['mensagem'];

   $result_database_form = "INSERT INTO database_form.php (nome, email, serviço, mensagem) VALUES ('$nome', '$email', '$serviço', '$mensagem')";
   $resultado_database_form= mysqli_query ($conn, $result_database_form); 
?>



  
