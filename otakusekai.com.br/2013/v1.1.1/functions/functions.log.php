<?php

######################################## INICIO FUNCTIONS LOG ########################################

function criarLogSecurity($digitou, $pagina)
{

	$data = date("d.m.Y"); // Pega a Data para grava no Log
	$hora = date("H:i:s"); // Pega a Hora para grava no Log
	$ip = $_SERVER['REMOTE_ADDR'];
	$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);

	$arquivo = "SeguracaPainelAdmin.log"; // nome do arquivo de log
		if(!file_exists("$arquivo")){
		echo "O arquivo SeguracaPainelAdmin.log n&atilde;o foi encontrado ou n&atilde;o esta com suas permiss&otilde;s em 777, crie-o ou mude suas permiss&otilde;es";
		}	
	$fp_painel = fopen($arquivo, "a");

	$log_painel = "Página: $pagina \r\n";
	$log_painel.= "Data: $data \r\n";
	$log_painel.= "Hora: $hora \r\n";	
	$log_painel.= "IP: $ip \r\n";
	$log_painel.= "IP Reverso: $host \r\n";
	$log_painel.= "Ação: $digitou \r\n";
	$log_painel.= "\r\n\r\n";
	$log_painel.= "----------------------------------------------------------------------------------------\r\n\r\n";

	fwrite($fp_painel, $log_painel);
	fclose($fp_painel);

}

######################################## FIM FUNCTIONS LOG ########################################

?>