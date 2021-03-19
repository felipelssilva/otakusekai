<h1><strong>CONTATO </strong></h1>
<p>Em caso de d&uacute;vidas, sugest&otilde;es ou qualquer outro assunto, entre em contato conosco pelo e-mail <a href="mailto:animeotakusekai@hotmail.com">animeotakusekai@hotmail.com</a> ou preencha o formul&aacute;rio abaixo:</p>


<form name="form1" method="post" action="?go=Contato&acao=enviar">
  <table width="100%" border="0" align="center">
    <tr>
      <th align="left">Nome: *</th>
      <td><input name="nome" type="text" id="nome" size="20" /></td>
    </tr>
    <tr>
      <th align="left">E-mail: *</th>
      <td><input name="email" type="text" id="email" size="20" /></td>
    </tr>
    <tr>
      <th align="left">Assunto: *</th>
      <td><input name="assunto" type="text" id="assunto" size="20" /></td>
    </tr>
    <tr>
      <th align="left" valign="top">Mensagem: *</th>
      <td><textarea name="mensagem" cols="50" rows="8" id="mensagem"></textarea></td>
    </tr>
    <tr>
      <th align="left" valign="top">&nbsp;</th>
      <td>* Campos necess&aacute;rios</td>
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
		
		$destinatario = "animeotakusekai@hotmail.com";
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   
			$destinatario2 = $email;		
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   
		$assuntoEnviar = "CONTATO OTAKUSEKAI (ASSUNTO: ".$assunto.")";
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   
			$assuntoEnviar2 = "CONTATO OTAKUSEKAI (ASSUNTO: ".$assunto.")";
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   
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
			</html>";
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   
			$corpo2 = "
				<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
				<html xmlns=\"http://www.w3.org/1999/xhtml\">
				<head>
					<title>CONTATO PELO SITE OTAKUSEKAI</title>
				</head>
				<body>						
					<p style=\"color:red;\"><strong>ATENÇÃO!!<br />
					Esta &eacute; uma mensagem autom&aacute;tica, n&atilde;o tente nos responder por este email.</strong>
					</p>
					<p>&nbsp;</p>
					<p>Sua mensagem est&aacute; em processamento, em breve entraremos em contato.
					<br />
					<br />
					Obrigado pela compreens&atilde;o.</p>
					<p>Equipe CAOS.</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
					<div align=\"right\" style=\"font-size:80%; color:#999;\"> Data: ".$datacontato."</div>
				</body>
				</html>";
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   				
		$headers = "MIME-Version: 1.0\r\n". "Content-type: text/html; charset=iso-8859-1\r\n" .
               "From: OTAKUSEKAI<naoresponder@noemail.com.br>\r\n".
               "Date: ".date("r")."\r\n".
			   "Subject: ".$assuntoEnviar."\r\n";
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   
			$headers2 = "MIME-Version: 1.0\r\n". "Content-type: text/html; charset=iso-8859-1\r\n" .
				   "From: OTAKUSEKAI <naoresponder@noemail.com.br>\r\n".
				   "Date: ".date("r")."\r\n".
				   "Subject: ".$assuntoEnviar2."\r\n"; //"To: '".$nome."' <".$email.">\r\n".			   
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   
		@mail($destinatario,$assuntoEnviar,$corpo,$headers) or die ("ERROR TO SEND MAIL [1]");
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   		
			@mail($destinatario2,$assuntoEnviar2,$corpo2, $headers2) or die ("ERROR TO SEND MAIL [2]");
		//***** este para o usuario que entrou em contato, uma resposta automática. 	   		
		
		echo "<script>alert('Obrigado por entrar em contato conosco.'); location='?go=Contato'</script>";
	
	}
	
}

?>