//html4ko inputak balidatzen
function balidatzen(){
	var objektua=document.getElementById("izen");
	var reHutsunea = new RegExp(" ");
	
	if(objektua.value == ""){
		alert("izena falta da");
		return false;
	}
		
	objektua=document.getElementById("abizen");
	if(objektua.value == "" || !reHutsunea.test(objektua.value)){
		alert("abizenak!!");
		return false;
	}
		
	objektua = document.getElementById("posta");
	exp=new RegExp("\^[a-z]*[0-9]{3}\@ikasle\.ehu(\.es|\.eus)$");
	if(!exp.test(objektua.value)){
		 objektua.select();
		return false;
	}
		
	objektua=document.getElementById("pass");
	if(objektua.value.length < 6 || reHutsunea.test(objektua.value)){
		alert("Ondo sartu pasahitza");
		return false;
	}
		
	objektua=document.getElementById("tel");
	if(objektua.value.length <= 8  ||  (/^([0-9])*$/.test(objektua.value) == false)){
		alert("Ondo sartu telefonoa");
		return false;
	}
		
	ikusBalioak();
	return true;
}


//Dena ballidatuta dagoenean alert bat agertuko da datu guztiak erakutsiz
function ikusBalioak(){
	var sAux="";
	var frm=document.getElementById("erregistro");
	for(i=0;i<frm.elements.length;i++){
		if(frm.elements[i].name == "espezialitatea"){
			if(frm.elements[i].checked){
			  sAux +="IZENA: " + frm.elements[i].name+"";
		      sAux +=" BALIOA: " + frm.elements[i].value+"\n";
			}
		}
		else{	
		  sAux +="IZENA: " + frm.elements[i].name+"";
		  sAux +=" BALIOA: " + frm.elements[i].value+"\n";
		}		
	}
	alert(sAux);
}


//Besterik (input radio) sakatzerakoan textarea bat izkutuan zegoenan bistaratuko da
function besterik(){
		var besterik=document.getElementById('B');
		var besterikTextarea = document.getElementById("besterikTextarea");
		if(besterik.checked){
			besterikTextarea.style.display = 'block';
		}else{
			besterikTextarea.style.display = 'none';
			besterikTextarea.value ='';
		}

}


//Irudi bat igotzerakoan preview bat egitea
  function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {           
            var file = files[i];
            var imageType = /image.*/;     
            if (!file.type.match(imageType)) {
                continue;
            }           
            var img=document.getElementById("thumbnil");            
            img.file = file;    
            var reader = new FileReader();
            reader.onload = (function(aImg) { 
                return function(e) { 
                    aImg.src = e.target.result; 
                }; 
            })(img);
            reader.readAsDataURL(file);
        }    
    }
 
	