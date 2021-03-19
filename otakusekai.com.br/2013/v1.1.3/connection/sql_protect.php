<?
//////////////////////////////////
// SQL ANTI - INJECT  . by cray //
// SQL ANTI - INJECT  . by cray // 
// SQL ANTI - INJECT  . by cray // 
// SQL ANTI - INJECT  . by cray // 
////////////////////////////////// 

foreach($_POST as $post)
if(eregi("[^0-9a-zA-Z_@.?<> ]", $post)){
$posted = stripslashes($post);
	die("<script>alert('Você digitou characters indevidos, favor so digitar letras e números.'); 
	location='javascript:history.back()'</script>");
}
foreach($_GET as $get)
if(eregi("[^0-9a-zA-Z_ ]", $get)){
	die("<script>alert('Você digitou characters indevidos, favor so digitar letras e números.'); 
	location='javascript:history.back()'</script>");
} 
foreach($_COOKIE as $cookie)
if(eregi("[^0-9a-zA-Z_]", $cookie)){
	die("<script>alert('Você digitou characters indevidos, favor so digitar letras e números.'); 
	location='javascript:history.back()'</script>");
}
//////////////////////////////////
// SQL ANTI - INJECT  . by cray //
// SQL ANTI - INJECT  . by cray // 
// SQL ANTI - INJECT  . by cray // 
// SQL ANTI - INJECT  . by cray // 
//////////////////////////////////  
?>