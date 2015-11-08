


 
function x(){

XMLHttpRequestObject.onreadystatechange = function(){
		
		document.getElementById("prioritycase2").innerHTML="";
		document.getElementById("erakutsiGalderak2").innerHTML="";
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("erakutsiGalderak2").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/quizzesGalderak.php", true);
	XMLHttpRequestObject.send();
}
function galderakErakutsi(){
x();
setInterval(x, 5000);
}
