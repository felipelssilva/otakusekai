<?

if(!isset($_SESSION['usuario'])) { 
//<h1 align="center">Tente descobrir o usu&aacute;rio e senha!</h1>

            echo '

		<div style="width:350px; padding-left:37%;  padding-top:10%;">
		
			  <fieldset style="padding:5%;">
			  
			  		<legend><strong>Form <b style=\'color:#ef5435;\'>x</b> of <b style=\'color:#ef5435;\'>x</b> login</strong> </legend>
					
				<form name="frmpainel" method="post" id="frmpainel" onSubmit="javascript:return Logar();">
					
					<table border="0" align="center" cellpadding="0" cellspacing="5">
					  <tr>
						<td align="right">
						
<p id="us">User</p>

<p id="us">Password<p>

						</td>
						<td>
						
							<label>
								<input name="usuario" type="text" id="usuario" onfocus="clearText(this)" class="usuario" required="required" size="15">
							</label>
							
							<label>
								<input name="senha" type="password" id="senha" onfocus="clearText(this)" class="senha" required="required" size="15">
							</label>						
						
						</td>
						 </tr>
						 						
						<tr>
						<td colspan="2" align="center">
						<input name="prossegue_login" type="submit" id="prossegue_login" value="Sign In" onclick="return Logar()">		
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
	} else {
	
	echo "
	<div id=\"deslogar\"> 
		<a href=\"?sair=Confirmado\">Deslogar</a> 
	</div> 
	";	
	}

}
        
?>
