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

  <a href="?"><div class="topo"></div></a>
	
  <div class="menu">
        <ul>
            <li><a href="?">Home</a></li>
            <li><a href="?go=Evento">Evento</a></li>
            <li><a href="?go=Programacao">Programa&ccedil;&atilde;o</a></li>
            <li><a href="?go=Local">Local</a></li>
            <li><a href="?go=Ingressos">Ingressos</a></li>
            <li><a href="?go=Caravanas">Caravanas</a></li>
            <li><a href="?go=Contato">Contato</a></li>
        </ul>
    </div>

    
    <!-- destaques -->
  <div id="blocoDestaques" align="left"> <a class="faixa" href="#" title="">
        <!-- -->
        </a>
        <ul>
          <li> <a href="?go=Atracoes&acao=Atracoes%2FPalestraDubladores">
            <div id="img"> <img src="Fotos/fabio_lucindo_e_yuri.jpg" width="590" height="350" id="i" /> </div>
            
          <div class="fundo">
              <p> <strong>Palestra com Yuri Chesman e F&aacute;bio Lucindo</strong></p>
              <p> Os dubladores de Gon e Killua e outros v&aacute;rios personagens incr&iacute;veis estar&atilde;o juntos em um bate-papo com a galera falando sobre dublagem, sobre suas carreiras, tirando d&uacute;vidas e mostrando um pouco de seu trabalho.</p>
            </div>
            </a>
          </li>
          <li> <a href="?go=Atracoes&acao=Atracoes%2FRicardoCruz">
            <div id="img"> <img src="Fotos/ricardo-cruz.jpg" width="525" height="350" id="i" /> </div>
            
          <div class="fundo">
              <p> <strong>Workshop com Ricardo Cruz </strong></p>
              <p> Cantor dos temas de abertura brasileiro de Hunter X Hunter e Os Cavaleiros do Zod&iacute;aco Hades Inferno e atual vocal da JAM Project al&eacute;m de nos contar sobre seu trabalho, far&aacute; um show inesquec&iacute;vel na C.A.O.S. 2013</p>
            </div>
            </a>
          </li>
          <li> <a href="?go=Atracoes&acao=Atracoes%2FRicardoJunior">
            <div id="img"> <img src="Fotos/ricardo-junior2.jpg" name="i" width="357" height="350" id="i" /> </div>
            
          <div class="fundo">
              <p> <strong>Show de Ricardo Junior </strong></p>
              <p> Este grande compositor/Int&eacute;rprete de temas de animes, traz um show mostrando suas v&aacute;rias vers&otilde;es em portugu&ecirc;s de aberturas e encerramentos de animes que n&atilde;o possuem temas em formato oficial no nosso idioma</p>
            </div>
            </a>
          </li>
          <li> <a href="?go=Atracoes&acao=Atracoes%2FCanalNostalgia">
            <div id="img"> <img src="Fotos/nostalgia.jpg" width="328" height="350" id="i" /> </div>
            
          <div class="fundo">
              <p> <strong>Canal Nost&aacute;lgia</strong></p>
              <p> Palestra com Felipe Castanhari do Canal Nostalgia fazendo um especial com tudo o que rolou na nossa inf&acirc;ncia e marcaram &eacute;poca</p>
            </div>
            </a>
          </li>
        </ul>
  </div>
      <!-- /destaques -->
      
    
  <!-- MENU -->
            
            <div class="menuv">
            
            <ul>
            
            <li id="first">Atra&ccedil;&otilde;es</li>
        
                <li><a href="?go=Atracoes&acao=Atracoes%2FPalestraDubladores">Palestra com Dubladores</a></li>
                    <li><a href="?go=Atracoes&acao=Atracoes%2FRicardoCruz">Ricardo Cruz</a></li>
                    <li><a href="?go=Atracoes&acao=Atracoes%2FRicardoJunior">Ricardo Junior</a></li>                    
                <li><a href="?go=Atracoes&acao=Atracoes%2FBandas">Bandas</a></li>
                <li><a href="?go=Atracoes&acao=Atracoes%2FCanalNostalgia">Canal Nostalgia</a></li>
                <li><a href="?go=Atracoes&acao=Atracoes%2FGrupoDanca">Grupo de Dan&ccedil;a</a></li>
                <li><a href="?go=Atracoes&acao=Atracoes%2FApresentacaoArtesMarciais">Apresenta&ccedil;&atilde;o de Artes Marciais</a></li>
                <li><a href="?go=Atracoes&acao=Atracoes%2FConcursoCosplay">Concurso de Cosplay</a></li>
                <li><a href="?go=Atracoes&acao=Atracoes%2FAnimequiz">Animequiz</a></li>
                <li><a href="?go=Atracoes&acao=Atracoes%2FRadioAsiaMix">R&aacute;dio AsiaMix</a></li> 
                <li><a href="?go=Atracoes&acao=Atracoes%2FChooseYouWay">Choose you way</a></li>
                <li><a href="?go=Atracoes&acao=Atracoes%2FExameHunter">Exame Hunter</a></li>
            
            <li id="first">Atividades</li>
        
                <li><a href="?go=Atividades&acao=Atividades%2FSalaNimpo">Sala Nimpo</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FMaidCafe">Maid Caf&eacute;</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FAnimeoke">Animeok&ecirc;</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FCineAnime">Cine Anime</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FCampGames">Campeonato de Games</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FNintendoWorld">Nintendo World</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FCampLOL">Camponato de LOL</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FCampDOTA2">Campeonato de DOTA 2</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FFanArea">FanArea</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FTaverna">Taverna</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FBatalhaCampal">Batalha Campal</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FKinnectParty">Kinnect Party</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FCardGames">Card Games</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FExibicaoAnimes">Exibi&ccedil;&atilde;o de Animes</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FPoraoNerd">Por&atilde;o Nerd</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FHelpCosplay">Cosplay Help </a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FGuardaVolumes"> Guarda Volumes</a></li>
                <li><a href="?go=Atividades&acao=Atividades%2FEstudioFotos">Est&uacute;dio de Fotos</a></li>
                <? /*<li><a href="?go=Atividades&acao=EstandeLUG">Estande LEVEL UP!</a></li> */ ?>
                <li><a href="?go=Atividades&acao=Atividades%2FEstandesProdutos">Estandes de Produtos</a></li> 
                <li><a href="?go=Atividades&acao=Atividades%2FAlimentacao">Alimenta&ccedil;&atilde;o</a></li>
            </ul>        
        
            </div>
            
            <!-- MENU -->                      

             
            
    <div class="conteudo">
    

      <div id="conteudo2">
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



  <div class="footer">
    	<p>Apoio: _____________________________________
        Pontos de venda: ___________________________________</p>
        <small>Conven&ccedil;&atilde;o de animes Otaku Sekai &copy;</small>
    </div>
        
</div>    
    
</body>
</html>