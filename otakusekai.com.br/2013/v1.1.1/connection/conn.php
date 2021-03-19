<?php
######## CONEÇÃO COM B.D. ########
$host = "localhost";
$bd_usuario = "root"; // USE O TEU USUÁRIO DE BANCO DE DADOS
$bd_senha = "102030"; // USE A TUA SENHA DO BANCO DE DADOS
$bd_nome = "otakusekai"; // USE O NOME DO TEU BANCO DE DADOS
$tabela = "contas"; // TABELA

//@mysql_connect($host,$bd_usuario,$bd_senha) or die("N&atilde;o foi poss&iacute;vel conectar");
//@mysql_select_db($bd_nome) or die("N&atilde;o foi encontrado o banco de dados");


// Conexão & Protect -- Não mexer 
$cnn=@mysql_connect($host,$bd_usuario,$bd_senha) or die('Erro ao conectar ao sql');
$db=@mysql_select_db($bd_nome,$cnn) or die('Erro ao conectar na database');
include 'anti_inject.php';
include 'sql_protect.php';
/////////////////////////////////

$xa = getenv('REMOTE_ADDR');
$badwords = array(";","'","\"","*","union","del","DEL","insert","update","=","drop","sele","$");
foreach($_POST as $value)
foreach($badwords as $word)
if(substr_count($value, $word) > 0)
die("Security Warning!<br />Forbidden simbols are included, please remove them and try again -> $xa > $value");

?>