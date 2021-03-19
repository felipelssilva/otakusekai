<h1><strong>CONTATO </strong></h1>
<p>Em caso de dúvidas, sugestões ou qualquer outro assunto, entre em contato conosco pelo e-mail <a href="mailto:animeotakusekai@hotmail.com">animeotakusekai@hotmail.com</a> ou preencha o formulário abaixo:</p>


<form name="form1" method="post" action="?go=Contato&acao=enviar">
  <table width="100%" border="0" align="center">
    <tr>
      <th align="left">Nome: </th>
      <td><input name="nome" type="text" id="nome" size="20" /></td>
    </tr>
    <tr>
      <th align="left">E-mail: </th>
      <td><input name="email" type="text" id="email" size="20" /></td>
    </tr>
    <tr>
      <th align="left">Assunto: </th>
      <td><input name="assunto" type="text" id="assunto" size="20" /></td>
    </tr>
    <tr>
      <th align="left" valign="top">Mensagem:</th>
      <td><textarea name="mensagem" cols="50" rows="8" id="mensagem"></textarea></td>
    </tr>
  </table>
    <p>
      <input type="submit" name="Submit" value="Enviar">
  </p>
</form>

<?php

if ($_GET['acao'] == 'enviar'){

	$nome = stripslashes($_POST['nome']);
	$email = stripslashes($_POST['email']);
	$assunto = stripslashes($_POST['assunto']);
	$mensagem = htmlspecialchars(stripslashes($_POST['mensagem']));
	$datacontato = date('d-m-Y - H:i:s');


	if (empty($nome) || empty($email) || empty($assunto) || empty($mensagem)){ 
		echo "<script>alert('Por favor preencha todos os campos obrigatórios'); location='javascript:history.back()'</script>";
	} else {
		
		$destinatario = "felipeluis.6@gmail.com"; //"animeotakusekai@hotmail.com";
		
		//$de = $email; 
		$assuntoEnviar = "CONTATO OTAKUSEKAI ASSUNTO: ".$assunto."";
		$corpo = "
			<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
			<html xmlns=\"http://www.w3.org/1999/xhtml\">
			<head>
				<title>CONTATO POR EMAIL SITE OTAKUSEKAI</title>
			</head>
			<body>
			
				<p><strong>CONTATO POR EMAIL DE: ".$nome." <<a href=\"mailto:".$email."\">".$email."</a>></strong></p>
				
				<p><strong>Assunto:</strong></p>
				<p>".$assunto."</p>
				
				<p>&nbsp;</p>
				
				<p><strong>Mensagem:</strong></p>
				<p>".$mensagem."</p>
				
				
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				
			 	<div align=\"right\" style=\"font-size:80%; color:#999;\"> Data: ".$datacontato."</div>
			</body>
			</html>
		";
		
		$headers = "MIME-Version: 1.0\r\n". "Content-type: text/html; charset=iso-8859-1\r\n" .
               "From: OTAKUSEKAI<naoresponder@noemail.com.br>\r\n".
               "To: '".$nome."' <".$email.">\r\n".
               "Date: ".date("r")."\r\n".
			   "Subject: ".$assuntoEnviar."\r\n";
		
		@mail($destinatario,$assuntoEnviar,$corpo,$headers) or die ("ERROR TO SEND MAIL");

		
		echo "<script>alert('Contato enviado, em breve entraremos em contato'); location='?go=Contato'</script>";
	
	}
	
}

?>