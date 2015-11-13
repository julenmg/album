<?php
//call library 
require_once ('../php/lib/nusoap.php');
require_once('../php/lib/class.wsdlcache.php') 


$ns="http://localhost:80/lab1/service/myserver.php";  //nameof the service
//$ns="http://localhost/nusoap-0.9.5/samples";  //nameof the service
//using soap_server to create server object 
$server = new soap_server; 
$server->configureWSDL('konprobatu_pasahitza',$ns);
$server->wsdl->schemaTargetNamespace=$ns
$server->register('konprobatu_pasahitza',array('pasahitza'=>'xsd:string'),array('pasahitza'=>'xsd:string'),$ns); 

// create the function 
function konprobatu_pasahitza($pasahitza) { 
if(!$pasahitza){ 
	return new soap_fault('Erab','','Pasahitza sartu!'); 
} 
$file = fopen("toppasswords.txt") or exit("Unable to open file!");
//Output a line of the file until the end is reached
	foreach($lerroa as $file){
		if(strcmp($lerroa,$pasahitza)==0){
			return "BALIOGABEA";
		}
  	}
	return "BALIOZKOA";
	
} 
// create HTTP listener 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA); 
exit(); 
?>  
