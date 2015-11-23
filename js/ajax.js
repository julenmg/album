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
function pasahitzaKonprobatu(pasashitza,tiketa){
	XMLHttpRequestObject.onreadystatechange = function(){
		
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("passmezua").innerHTML=XMLHttpRequestObject.responseText;
			//botoiagaitu();
		}
	}
	XMLHttpRequestObject.open("GET","./php/pasahitzaKonprobatuAJAX.php?PASAHITZA="+pasashitza+"&TIKETA="+tiketa, true);
	XMLHttpRequestObject.send();
}

function konprobatu(){

	document.getElementById("passmezua").innerHTML="";
	var pasaerantzun = document.getElementById("password");
	var epostaerantzun = document.getElementById("email");
	var tiketa = document.getElementById("tiketa");
	
	if(pasaerantzun.value=="" || epostaerantzun.value=="" || tiketa.value==""){
		document.getElementById("passmezua").innerHTML="Bete datuak!";
	}else{
		pasahitzaKonprobatu(pasaerantzun.value,tiketa.value);
	}
}

function pasahitzaBalidatu(pasahitza,pasahitza1){
	document.getElementById("passmezua").innerHTML="";
	if(pasahitza == pasahitza1){
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("passmezua").innerHTML=XMLHttpRequestObject.responseText;
			//botoiagaitu();
		}
	}
	XMLHttpRequestObject.open("GET","./php/pasahitzaBalidatuAJAX.php?PASAHITZA="+pasahitza+"&PASAHITZA1="+pasahitza1, true);
	XMLHttpRequestObject.send();
	}else{
		document.getElementById("passmezua").innerHTML="<h2 style='color:red;font-size:1.6em;'> Ez dira berdinak!</h2>";
}
}

function pasahitzaAldatu(pasahitza){
	document.getElementById("passmezua2").innerHTML="";
	XMLHttpRequestObject = new XMLHttpRequest();
	XMLHttpRequestObject.onreadystatechange = function(){
		
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("passmezua2").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/pasahitzaAldatuAJAX.php?PASAHITZA="+pasahitza, true);
	XMLHttpRequestObject.send();
}



