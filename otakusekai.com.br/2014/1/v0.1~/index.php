<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>C.A.O.S. - Conven&ccedil;&atilde;o de Animes Otaku Sekai</title>

	<link rel="shortcut icon" href="favicon.ico" />

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300' rel='stylesheet' type='text/css'>
   
    <meta name="description" content="CAOS - Convencao de Animes Otaku Sekai de Uberaba">
    <meta name="keywords" content="convencao, anime, otaku, desenho">
    
    <link rel="stylesheet" type="text/css" media='all' href="css/styles.css?<?php echo microtime();?>" />

	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" href="css/destaque.css?<?php echo microtime();?>" type="text/css" />
	<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="js/jquery.destaques.js"></script>
    
    <script type="text/javascript">
		$(function() {
			jQuery('#divMenu1').css({ paddingLeft:"30px", fontSize:"70%" });		
			jQuery('#Subdiv_Atr').click(function() {			
				jQuery('#divMenu1').slideToggle();
				jQuery(this).addClass("Subdiv2");				
			});		
			
		});
		
		$(function() {
			jQuery('#divMenu2').css({ paddingLeft:"30px", fontSize:"70%" });	
			jQuery('#Subdiv_Atv').click(function() {
				jQuery('#divMenu2').slideToggle();
				jQuery(this).addClass("Subdiv2");			
			});
			
		});		
	</script>
   
</head>

<body>

<div class="escopo" align="center">

<a href="?"><div class="BannerLogo">&nbsp;</div></a>

  <div class="menu">
        <ul>
            <li><a href="?">In&iacute;cio</a></li>
            <li><a href="?p=Evento">Evento</a></li>
            <li><a href="?p=Programacao">Programa&ccedil;&atilde;o</a></li>
            <li><a href="?p=Local">Local</a></li>
            <li><a href="?p=Ingressos">Ingressos</a></li>
            <li><a href="?p=Caravanas">Caravanas</a></li>
            <li><a href="?p=Contato">Contato</a></li>
        </ul>
    </div>


        <div class="Pikachu">&nbsp;</div>

        
		<div class="Pokebola_bola">&nbsp;</div>



  <!-- MENU -->
            <a id="menuv"></a>
            
<div class="menuv">
            
            <ul>
            
            <li id="First"></li> <br clear="all">
            
           
            
            <li class="Subdiv" id="Subdiv_Atr">Atra&ccedil;&otilde;es</li>
            
         
         <div id="divMenu1">
         
                <li><a href="?p=Atracoes&acao=Atracoes%2FIsabeldeSaeMarcioAraujo">Palestra com Isabel de S&aacute; e M&aacute;rcio Ara&uacute;jo</a></li>
                <li><a href="?p=Atracoes&acao=Atracoes%2FBandas">Bandas</a></li>
                <li><a href="?p=Atracoes&acao=Atracoes%2FApresentacaoArtesMarciais">Apresenta&ccedil;&atilde;o de Artes Marciais</a></li>
                <li><a href="?p=Atracoes&acao=Atracoes%2FConcursoCosplay">Concurso de Cosplay</a></li>
                <li><a href="?p=Atracoes&acao=Atracoes%2FAnimequiz">Animequiz</a></li>
                <li><a href="?p=Atracoes&acao=Atracoes%2FJapanGameShow">Japan Game Show</a></li> 
                <li><a href="?p=Atracoes&acao=Atracoes%2FZombiePark">Zombie Park</a></li>
                <li><a href="?p=Atracoes&acao=Atracoes%2FCompletePokedex">Complete a Pokedéx!</a></li> 
				
          </div> 
                
			
                        
            <li class="Subdiv" id="Subdiv_Atv">Atividades</li>
            
        <div id="divMenu2">
        
                <li><a href="?p=Atividades&acao=Atividades%2FSalaNimpo">Sala Nimpo</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FMaidCafe">Maid Caf&eacute;</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FAnimeoke">Animeok&ecirc;</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FTemplodosGames">Templo dos Games</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FFanArea">FanArea</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FTaverna">Taverna</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FBatalhaCampal">Batalha Campal</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FJustDance">Just Dance</a></li>                
                <li><a href="?p=Atividades&acao=Atividades%2FCardGames">Card Games</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FExibicaodeAnimes">Exibi&ccedil;&atilde;o de Animes</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FCosplayHelp">Cosplay Help </a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FGuardaVolumes"> Guarda Volumes</a></li>
                <li><a href="?p=Atividades&acao=Atividades%2FEstandesProdutos">Estandes de Produtos</a></li> 
                <li><a href="?p=Atividades&acao=Atividades%2FAlimentacao">Alimenta&ccedil;&atilde;o</a></li>
            </div>
                
            </ul>        
        
            </div>
            
            <!-- MENU -->                      

            
    <div class="conteudo">
    
      <div id="conteudo2">
      
      
    <!-- destaques -->
    
		<? include "blocoDestaque.php" ;?>
            
    <!-- /destaques -->
    
    
             <br clear="all">
            
            	<div class="divisaoConteudo">
                	<div class="Pokebola_bola"></div>
                </div>
            
             <br clear="all">
             
             
                 
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td valign="top">
                    
      <div>
        <?php
            
            $ir = $_GET['p'];
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
                    
                    </td>
                    <td width="270" align="center" valign="top">
                                <div class="divContLateral" align="center">
                                    <img src="imagens/210x140-1.jpg" width="210" height="140" />
                                    <img src="imagens/210x140-2.jpg" width="210" height="140" />
                                    <img src="imagens/210x140-3.jpg" width="210" height="140" />
                                    <img src="imagens/210x140-4.jpg" width="210" height="140" />
                                    <img src="imagens/210x140-5.jpg" width="210" height="140" />
                                    <img src="imagens/210x140-6.jpg" width="210" height="140" />
                                    <img src="imagens/210x140-7.jpg" width="210" height="140" />                        
                                </div>    
                    </td>
          </tr>
        </table>
      
      </div>
            
    </div>

        <div class="Charizard">&nbsp;</div>

	<? include "footer.php"; ?>

</div>           
    
</body>
</html>	