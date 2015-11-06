
function osatu(){
 var dago=false;
 var xmlDoc = document.getElementById('datuak').contentDocument;
 var kor = document.getElementById('email').value;
 var erabiltzaileakZer=xmlDoc.getElementsByTagName('erabiltzailea');
 
 var izenZer=xmlDoc.getElementsByTagName('izena');
 var abizen1Zer=xmlDoc.getElementsByTagName('abizena1');
 var abizen2Zer=xmlDoc.getElementsByTagName('abizena2');
 var tfnoZer=xmlDoc.getElementsByTagName('telefonoa');

y = xmlDoc.documentElement.childNodes;

for(i = 0; i < y.length; i++) {
 if (kor==y[i].childNodes[0].childNodes[0].nodeValue){
	document.getElementById('name').value=y[i].childNodes[1].childNodes[0].nodeValue;
	document.getElementById('surname1').value=y[i].childNodes[2].childNodes[0].nodeValue;
	document.getElementById('surname2').value=y[i].childNodes[3].childNodes[0].nodeValue;
	document.getElementById('telephone').value=y[i].childNodes[4].childNodes[0].nodeValue;
	
	dago=true;
	break;
	}
	//alert(y[i].childNodes[0].childNodes[0].nodeValue);
 }


 if (!dago){
	document.getElementById('erreg').value = "Eposta hau ez dago UPV/EHUn erregistraturik. Sar ezazu beste bat";
	
 }else{
	 
	document.getElementById('erreg').value = "Erregistratuta";

 }
  alert(document.getElementById('erreg').value );
 document.getElementById('erreg').style.display = 'block' ;
 
}

