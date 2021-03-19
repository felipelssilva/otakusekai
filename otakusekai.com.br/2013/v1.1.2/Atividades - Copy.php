<?php

if($_GET['acao'] == 'SalaNimpo'){
	
	include "Atividades/SalaNimpo.php";
	
}

elseif($_GET['acao'] == 'MaidCafe'){
	
	include "Atividades/MaidCafe.php";
	
}


elseif($_GET['acao'] == 'Animeoke'){
	
	include "Atividades/Animeoke.php";
	
}


elseif($_GET['acao'] == 'CampGames'){
	
	include "Atividades/CampGames.php";
	
}


elseif($_GET['acao'] == 'Taverna'){
	
	include "Atividades/Taverna.php";
	
}


elseif($_GET['acao'] == 'CineAnime'){
	
	include "Atividades/CineAnime.php";
	
}


elseif($_GET['acao'] == 'HelpCosplay'){
	
	include "Atividades/HelpCosplay.php";
	
}

elseif($_GET['acao'] == 'GuardaVolumes'){
	
	include "Atividades/GuardaVolumes.php";
	
}

elseif($_GET['acao'] == 'EstandesProdutos'){
	
	include "Atividades/EstandesProdutos.php";
	
}

elseif($_GET['acao'] == 'Alimentacao'){
	
	include "Atividades/Alimentacao.php";
	
}


elseif($_GET['acao'] == 'KinnectParty'){
	
	include "Atividades/KinnectParty.php";
	
}

elseif($_GET['acao'] == 'PoraoNerd'){
	
	include "Atividades/PoraoNerd.php";
	
}

else { include "erropagina.php"; }