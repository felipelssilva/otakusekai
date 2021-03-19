		<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

       <style type="text/css">
		   .gallery ul li {
				display: inline;
				padding:5px;
				margin:5px;
		   }
	   </style>

<h1>Galeria de Fotos (CAOS - SPECIAL EDITION 2014)</h1>

<p>&nbsp;</p>

<h4>Preparação para o evento</h4>

<div id="NoticiasConteudo">
<div class="gallery clearfix">
			<ul>
            
				<?php
				$i1 = "0";
				while($i1 <= 21){
					$i1++;
					$nomefoto1 = "preparacaoevento (".$i1.").jpg";
	                echo '<li><a href="Fotos/galeria/preparacao_evento/'.$nomefoto1.'" rel="prettyPhoto[gallery1]" title=""><img src="thumb.php?foto=Fotos/galeria/preparacao_evento/'.$nomefoto1.'&largura=100" width="60" height="60" alt="" /></a></li>';					
				}
				?>
                                          
			</ul>
            </div>
</div>            

<h4>No Estúdio</h4>

<div id="NoticiasConteudo">
<div class="gallery clearfix">
			<ul>
				<?php
				$i2 = "0";				
				while($i2 <= 91){
					$i2++;
					$nomefoto2 = "estudio (".$i2.").jpg";
	                echo '<li><a href="Fotos/galeria/estudio/'.$nomefoto2.'" rel="prettyPhoto[gallery2]" title=""><img src="thumb.php?foto=Fotos/galeria/estudio/'.$nomefoto2.'&largura=100" width="60" height="60" alt="" /></a></li>';
				}
				?>
                
              
			</ul>
            </div>

            <h3>EM BREVE MAIS FOTOS</h3>            
</div>            

<h4>Evento</h4>

<div id="NoticiasConteudo">
<div class="gallery clearfix">
			<ul>               
				<?php
				$i3 = "0";				
				while($i3 <= 6){
					$i3++;
					$nomefoto3 = "evento (".$i3.").jpg";
	                echo '<li><a href="Fotos/galeria/evento/'.$nomefoto3.'" rel="prettyPhoto[gallery3]" title=""><img src="thumb.php?foto=Fotos/galeria/evento/'.$nomefoto3.'&largura=100" width="60" height="60" alt="" /></a></li>';
				}
				?>
              
			</ul>
            </div>
            
            <h3>EM BREVE MAIS FOTOS</h3>
</div>            


<script type="text/javascript" charset="utf-8">
	$(document).ready(function(){
		$("area[rel^='prettyPhoto']").prettyPhoto();
		
		$(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',slideshow:3000, autoplay_slideshow: true});
		$(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:1000, hideflash: true});
		
	});
</script>
