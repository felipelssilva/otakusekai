function ConfirmaSair() {
	var answer = confirm("Dezeja sair realmente?")
	if (answer){
		window.location = "?sair=confirmado";
	}
}
 
 
function somente_numero(campo){
	var digits="0123456789"
	var campo_temp 
	for (var i=0;i<campo.value.length;i++){
	  campo_temp=campo.value.substring(i,i+1)	
	  if (digits.indexOf(campo_temp)==-1){
			campo.value = campo.value.substring(0,i);
			break;
	   }
	}
}





/*
Live Date Script- 
© Dynamic Drive (www.dynamicdrive.com)
For full source code, installation instructions, 100's more DHTML scripts, and Terms Of Use,
visit http://www.dynamicdrive.com
*/


var dayarray=new Array("Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado")
var montharray=new Array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro")

function getthedate(){
var mydate=new Date()
var year=mydate.getYear()
if (year < 1000)
year+=1900
var day=mydate.getDay()
var month=mydate.getMonth()
var daym=mydate.getDate()
if (daym<10)
daym="0"+daym
var hours=mydate.getHours()
var minutes=mydate.getMinutes()
var seconds=mydate.getSeconds()
var dn="AM"
if (hours>=24)
dn="PM"
if (hours>24){
hours=hours-24
}
if (hours==0)
hours=24
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
//change font size here
var cdate="<b>"+dayarray[day]+", "+daym+" "+montharray[month]+", "+year+" - "+hours+":"+minutes+":"+seconds+" "+dn+"</b>"
if (document.all)
document.all.clock.innerHTML=cdate
else if (document.getElementById)
document.getElementById("clock").innerHTML=cdate
else
document.write(cdate)
}
if (!document.all&&!document.getElementById)
getthedate()
function goforit(){
if (document.all||document.getElementById)
setInterval("getthedate()",1000)
}







<!--//--><![CDATA[//><!--
function Carregar(toLoad,diivi){
var div = document.getElementById(diivi);
div.innerHTML = "<br/><img src='loading.gif'><br><font color='#fff'>Carregando Aguarde...</font>";
var ajax = new Ajax();
ajax.set_receive_handler(
function(c) {
div.innerHTML = c;
}
);
ajax.send(toLoad);
}
function alttops(asd){
Carregar('ranking.php?' +
      'tipo=' + document.getElementById('tipo').value +
      '&ordem=' + document.getElementById('ordem').value +
      '&quantidade=' + document.getElementById('quantidade').value +
      '&classe=' + document.getElementById('classe').value +
      '&ordena=' + document.getElementById('ordena').value, asd);
	  }

function AjudasMP() {
if (document.all)
var xMax = screen.width, yMax = screen.height;
else
if (document.layers)
var xMax = window.outerWidth, yMax = window.outerHeight;
else
var xMax = 200, yMax=200;
var xOffset = (xMax - 200)/2, yOffset = (yMax - 200)/2;
window.open('Ajudas.php?tipo=Energia','windowbis',
'width=500,height=600,screenX='+xOffset+',screenY='+yOffset+',top='+yOffset+',left='+xOffset+'');
}
function noticia(id) {
if (document.all)
var xMax = screen.width, yMax = screen.height;
else
if (document.layers)
var xMax = window.outerWidth, yMax = window.outerHeight;
else
var xMax = 200, yMax=200;
var xOffset = (xMax - 200)/2, yOffset = (yMax - 200)/2;
window.open('noticia.php?noticia='+id,'windowbis',
'width=500,height=300,screenX='+xOffset+',screenY='+yOffset+',top='+yOffset+',left='+xOffset+'');
}