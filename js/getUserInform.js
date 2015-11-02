
function osatu(){
 var dago=false;
 var xmlDoc = document.getElementById('datuak').contentDocument;
 var kor = document.getElementById('email').value;
 var erabiltzaileakZer=xmlDoc.getElementsByTagName('erabiltzaileak');
 
 var izenZer=xmlDoc.getElementsByTagName('izena');
 var abizen1Zer=xmlDoc.getElementsByTagName('abizena1');
 var abizen2Zer=xmlDoc.getElementsByTagName('abizena2');
 var tfnoZer=xmlDoc.getElementsByTagName('telefonoa');

x = xmlDoc.documentElement;
y = xmlDoc.documentElement.childNodes;

var kor2 = y[1].childNodes[0].childNodes[0].nodeValue;
//alert(y[1].childNodes[0].childNodes[0].nodeValue);

for(i = 1; i < y.length; i++) {
 if (kor==kor2){
	alert(y[i].childNodes[1].childNodes[0].nodeValue);
	alert(y[i].childNodes[2].childNodes[0].nodeValue);
	alert(y[i].childNodes[3].childNodes[0].nodeValue);
	alert(y[i].childNodes[4].childNodes[0].nodeValue);
	document.getElementByName('IZENA').value=y[i].childNodes[1].childNodes[0].nodeValue;
	document.getElementByName('ABIZEN1').value=y[i].childNodes[2].childNodes[0].nodeValue;
	document.getElementByName('ABIZEN2').value=y[i].childNodes[3].childNodes[0].nodeValue;
	document.getElementByName('TELEFONOA').value=y[i].childNodes[4].childNodes[0].nodeValue;
	
	dago=true;
	break;
	}
	kor2 = y[i].childNodes[0].childNodes[0].nodeValue;
	//alert(y[i].childNodes[0].childNodes[0].nodeValue);
 }



//alert( "Nodename: " + y[i].nodeName + " (value: " + y[i].childNodes[0].nodeValue + ")<br>")for(z = 0; z < y[i].childNodes.length; z++) alert( "Nodename: " + y[i].childNodes[0].nodeName + " (value: " + y[i].childNodes[0].childNodes[0].nodeValue + ")<br>");
//alert ("Nodename: " + z[0].nodeValue);

/*
 var erabiltzaileaZer=erabiltzaileakZer.childNodes[0];

 var epostenZer=erabiltzaileaZer.childNodes[0];

 if (kor==epostenZer) {     // Internet Explorer
                alert ("An element exists with myAnchor ID (or name).");
            }
            else {      // Firefox, Opera, Google Chrome and Safari
                alert ("No element exists with myAnchor ID (or name).");
            }
 for (var i = 0; i < var erabiltzaileaZer.length; i++) {
	
 if (kor==){
	document.getElementByName('IZENA').value=izenZer[i].childNodes[0].nodeValue;
	document.getElementByName('ABIZEN1').value=abizen1Zer[i].childNodes[0].nodeValue;
	document.getElementByName('ABIZEN2').value=abizen2Zer[i].childNodes[0].nodeValue;
	document.getElementByName('TELEFONOA').value=tfnoZer[i].childNodes[0].nodeValue;

	dago=true;
	break;
	}
 }*/
document.getElementById('erreg').style.display = 'block' ;
 if (!dago){
	document.getElementById('erreg').value = "Eposta hau ez dago UPV/EHUn erregistraturik. Sar ezazu beste bat";
 }else{
	document.getElementById('erreg').value = "Erregistratuta";

 }
 
}

