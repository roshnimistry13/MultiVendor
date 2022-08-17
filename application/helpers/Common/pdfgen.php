<?php
	include(DataPath."lib/mpdf/mpdf.php");
	//include("../globals.php");
	//include("../constants.php");
	//error_reporting(E_ERROR);
	ini_set('max_execution_time',600);
	init();
	$json = $_POST['ORData']; 
	$name = trim($json['name'].time());
	
	$path = "c:/windows/temp/$name.pdf";
	$table=jsonToTable($json['table']);
	
	
	$mpdf=new mPDF();
	$mpdf->WriteHTML(HEADER);
	$mpdf->WriteHTML('<hr>');
	$mpdf->WriteHTML($table);
	$mpdf->Output($path,'F');
	
	echo json_encode(array('Success' => 'Success','file'=>$name));
	
 
 
 
?>