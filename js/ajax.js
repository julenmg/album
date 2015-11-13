XMLHttpRequestObject = new XMLHttpRequest();

function galderakIkusi(){
	XMLHttpRequestObject.onreadystatechange = function(){

		document.getElementById("erakutsiGalderak").innerHTML="";
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("erakutsiGalderak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/quizzesAJAX.php", true);
	XMLHttpRequestObject.send();
}

function galderaSortu(galdera,erantzuna,zailtasuna){
	if(/^\s*$/.test(galdera) || /^\s*$/.test(erantzuna)){
		alert("Galdera edo erantzuna hutsik");
}else{
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("erakutsiGalderak").innerHTML="";
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("erakutsiGalderak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/insertquestionAJAX.php?GALDERA="+galdera+"&ERANTZUNA="+erantzuna+"&ZAILTASUNA="+zailtasuna, true);
	XMLHttpRequestObject.send();
}
}

function galderaEditatu(id,galdera,erantzuna,zailtasuna){
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("erakutsiGalderak").innerHTML="";
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("erakutsiGalderak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/editquestionAJAX.php?GALDERA_ID="+id+"&GALDERA="+galdera+"&ERANTZUNA="+erantzuna+"&ZAILTASUNA="+zailtasuna, true);
	XMLHttpRequestObject.send();
}

//Galderak erakusteko bi funtzio
function x(){

XMLHttpRequestObject.onreadystatechange = function(){

		document.getElementById("gald").innerHTML="";
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("gald").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/quizzesGalderak.php", true);
	XMLHttpRequestObject.send();
}
function galderakErakutsi(){
x();
setInterval(x, 5000);
}

//Sartutako eposta ea matrikulatua dagoen konprobatu
function epostaKonprobatu(eposta){
	XMLHttpRequestObject.onreadystatechange = function(){
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("epostamezua").innerHTML=XMLHttpRequestObject.responseText;
			//botoiagaitu();
		}
	}
	XMLHttpRequestObject.open("GET","./php/epostaKonprobatuAJAX.php?EPOSTA="+eposta, true);
	XMLHttpRequestObject.send();
}	

//Sartutako pasahitza ea baliozkoa den
function pasahitzaKonprobatu(pasashitza){
	XMLHttpRequestObject.onreadystatechange = function(){
		
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("passmezua").innerHTML=XMLHttpRequestObject.responseText;
			//botoiagaitu();
		}
	}
	XMLHttpRequestObject.open("GET","./php/pasahitzaKonprobatuAJAX.php?PASAHITZA="+pasashitza, true);
	XMLHttpRequestObject.send();
}

function botoiagaitu(){

	var botoia = document.getElementById("submitbtn");
	var pasaerantzun = document.getElementById("passerantzuna");
	var epostaerantzun = document.getElementById("epostaerantzuna");
}
