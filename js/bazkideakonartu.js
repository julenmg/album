XMLHttpRequestObject = new XMLHttpRequest();

function osatu(bazkidePosta){
		
	var izena = document.getElementById('name');
	var abizenak = document.getElementById('surname');
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			var string = XMLHttpRequestObject.responseText;
			var array=string.split(";");
			izena.value = array[0];
			abizenak.value = array[1];
		}
	}
	XMLHttpRequestObject.open("GET","./php/erabiltzaileakAJAX2.php?POSTA="+bazkidePosta, true);
	XMLHttpRequestObject.send();
 
}


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
