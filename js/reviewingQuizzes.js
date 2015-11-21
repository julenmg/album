XMLHttpRequestObject = new XMLHttpRequest();

function osatu(galderaId){
		
	var galdera = document.getElementById('question');
	var erantzuna = document.getElementById('answer');
	var zailtasuna = document.getElementById('difficult_level');
	XMLHttpRequestObject.onreadystatechange = function(){
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			var string = XMLHttpRequestObject.responseText;
			var array=string.split(";");
			galdera.value = array[0];
			erantzuna.value = array[1];
			zailtasuna.value = array[2];
		}
	}
	XMLHttpRequestObject.open("GET","./php/reviewingQuizzesAJAX.php?ID="+galderaId, true);
	XMLHttpRequestObject.send();
 
}


function galderakIkusi(){

	XMLHttpRequestObject.onreadystatechange = function(){

		document.getElementById("erakutsiGalderak").innerHTML="";
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("erakutsiGalderak").innerHTML=XMLHttpRequestObject.responseText;
		}
	}
	XMLHttpRequestObject.open("GET","./php/quizzesAJAX2.php", true);
	XMLHttpRequestObject.send();
}

function editatzekoPrestatu(){
	var galderaId = document.getElementById('question_id');
	var galdera = document.getElementById('question');
	var erantzuna = document.getElementById('answer');
	var zailtasuna = document.getElementById('difficult_level');
	var gordeBotoia = document.getElementById('savebtn');
	if(galderaId.value == "")
			alert("Id-bat sartu");
	else{
		
	galdera.style.background = "#fff url('./stylesPWS/images/question.png') 5px 4px no-repeat";
	erantzuna.style.background = "#fff url('./stylesPWS/images/answer.png') 5px 4px no-repeat";
	zailtasuna.style.background = "#fff url('./stylesPWS/images/difficult_level.png') 5px 4px no-repeat";
	galdera.disabled = false;
	erantzuna.disabled = false;
	zailtasuna.disabled = false;
	gordeBotoia.style.display = "block";
	}

}

function galderaEditatu(id,galdera,erantzuna,zailtasuna){
	XMLHttpRequestObject.onreadystatechange = function(){
		document.getElementById("erakutsiMezua").innerHTML="";
		//alert(XMLHttpRequestObject.readyState);
		if ((XMLHttpRequestObject.readyState==4)&&(XMLHttpRequestObject.status==200 )){
			document.getElementById("erakutsiMezua").innerHTML=XMLHttpRequestObject.responseText;
			gordeOndoren();
		}
	}
	XMLHttpRequestObject.open("GET","./php/editquestionAJAX.php?GALDERA_ID="+id+"&GALDERA="+galdera+"&ERANTZUNA="+erantzuna+"&ZAILTASUNA="+zailtasuna, true);
	XMLHttpRequestObject.send();
}

function gordeOndoren(){
		var galdera = document.getElementById('question');
	var erantzuna = document.getElementById('answer');
	var zailtasuna = document.getElementById('difficult_level');
	var gordeBotoia = document.getElementById('savebtn');
	galdera.style.background = "#D3D3D3 url('./stylesPWS/images/question.png') 5px 4px no-repeat";
	erantzuna.style.background = "#D3D3D3 url('./stylesPWS/images/answer.png') 5px 4px no-repeat";
	zailtasuna.style.background = "#D3D3D3 url('./stylesPWS/images/difficult_level.png') 5px 4px no-repeat";
	galdera.disabled = true;
	erantzuna.disabled = true;
	zailtasuna.disabled = true;
	gordeBotoia.style.display = "none";
	galderakIkusi();
}
