<?php

##################################################
	include_once "functions.log.php";			 #
##################################################
												 #
##################################################
if($_GET['sair'] == "Confirmado") {
	//$desconectado = '0';
	//$query_dados = @mysql_query("UPDATE $tabela SET CD_STATUS = '$desconectado' WHERE DS_USUARIO='".$usuario."'") or die("erro: sair qdados");	
	session_destroy();
	echo "<script> location='?'</script>";
}
##################################################
												 #
################ INICIO FUNCAO BT ################
function bt($link,$txt)							 #
{												 #
	echo "<a href=".$link.">";					 #
		echo "<div class=\"button\">";			 #
			echo "".$txt."";		 			 #
		echo "</div>";							 #
	echo "</a>";								 #
}												 #
################# FIM FUNCAO BT ##################
												 #
##################################################
function slide($div1,$div2)
{
	echo"
		<script type='text/javascript'>
				$(function() {
					jQuery('#".$div1."').show();
					jQuery('#".$div2."').click(function() {
						jQuery('#".$div1."').slideToggle();
					});
				});
		</script>
	";
}
##################################################
												 #
##################################################
function slide2($div1,$div2)
{
	echo"
		<script type='text/javascript'>
				$(function() {
					jQuery('#".$div2."').hide();
					jQuery('#".$div1."').click(function() {
						jQuery('#".$div1."').hide();
						jQuery('#".$div2."').show();
					});
				});
		</script>
	";
}
##################################################
												 #
##################################################
function slide_hide($div1,$div2,$div3)
{
	echo"
		<script type='text/javascript'>
				$(function() {
					jQuery('#".$div1."').hide();
					jQuery('#".$div2."').click(function() {
						jQuery('#".$div1."').fadeIn();
					});
					jQuery('#".$div3."').click(function() {
						jQuery('#".$div2."').show();												
						jQuery('#".$div1."').fadeOut();
					});					
				});
		</script>
	";
}
##################################################
												 #
##################################################
function Barras($NDiv1,$NDiv2,$NDiv3)
{
	echo "
<script type='text/javascript'>	
		$(function() {
			jQuery('#".$NDiv2."').hide();
			jQuery('#".$NDiv1."').click(function() {
				jQuery('#".$NDiv3."').hide('fast');
				jQuery('#".$NDiv2."').show('fast');
			});
		
			jQuery('#".$NDiv2."').mouseout(function(){
				jQuery('#".$NDiv3."').show('slow');
				jQuery('#".$NDiv2."').hide('slow');
								
			});
		});
</script>			
	";
}
##################################################


?>