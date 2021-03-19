<?php
// intval faz com que seja impossível passar valores siferentes de inteiros.
$largura_nova = intval( $_GET['largura'] );

// Somente exita números muito pequenos. Para este exemplo não quero
if($largura_nova < 100)
	$largura_nova = 100;

// Carregar imagem já existente no servidor
$imagem = imagecreatefromjpeg( $_GET['foto'] );
/* @Parametros
 * "foto.jpg" - Caminho relativo ou absoluto da imagem a ser carregada.
 */

// Obtem a largura_nova da imagem
$largura_original = imagesx( $imagem );
/* @Parametros
 * $imagem - Imagem previamente criada Usei imagecreatefromjpeg
 */

// Obtém a altura da imagem
$altura_original = imagesy( $imagem );
/* @Parametros
 * $imagem - Imagem previamente criada Usei imagecreatefromjpeg
 */

// Calcula a nova altura da imagem 
$altura_nova = intval( ( $altura_original * $largura_nova ) / $largura_original );

// Cria a nova imagem com os tamanhos novos
$nova_imagem = imagecreatetruecolor( $largura_nova, $altura_nova );
/* @Parametros
 * $largura_nova - Largura da nova imagem
 * $altura_nova - Altura da nova imagem
 */

// Cria uma cópia da imagem com os novos tamanhos e 
// passa para a imagem criada com imagecreatetruecolor
imagecopyresampled( $nova_imagem, $imagem, 0, 0, 0, 0, $largura_nova, $altura_nova, $largura_original, $altura_original );
/* @Parametros
 * $nova_imagem - Nova imagem criada com imagecreatetruecolor
 * $imagem - Imagem a ser redimensionada.
 * 0 - Valor X de destino. Usado quando recortar
 * 0 - Valor Y de destino. Usado quando recortar
 * 0 - Valor X da imagem original. Usado quando recortar
 * 0 - Valor Y da imagem original. Usado quando recortar
 * $largura_nova - Nova largura
 * $altura_nova - Nova altura
 * $largura_original - Altura da imagem original
 * $altura_original - Largura da imagem original
 */

// Header informando que é uma imagem JPEG
header( 'Content-type: image/jpeg' );

// eEnvia a imagem para o borwser ou arquivo
imagejpeg( $nova_imagem, NULL, 80 );
/* @Parametros
 * $imagem - Imagem previamente criada Usei imagecreatefromjpeg
 * NULL - O caminho para salvar o arquivo. 
          Se não definido ou NULL, o stream da imagem será mostrado diretamente. 
 * 80 - Qualidade da compresão da imagem.
 */