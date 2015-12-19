XMLHttpRequestObject = new XMLHttpRequest();


function erabiltzaileakIkusi(){

	XMLHttpRequestObject.onreadystatechange = function(){

		document.getElementById("erakutsiErabiltzaileak").innerHTML="";
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("erakutsiErabiltzaileak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/erabiltzaileakAJAX.php", true);
	XMLHttpRequestObject.send();
}

function erabiltzaileaonartu(posta){
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("erakutsiMezua").innerHTML="";
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("erakutsiMezua").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/erabeditatu.php?POSTA="+posta, true);
	XMLHttpRequestObject.send();
}

function erabiltzaileablokeatu(posta){
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("erakutsiMezua").innerHTML="";
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("erakutsiMezua").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/erabeditatu2.php?POSTA="+posta, true);
	XMLHttpRequestObject.send();
}
