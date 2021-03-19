<?

if(!isset($_SESSION['usuario'])) { 
            echo '
			<h1 align="center">Tente descobrir o usu&aacute;rio e senha!</h1>

		<div style="width:40%; padding-left:30%;">
		
			  <fieldset style="padding:5%;">
			  
			  		<legend>Formul&aacute;rio de login</legend>
					
				<form name="frmpainel" method="post" id="frmpainel" onSubmit="javascript:return Logar();">
					
					<table border="0" align="center" cellpadding="0" cellspacing="5">
					  <tr>
						<td>
							<label>
								<input name="usuario" type="text" id="usuario" onfocus="clearText(this)" class="usuario" required="required" size="30">
							</label>
							<label>
								<input name="senha" type="password" id="senha" onfocus="clearText(this)" class="senha" required="required" size="30">
							</label>
						</td>
						<td>
							<input name="prossegue_login" type="submit" id="prossegue_login" value="Logar" onclick="return Logar()">		
						</td>
					  </tr>
					</table>
										
              	</form>
			  
			</fieldset>
			
		</div>
			  ';
    
} else {
	
	
	if($Dados_Contas['CD_STATUS'] == '0') {
		 echo "<script> location='JaDescobriram.php'</script>";
	}
	
	echo "
	<div id=\"deslogar\"> 
		<a href=\"?sair=Confirmado\">Deslogar</a> 
	</div> 
	";	


}
        
?>
