<?php
//call library 
require_once ('../php/lib/nusoap.php');
require_once('../php/lib/class.wsdlcache.php'); 


//$ns="http://localhost/lab1/service/myserver.php?wsdl";  //nameof the service
$ns="http://wsjulenjon.hol.es/lab1/service/myserver.php?wsdl";  //nameof the service
//using soap_server to create server object 
$server = new soap_server; 
$server->configureWSDL('konprobatu',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
$server->register('konprobatu',array('pasahitza'=>'xsd:string','tiketa'=>'xsd:string'),array('erantzuna'=>'xsd:string'),$ns); 

// create the function 
function konprobatu($pasahitza,$tiketa) { 
	$serverticket = "4458";
	$irten=FALSE;
	$file = fopen("toppasswords.txt","r");
	while(!feof($file) && $irten==FALSE){
		$lerroa=trim(fgets($file));
		if(strcmp($lerroa,$pasahitza)==0){
			$irten=TRUE;		
		}
	}
	fclose($file);
	if ($irten==TRUE){
		return "PBALIOGABEA";
	}else{
		if(strcmp($serverticket,$tiketa)==0){
			return "BALIOZKOA";	
		}else{
			return "BALIOGABEA";
		}
	}
	
} 
// create HTTP listener 
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA); 
exit(); 
?>  
