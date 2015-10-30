
function osatu(){
 var dago=false;
 var xmlDoc = document.getElementById('datuak').contentDocument;
 var korreoa = document.getElementById("email").value;
 var epostenZer=xmlDoc.getElementsByTagName("korreoa");
 var tfnoZer=xmlDoc.getElementsByTagName("tfonoa");
 for (var i = 0; i < epostenZer.length; i++) {
	if (korreoa==epostenZer[i].childNodes[0].nodeValue){
		document.getElementById('tfonoa').value=tfnoZer[i].childNodes[0].nodeValue;
		dago=true;
		break;
	}
 }
 
 if (!dago){
 alert ('Eposta hau ez dago UPV/EHUn erregistraturik. Sar ezazu beste bat');
 }
}
