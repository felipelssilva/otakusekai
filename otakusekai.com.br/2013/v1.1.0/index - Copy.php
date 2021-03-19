<?php

session_start();

$cookie = 'OtakuSekai';
setcookie("CAOS", $cookie, time()+1296000); # expira 15  dia # 86400 expira 1 dia /* expira em um mes 2592000*/	
/*

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
	
	echo "<script>alert('Senha ou usuário não conferem'); location='?Error=1'</script>";

}

if (mysql_num_rows($logar)> 0){
	$_SESSION['usuario'] = $usuario;
	$_SESSION['senha'] = $senha;
}
	 
	if(!$_SESSION['usuario'] and !$_SESSION['senha']) {
		
		echo "<script> alert('Senha ou usuário não conferem');  location='?Error=2'</script>";
	
	} else {

		if($Dados_Contas['CD_STATUS'] == '0') {
				
			$ip = $_SERVER['REMOTE_ADDR'];
			$ultimologin = date('d-m-Y - H:i:s');
			$status = '1';
			$query_dados = @mysql_query("UPDATE $tabela SET DS_LASTLOGIN = '$ultimologin', DS_IPLASTLOGIN = '$ip', CD_STATUS = '$status' WHERE CD_USUARIO='".$usuario."'") or die("erro: logar last login, iplastlogin,status");
			
			echo "<script> location='?Logado=Parabens'</script>";
			
		} else {
		
			include "JaDescobriram.php";	
			
		}

	 
	}

}
*/
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>C.A.O.S. - Conven&ccedil;&atilde;o de Animes Otaku Sekai</title>

	<link rel="shortcut icon" href="favicon.ico" />
	
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:400,700,900' rel='stylesheet' type='text/css'>
    <? /*<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,400,700' rel='stylesheet' type='text/css'>*/ ?>
   
    <meta name="description" content="convencao de animes otaku sekai">
    <meta name="keywords" content="convencao, anime, otaku, desenho">
    
    <link rel="stylesheet" type="text/css" media='all' href="css/styles.css?<?php echo microtime();?>" />

	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/destaque.css?<?php echo microtime();?>" type="text/css" />
	<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="js/jquery.destaques.js"></script>

</head>

<body>

