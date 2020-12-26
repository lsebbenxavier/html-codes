<!-- Layout -->
<link rel="stylesheet" href="form.html">
 
<?php
  
 /* Valores recebidos do formulário  */
 $nome = $_POST['nome'];
 $replyto = $_POST['replyto']; // Email que será respondido
 $mensagem_form = $_POST['mensagem'];
 $assunto = $_POST['assunto'];
  
 /* Destinatário e remetente - EDITAR SOMENTE ESTE BLOCO DO CÓDIGO */
 $to = "";
 $remetente = "contato@xdesignagencybr.com"; // Deve ser um email válido do domínio
  
 /* Cabeçalho da mensagem  */
 $boundary = "XYZ-" . date("dmYis") . "-ZYX";
 $headers = "MIME-Version: 1.0\n";
 $headers.= "From: $remetente\n";
 $headers.= "Reply-To: $replyto\n";
 $headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
 $headers.= "$boundary\n"; 
  
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
 
 /* Função que envia a mensagem  */
 if(mail($to, $assunto, $mensagem, $headers))
 {
  echo "<br><br><center><b><font color='green'>Mensagem enviada com sucesso!";
 } 
  else
  {
  echo "<br><br><center><b><font color='red'>Ocorreu um erro ao enviar a mensagem!";
 }
?>