<?php

$versao = "2014/v1.2";

session_start();

$cookie = 'OtakuSekai';
setcookie("CAOS", $cookie, time()+1296000); # expira 15  dia # 86400 expira 1 dia /* expira em um mes 2592000*/	


##################################################
	include "connection/conn.php";				 #
##################################################
	include "functions/functions.php";			 #
##################################################

		$Busca_Contas = @mysql_query("SELECT * FROM $tabela") or die("erro: $tabela 1");
		$Dados_Contas = mysql_fetch_array($Busca_Contas);
		
if($_POST['prossegue_login']) {
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	$logar = @mysql_query("SELECT * FROM $tabela WHERE CD_USUARIO='".$usuario."' AND CD_SENHA='".$senha."'") or die("erro: $tabela 2");

if (strlen($senha)< 1) {
	
	echo "<script>alert('Você deve possuir o nome de usuário e a senha para acessar essas informações!'); location='?Error=1'</script>";

}

if (mysql_num_rows($logar)> 0){
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
}
	 
	if(!$_SESSION['usuario'] and !$_SESSION['senha']) {
		
		echo "<script> alert('Você deve possuir o nome de usuário e a senha para acessar essas informações!');  location='?Error=2'</script>";
	
	} else {

		if($Dados_Contas['CD_STATUS'] == '0') {
				
			$ip = $_SERVER['REMOTE_ADDR'];
			$ultimologin = date('d-m-Y - H:i:s');
			$status = '1';
			$query_dados = @mysql_query("UPDATE $tabela SET DS_LASTLOGIN = '$ultimologin', DS_IPLASTLOGIN = '$ip', CD_STATUS = '$status' WHERE CD_USUARIO='".$usuario."'") or die("erro: logar last login, iplastlogin,status");
			
			echo "<script> location='?Logado=Parabens'</script>";
			
		} else {
			
			echo "<script>location='$versao/';</script>";
			
			//include "JaDescobriram.php";	
			
		}

	 
	}

}


if($Dados_Contas['CD_STATUS'] == '1') {
				
			echo "<script>location='$versao/';</script>";
			
}
		
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>C.A.O.S. - Conven&ccedil;&atilde;o de Animes Otaku Sekai</title>

	<link rel="shortcut icon" href="favicon.ico" />
	
    <link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
   
<meta name="description" content="convencao de animes otaku sekai">
<meta name="keywords" content="convencao, anime, otaku, desenho">

<link rel="stylesheet" type="text/css" media='all' href="css/styles.css?<?php echo microtime();?>" />

<script type="text/javascript">
function Logar() {
var Form;
     Form = document.frmpainel;
     
	 if (Form.usuario.value.length==0) {
		alert("Informe o usuario!");
        Form.usuario.focus();
        return false;
     }
	
	if (Form.senha.value.length==0) {
		alert("Informe a senha!");
        Form.senha.focus();
        return false;
     }

	return true;
}

</script>


</head>

<body>
<?

$ir = $_GET['go'];
$ext = (isset($_GET['ext']));
	if (empty($ext)){ 
		$ext="php";
	}
	if (empty($ir)){ 
		$ir = "Login.php"; 
	}
	else {
		$ir .= ".".$ext;
		}
	if (file_exists($ir)){ 
		include $ir; 
	}
	else { 
		include "erropagina.php"; 
	} 



	if ($Logado == "Parabens") {
		
		echo "
		<fieldset style=\"margin:30px; padding:15px;\"> 
			<div align=\"justify\"> 
				<h3> 
					A equipe CAOS, lhe parabeniza por sua conquista!  
						<br />  
					Fique sempre de olho em nossa p&aacute;gina, atualiza&ccedil;&otilde;es di&aacute;rias e intera&ccedil;&atilde;o total a voc&ecirc;. 
						<br /> 
						<br /> 
					<p style=\"font-size:40%\">Att. Equipe CAOS.</p> 
				</h3> 
			</div> 
		</fieldset> 
	";	
	
	}
	
?>

</body>
</html>