<div class="escopo" align="center">

  <div class="topo"></div>
	<a name="menu"></a>
    <div class="menu">
        <ul>
            <li><a href="?">Home</a></li>
            <li><a href="?go=Evento#menu">Evento</a></li>
            <li><a href="?go=Programacao#menu">Programa&ccedil;&atilde;o</a></li>
            <li><a href="?go=Local#menu">Local</a></li>
            <li><a href="?go=Ingressos#menu">Ingressos</a></li>
            <li><a href="?go=Caravanas#menu">Caravanas</a></li>
            <li><a href="?go=Contato#menu">Contato</a></li>
        </ul>
    </div>

    <table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="250" align="left" valign="top" bgcolor="#FFFFFF">

            <!-- MENU -->
            
            <div class="menuv">
            
            <ul>
            
            <li id="first">Atra&ccedil;&otilde;es</li>
        
                <li><a href="?go=Atracoes&acao=PalestraDubladores#Anchor">Palestra com Dubladores</a></li>
                <li><a href="?go=Atracoes&acao=Bandas#Anchor">Bandas</a></li>
                <li><a href="?go=Atracoes&acao=CanalNostalgia#Anchor">Canal Nostalgia</a></li>
                <li><a href="?go=Atracoes&acao=GrupoDanca#Anchor">Grupo de Dan&ccedil;a</a></li>
                <li><a href="?go=Atracoes&acao=ApresentacaoArtesMarciais#Anchor">Apresenta&ccedil;&atilde;o de Artes Marciais</a></li>
                <li><a href="?go=Atracoes&acao=ConcursoCosplay#Anchor">Concurso de Cosplay</a></li>
                <li><a href="?go=Atracoes&acao=Animequiz#Anchor">Animequiz</a></li>
                <li><a href="?go=Atracoes&acao=Radio#Anchor">Radio</a></li> 
                <li><a href="?go=Atracoes&acao=ChooseYouWay#Anchor">Choose you way</a></li>
                <li><a href="?go=Atracoes&acao=ExameHunter#Anchor">Exame Hunter</a></li>
            
            <li id="first">Atividades</li>
        
                <li><a href="?go=Atividades&acao=SalaNimpo#Anchor">Sala Nimpo</a></li>
                <li><a href="?go=Atividades&acao=MaidCafe#Anchor">Maid Caf&eacute;</a></li>
                <li><a href="?go=Atividades&acao=Animeoke#Anchor">Animeoke</a></li>
                <li><a href="?go=Atividades&acao=CampGames#Anchor">Campeonato de Games</a></li>
                <li><a href="?go=Atividades&acao=NintendoWorld#Anchor">Nintendo World</a></li>
                <li><a href="?go=Atividades&acao=CampLOL#Anchor">Camponato de LOL</a></li>
                <li><a href="?go=Atividades&acao=CampDOTA2#Anchor">Campeonato de DOTA 2</a></li>
                <li><a href="?go=Atividades&acao=FanArea#Anchor">FanArea</a></li>
                <li><a href="?go=Atividades&acao=Taverna#Anchor">Taverna</a></li>
                <li><a href="?go=Atividades&acao=BatalhaCampal#Anchor">Batalha Campal</a></li>
                <li><a href="?go=Atividades&acao=KinnectParty#Anchor">Kinnect Party</a></li>
                <li><a href="?go=Atividades&acao=CardGames#Anchor">Card Games</a></li>
                <li><a href="?go=Atividades&acao=ExibicaoAnimes#Anchor">Exibi&ccedil;&atilde;o de Animes</a></li>
                <li><a href="?go=Atividades&acao=PoraoNerd#Anchor">Por&atilde;o Nerd</a></li>
                <li><a href="?go=Atividades&acao=CosplayHelpGuardaVol#Anchor">Cosplay Help e Guarda Volumes</a></li>
                <li><a href="?go=Atividades&acao=EstudioFotos#Anchor">Est&uacute;dio de Fotos</a></li>
                <li><a href="?go=Atividades&acao=EstandeLUG#Anchor">Estande LEVEL UP!</a></li>
                <li><a href="?go=Atividades&acao=EstandesProdutos#Anchor">Estandes de Produtos</a></li> 
                <li><a href="?go=Atividades&acao=Alimentacao#Anchor">Alimenta&ccedil;&atilde;o</a></li>
            </ul>        
        
            </div>
            
            <!-- MENU -->         
        
        </td>
        <td valign="top" bgcolor="#FFFFFF">
        
        <div class="conteudo">        
       
      <!-- destaques -->
                <div id="blocoDestaques">
                
                   <? /*<a class="faixa" href="#" title=""><!-- --></a>*/ ?>
                    
                    <ul>
                        <li>
                            <a href="?go=lalla">
                                
                                <div id="img">
                                    <img src="Fotos/fabio_lucindo_e_yuri.jpg" width="567" height="337" id="i" />
                                </div>
                                
    
                            <div class="fundo">                         
                                        1
                            </div>
                            
                            </a>            
                        </li>
                        
                                            
                        <li>
                            <a href="?go=lalla">
                                2
                            </a>
                            <div class="fundo">                         
                                2
                            </div>            
                        </li>
                        
                                            
                        <li>
                            <a href="?go=lalla">
                                3
                            </a>
                            <div class="fundo">                         
                                3
                            </div>            
                        </li>
                        
                        
                        <li>
                            <a href="?go=lalla">
                                4
                            </a>
                            <div class="fundo">                         
                               4 
                            </div>            
                        </li>
                                            
                    </ul>
                </div>
      <!-- /destaques -->         
        
                
            <div id="conteudo2">
            	<a id="Anchor" name="Anchor"></a>
            <?
            
            $ir = $_GET['go'];
            $ext = (isset($_GET['ext']));
                if (empty($ext)){ 
                    $ext="php";
                }
                if (empty($ir)){ 
                    $ir = "home.php"; 
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
            ?>
            
            </div>
            
            
        </div>
            
            
        </td>
      </tr>
    </table>


	<div class="footer">
    	<p>Apoio: _____________________________________
        Pontos de venda: ___________________________________</p>
        <small>Conven&ccedil;&atilde;o de animes Otaku Sekai &copy;</small>
    </div>
        
</div>    
    
</body>
</html>