<?php
if((!defined('byPass') || !byPass) && (isset($byPass) && !$byPass)){

	$regPath = __DIR__.'\registration.php';
	file_exists($regPath) or _e("_403");
	require_once 'registration.php';
	$serverAddress = $_SERVER['SERVER_ADDR'];
	in_array($serverAddress, $installedAtIP) or _e("_403");

	$macs         = getMacAddress();
	$isRegistered = false;
	foreach($installedAtMac as $mac){
		if(in_array($mac,$macs))
		$isRegistered = true;
	}
	$isRegistered or _e("_403");
}
else
$isRegistered = true;

define('isRegistered',$isRegistered);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/*require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';*/

require_once('Common/table.class.php');
require_once('Common/db.php');
require_once('Common/totp.class.php');

/*sanitizeRequest();*/

if(!function_exists('sendEMail')){
	function sendEMail($Head , $to, $subject , $body,$useTemplate = true){
		if($to=='' || is_null($to))
		//throwErrr('Please enter valid email!!',104);
		$mail = new PHPMailer(true); // the true param means it will throw exceptions on errors, which we need to catch
		if(in_array($Head ,['DNHPDCL : Consumer Acknowledgement','DNHPDCL : PDApplication','DNHPDCL : ContractorApplication','DNHPDCL : DGSetApplication','DNHPDCL : PowerApplication'])){

			$from     = OEMAIL_ID;//"jagdish1230@gmail.com";
			$password = OEMAIL_PASSWORD;
		}
		else{

			$from     = EMAIL_ID;//"jagdish1230@gmail.com";
			$password = EMAIL_PASSWORD;
		}

		if((DEBUGGING || session('isDev'))){
			$to = [];
			if(!is_null(session("devEmailId")) &&
				!startsWith(session("devEmailId"),"ed-"))
			$to[] = session("devEmailId");
			$to[] = "hktest47@gmail.com";
			$to[] = "hksofttronix@yahoo.com";
			$to[] = HKEMAIL;
		}
		try{
			//$mail->SMTPDebug = 0;
			$mail->SMTPDebug = EMAIL_SMTPDEBUG;
			if(DEBUGGING) $mail->Debugoutput = 'echo';
			else $mail->Debugoutput = 'error_log ';
			$mail->isSMTP();
			$mail->SMTPAuth = true;
			$mail->Host = EMAIL_HOST;
			$mail->Username = $from;//EMAIL_ID;        // GMAIL username
			$mail->Password = $password;
			$mail->SMTPSecure = EMAIL_SMTPSECURE;
			$mail->Port = EMAIL_PORT;
			$mail->IsHTML(true);
			$mail->CharSet = "utf-8";
			/*
			$mail->SMTPOptions = array(
			'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
			)
			);
			*/
			if(!(isset($Head) && $Head != '')){
				$Head = '';
			}
			if(!(isset($from) && $from != '')){
				$from = '';
			}
			$mail->SetFrom($from, $Head);
			$mail->Subject = "<NO-Reply> $subject";//'PHPMailer Test Subject via mail(), advanced';
			$i = 0;
			if(is_array($to) && (!empty($to))){
				foreach($to as $value){
					$mailto = strtolower(trim($value));
					if($i == 0)
					$mail->AddAddress($mailto, '');
					else
					$mail->AddCC($mailto);
					$i++;
				}
			}
			else{
				$mailto = strtolower(trim($to));
				$mail->AddAddress($mailto, '');
			}
			if((!is_null($cc_to))){
				if(is_array($cc_to)){
					foreach($cc_to as $i){
						$i = strtolower($i);
						$mail->AddCC($i);
					}
				}
				else
				if($cc_to != ''){
					$cc_to = strtolower($cc_to);
					$mail->AddCC($cc_to);
				}
			}

			//if (startsWith($Head, "DNHPDCL") && !startsWith($_SERVER['HTTP_HOST'] , 'localhost'))
			//$mail->AddBCC("ed - jetech - dd@nic.in");
			$mail->AddBCC($from);

			if(isset($replyto) || $replyto != ''){
				$mail->AddReplyTo($replyto, $name_replyto);
			}
			else{
				//$mail->AddReplyTo('', '');
			}
			if($useTemplate)
			$body = PopulateBody($body);

			$mail->MsgHTML($body);//"This is a Test");
			if(!(isset($attr) && ($attr != ''))){
				$attr = NULL;
			}
			else{
				foreach($attr as $i){
					$mail->AddAttachment($i);
				}
			}
			
			return $mail->Send();
		}
		catch(phpmailerException $e){
			logThis($e->errorMessage(),now(),'EmailFailure');
			//return $e->errorMessage(); //Pretty error messages from PHPMailer
			return false;
		}
		catch(Exception $e){
			logThis($e->errorMessage(),now(),'EmailFailure');
			//return $e->getMessage(); //Boring error messages from anything else!
			return false;
		}

	}

}

function utf8ize($d){
	if(is_array($d)){
		foreach($d as $k => $v){
			$d[$k] = utf8ize($v);
		}
	}
	else
	if(is_string ($d)){
		return utf8_encode($d);
	}
	return $d;
}

//function is used for send notification message using firebase.
function savePdf($pdfvalue,$file_location)
{
	$ci =& get_instance();
		
	$ci->pdf->loadHtml($pdfvalue);
	$ci->pdf->setPaper('A4','portrait');//landscape
	$ci->pdf->render(); 
	//$ci->pdf->stream("abc.pdf", array('Attachment'=>0));
	//'Attachment'=>0 for view and 'Attachment'=>1 for download file
	$pdf = $ci->pdf->output();
	//$file_location = INVOICE_PDF_PATH."abc4.pdf";
	file_put_contents($file_location,$pdf); 
	
	/*if(file_put_contents($file_location,$pdf))
		return TRUE;
	else
		return FALSE;*/
}

function logError($msg,$fileName = null,$dir = "ErrorLog/ApplicationErrors"){
	$lDir       = $dir;
	if(is_null($fileName))
	$fileName = "Log".now("Ymd");
	$fileName = str_replace("/", "_",$fileName);
	if($dir == "ErrorLog/ApplicationErrors" || $dir == "Trace"){
		$lDir = $dir."/".now("Y-m-d")."/".now("H");
	}
	logThis($msg,$fileName,$lDir);
	//logThis($msg,$fileName,"ErrorLog/".session("StaffName")."/".now("Y-m-d")."/".now("H"));
}
/**
* Function to create log file
* @param string  $msg Message to log
* @param string  $fileName Name of File
* @param string  $dir directory to store log file such as dir1 or dir1/subDir1
* @author Dainik Tandel
* @date 01/11/2020
* @return
*/
if(!function_exists('logThis')){

	function logThis($msg,$fileName,$dir){
		$query    = $msg;
		$path     = DATAPATH."logs/$dir/";
		$fileName = str_replace("/", "_",$fileName) . ".php";
		if(!is_dir($path))
		mkdir($path,0777,true);//mkdir($path,0777,true);

		$filepath = $path.$fileName;
		if(!file_exists($filepath)){
			$handle = fopen($filepath, "a+");
			$sql    = "<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');";
			fwrite($handle, $sql . "\n\n");
			fclose($handle);

		}

		$handle = fopen($filepath, "a+");

		/*if(is_array($a) && ($a[0] == "DELETE" || $a[0] == "INSERT" || $a[0] == "UPDATE") || DEBUGGING)
		{
		*/
		$sql    = "";
		$sql .= "\n#Begin*****************************************************************************************************\n";
		if(function_exists('session')){
			if(!is_null(session("StaffName")) && session("StaffName") != NULL){
				$sql .= "#Access From : ".ACCESSFROM." #AccessFromEnd \n";
				$sql .= "#Developer : ".session("DevID")." #Developerend \n";
				$sql .= "#Developer ID: ".session("DevUserID")." #DeveloperIDend \n";
				$sql .= "#User ID: ".session("UID")." #UserIDend \n";
				$sql .= "#User ID: ".session("Uname")." #UserIDend \n";
				$sql .= "#User : ".session("StaffName")." #Userend \n";
			}
		}
		/*if(!is_null(request('html')))
		unset($_REQUEST['html']);
		*/
		$sql .= "#Time : ".now('d-m-Y H:i:s')." #Timeend\n";
		if(isset($_SERVER['REMOTE_ADDR'])) $sql .= "#IP : ".$_SERVER['REMOTE_ADDR']." #IPend\n";
		if(isset($_SERVER['HTTP_REFERER'])) $sql .= "#Referrer : ".$_SERVER['HTTP_REFERER']." #ReferrerEnd\n";
		if(CurURL != NULL) $sql .= "#Current URL: ".CurURL." #CurrentURLEnd\n";
		$sql .= "#Request : ".json_encode($_REQUEST)." #Requestend\n";

		if(!is_array($query) && !is_object($query)){
			$a = [];
			$a = explode(' ',trim($query));
			$sql .= "#Operation : ".$a[0]." #Operationend\n";
			$query = str_replace("<BR>", "\n",$msg);
			$query = str_replace("~","\n\n#Stake Trace\n",$query);
			$sql .= "#Message: \n".$query.";\n";
		}
		else{
			$a = [];
			$a = explode(' ',trim((is_object($query))?$query->query:$query['query']));
			$sql .= "#Operation : ".$a[0]." #Operationend\n";
			foreach($query as $key => $msg){
				if(is_string($msg)){
					$msg = str_replace("<BR>", "\n",$msg);
					$msg = str_replace("~","\n\n#Stake Trace\n",$msg);
				}
				else{
					$msg = json_encode($msg);
				}
				$sql .= "#$key: \n".$msg.";\n";
			}
		}
		/* $sql .= " \n#Execution Time:" . $times[$key]."\n"; */
		$sql .= "#End*******************************************************************************************************";
		fwrite($handle, $sql . "\n\n");
		/* } */

		fclose($handle);
	}
}

function trace($operation,$msg,$fileName,$dir = "Trace"){
	if(!DEBUGGING && startsWith(trim($msg),'select'))
	return;
	
	$sLogFormat = now("Y-m-d") . " " . now("H:i:sa") . " ==> ".$operation." ==> ".$msg . " ==> " . IP  . " ==> URL: " . CurURL . " ==> R: " . referrer;
	$path       = DATAPATH."logs/$dir/";
	if(!is_dir($path))
	mkdir($path);
	
	$path .= date("Y-m-d")."/";
	if(!is_dir($path))
	mkdir($path);
	
	$fileName = str_replace("/", "_",$fileName) . "-".now("H").".csv";

	$sw       = fopen($path . $fileName,"a");
	fputcsv($sw,explode('==>',$sLogFormat));
	fclose($sw);
}

function encrypt($q){

	$plaintext 			= $q;
	$ivlen 				= openssl_cipher_iv_length($cipher="AES-128-CBC");
	$iv 				= openssl_random_pseudo_bytes($ivlen);
	$ciphertext_raw 	= openssl_encrypt($plaintext, $cipher, ENCRYPTKEY1, $options=OPENSSL_RAW_DATA, $iv);
	$hmac 				= hash_hmac('sha256', $ciphertext_raw, ENCRYPTKEY1, $as_binary=true);
	$ciphertext 		= base64_encode( $iv.$hmac.$ciphertext_raw );
	return $ciphertext;		 
}

function decrypt($q){

	$c 						= base64_decode($q);
	$ivlen 					= openssl_cipher_iv_length($cipher="AES-128-CBC");
	$iv 					= substr($c, 0, $ivlen);
	$hmac 					= substr($c, $ivlen, $sha2len=32);
	$ciphertext_raw 		= substr($c, $ivlen+$sha2len);
	$original_plaintext 	= openssl_decrypt($ciphertext_raw, $cipher, ENCRYPTKEY1, $options=OPENSSL_RAW_DATA, $iv);
	$calcmac 				= hash_hmac('sha256', $ciphertext_raw, ENCRYPTKEY1, $as_binary=true);
	if (hash_equals($hmac, $calcmac))// timing attack safe comparison
	{
		return $original_plaintext;
	}
	return false;
	
}

/**
* function gets the current date and time
* @param undefined $format the format in which you want the date and time
* 
* @return the formatted date and time
*/
if(!function_exists('now')){
	function now($format = "Y-m-d H:i:s"){
		$date = new DateTime('NOW',new DateTimeZone('Asia/Calcutta'));
		$now  = $date->format($format);
		return $now;
	}
}

/**
* throws an error 
* @param undefined $msg the message you want to show in error
* @param undefined $code the line no where the error occured
* @param undefined $throwException
* 
* @return
*/

function throwErrr($msg,$code=999,$throwException = false){
	$msg = str_replace("'","`",$msg);
	/*if(!$throwException) die(toJSON(['msgBox'=>['msg'=>$msg]]));
	else */
	throw new oimsException($msg,$code);

}
function throwErr($msg,$code = null){
	if(is_null($code))
	$code = 999;
	$msg  = str_replace("'","`",$msg);
	/*die(toJSON(['msgBox'=>['msg'=>$msg]]));
	//*/
	throw new oimsException($msg,$code);

}


function numberToRoman($num){
	// Make sure that we only use the integer portion of the value
	$n      = intval($num);
	$result = '';
	if($n >= 5)
	return "DIV";
	// Declare a lookup array that we will use to traverse the number:
	$lookup = array('M' => 1000,'CM'=> 900,'D' => 500,'CD'=> 400,
		'C' => 100,'XC'=> 90,'L' => 50,'XL'=> 40,
		'X' => 10,'IX'=> 9,'V' => 5,'IV'=> 4,'I' => 1);

	foreach($lookup as $roman => $value){
		// Determine the number of matches
		$matches = intval($n / $value);

		// Store that many characters
		$result .= str_repeat($roman, $matches);

		// Substract that from the number
		$n = $n % $value;
	}

	// The Roman numeral should be built, return it
	return "SD - ".$result;
}

function backupDB(){
	$date   = new DateTime('NOW',new DateTimeZone('Asia/Calcutta'));
	$now    = $date->format('dmY');
	$Hm     = $date->format('Hi');

	$result = fetchRows("SHOW VARIABLES LIKE 'basedir'",true);
	$row = (array)$result->row;
	$mysqlDumpPath = $row['Value']."/bin";

	$output        = NULL; $return_var = NULL;
	$bkpPath = DATAPATH."backup/$now";
	
	if(!is_dir($bkpPath))
		mkdir($bkpPath);
	
	$dbhost      = DBHOST;
	$dbuser      = DBUSER;
	$dbpass      = DBPASS;

	$backup_file = "$bkpPath/$Hm.sql";
	$command     = $mysqlDumpPath."/mysqldump --opt -h $dbhost -u $dbuser -p$dbpass --routines ". DBNAME . "  > $backup_file";

	//$backup_file = "$bkpPath / $Hm.gz";
	//echo $command = "mysqldump --opt - h $dbhost - u $dbuser - p$dbpass ". DBNAME . " | gzip > $backup_file";

	echo system($command,$r);
	
	/*print_r($r);
	die;*/
	if(!$r)
	return true;
	else
	return false;

}

function jsonToTable($json){
	$th = '<table style="border:1px solid #aaa;"><thead><tr >';

	foreach($json[0] as $key => $value)
	$th .= "<th style='border-right:1px solid #aaa;border-bottom:1px solid #aaa;'>$key</th>";
	$table = $th."</tr></thead><tbody>";

	$tr    = '';
	foreach($json as $arr){
		$tr .= "<tr style='border:1px solid #aaa;'>";
		foreach($arr as $key => $value)
		$tr .= "<td style='border-right:1px solid #aaa;border-bottom:1px solid #aaa;'>$value</td>";
		$tr .= "</tr>";
	}
	$table .= $tr.'</tbody></table>';
	return $table;
}

function removeDir($dir,$days = 5){
	$date = new DateTime('NOW',new DateTimeZone('Asia/Calcutta'));
	$now  = $date->format('Ymd');
	$m    = $days = $days * 24 * 60 * 60;
	logThis("__________________________________________________________________________________________________________________________________",$now,'removeDir');
	logThis("Days : $m",$now,'removeDir');
	$i    = 0;

	if(file_exists($dir)){
		logThis("$dir exists",$now,'removeDir');
		foreach(new DirectoryIterator($dir) as $fileInfo){
			logThis(" file Name : $fileInfo",$now,'removeDir');
			if($fileInfo->isDot() || $fileInfo == ".htaccess" ){
				continue;
			}
			logThis("File ". $fileInfo->getRealPath() . ' created on ' .(time() - $fileInfo->getCTime()),$now,'removeDir');

			if(time() - $fileInfo->getCTime() >= $days){
				$i++;
				echo $m = "<br>Deleting Directory : ".$fileInfo->getRealPath();
				logThis($m,$now,'removeDir');
				delTree($fileInfo->getRealPath());
				echo $m = "<br> Directory Deleted";
				logThis($m,$now,'removeDir');
			}

		}
	}
	else{
		logThis("$dir not exists",$now,'removeDir');
	}
	$m = "<br>$i file/folder deleted";
	logThis("__________________________________________________________________________________________________________________________________",$now,'removeDir');
	logThis($m,$now,'removeDir');
	logThis("__________________________________________________________________________________________________________________________________",$now,'removeDir');
	return $m;
}

function delTree($dir){
	$now   = now('Ymd');
	logThis("Deleting files from : ".$dir . "\n",$now,'removeDir');
	$files = array_diff(scandir($dir), array('.','..'));
	foreach($files as $file){
		logThis("Deleting files : $dir/$file \n",$now,'removeDir');
		(is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");
	}
	return rmdir($dir);
}



function sessionExpired(){

	$sstatus = session_status();

	if(isDepartmentUser){

		if(checkLogin()){
			return true;
		}
		if(function_exists('session_status') && (PHP_SESSION_ACTIVE != session_status())){
			return empty(session_id());
		}
	}
	return false;


}


function select($table,$data=NULL){
	$db = new DB();
	$res= $db->select($table,$data);
	if($res->status != "success" && $res->status != "warning"){
		logError($res,"Log".now("Ymd"),"ErrorLog/ApplicationErrors");
		//throwErrr($res->message,999);
	}
	trace("select",$res->query,"Trace");
	
	unset($db);
	return $res;
}
function save($table, $columnsArray, $where, $requiredColumnsArray = array()){
	$db = new DB();
	$res= $db->save($table,$columnsArray, $where, $requiredColumnsArray);
	if($res->status != "success" && $res->status != "warning"){
		logError($res,"Log".now("Ymd"),"ErrorLog/ApplicationErrors");
		//throwErrr($res->message,999);
	}
	trace("save",$res->query,"Trace");
	
	unset($db);
	return $res;
}
function insert($table, $columnsArray, $requiredColumnsArray = array()){
	$db = new DB();
	$res= $db->insert($table,$columnsArray, $requiredColumnsArray);
	if($res->status != "success" && $res->status != "warning"){
		logError($res,"Log".now("Ymd"),"ErrorLog/ApplicationErrors");
		//throwErrr($res->message,999);
	}
	trace("insert",$res->query,"Trace");
	unset($db);
	return $res;
}

function update($table, $columnsArray, $where, $requiredColumnsArray = array()){
	$db = new DB();
	$res= $db->update($table,$columnsArray, $where, $requiredColumnsArray);
	
	if($res->status != "success" && $res->status != "warning"){
		logError($res,"Log".now("Ymd"),"ErrorLog/ApplicationErrors");
		//throwErrr($res->message,999);
	}
	
	trace("update",$res->query,"Trace");
	unset($db);
	return $res;
}

/**
* Delete data from the database
* @param string $table name of the table
* @param array $where condition on deleting data
* @return object { $status: (warning | success | error),  $message: information , $query: sql string for debugging }
*/
function delete($table, $where){
	$db = new DB();
	$res= $db->delete($table, $where);
	if($res->status != "success" && $res->status != "warning"){
		logError($res,"Log".now("Ymd"),"ErrorLog/ApplicationErrors");
		//throwErrr($res->message,999);
	}
	trace("delete",$res->query,"Trace");
	unset($db);
	return $res;
}

function get_date($interval,$date = null,$format = "Y-m-d"){
	if(is_null($date))
	$date = date_create(now());
	else
	$date = date_create($date);

	date_add($date,date_interval_create_from_date_string($interval));
	return date_format($date,$format);
}

function getImageBase64($file,$ext = 'png',$fileDir = null){
	$file .= ".$ext";
	if(is_null($fileDir))
	$fileDir    = DATAPATH.cnsPath;
	$varFile    = $fileDir . $file;
	$fileExists = file_exists($fileDir . $file);
	if($fileExists){
		$contents = base64_encode(file_get_contents($fileDir . $file));
		$src      = 'data: '.mime_content_type($fileDir . $file).';base64,'.$contents;
		return $src;
	}
}


function toJson($json,$echo = false){
	$json = json_encode(utf8ize($json));
	if($echo)
	echo $json;
	else return $json;
}


/**
* Function To create datatable
* @param string $table : name of table, joins, where condition
* @param string $index_column : name of primary key column
* @param string[] $columns : array of columns
* @param string[] $format : array of columns with options to format
* @param bool $options: array of options to apply in sql query (hasWhere, distinct, escape)
*
* @return
*/
function toDataTable($table, $index_column, $columns = [], $format = [],$options = []){
	$db   = new DB();
	$data = $db->toDataTable($table, $index_column, $columns, $format,$options);
	unset($db);
	return $data;
}

function saveHtml($html,$path){

	$path = DATAPATH.$path.".html";
	if(!is_dir(dirname($path)))
	mkdir(dirname($path));//mkdir(dirname($path),0777,true);
	
	file_put_contents($path,$html);
	return true;
}


/**
* function will compress the image 
* @param undefined $source the image source
* @param undefined $destination after compression where the image should be stored
* @param undefined $quality 
* @param undefined $grayscale
* 
* @return
*/

function compressImage($source, $destination, $quality, $grayscale = false){

	$info = getimagesize($source);
	$quality = $quality > 9 ? 9 : $quality;
		
	
	if($info['mime'] == 'image/jpeg'){
		$image = imagecreatefromjpeg($source);
		imagejpeg($image, $destination, $quality);
	}
	elseif($info['mime'] == 'image/gif'){
		$image = imagecreatefromgif($source);
		imagegif($image, $destination, $quality);
	}
	elseif($info['mime'] == 'image/png')
	{
		/*$image = imagecreatefrompng($source);
		imagepng($image, $destination, $quality);*/
		
		$image = imagecreatefrompng( $source );
        $bck   = imagecolorallocate( $image , 0, 0, 0 );
        imagecolortransparent( $image, $bck );
       	imagealphablending( $image, false );
        imagesavealpha( $image, true );
        imagepng( $image, $destination, $quality );
	}	
	
	/*if($grayscale)
	imagefilter($image, IMG_FILTER_GRAYSCALE);*/

	//imagejpeg($image, $destination, $quality);

	return $destination;
}

function imageCompress1($file_path,$name){
	
	$ci =& get_instance();
	$setting['image_path'] = $file_path;
	$setting['image_name'] = $name;
	$setting['compress_path'] = $file_path;
	$setting['jpg_compress_level'] = 2;
	$setting['png_compress_level'] = 2;
	$setting['create_thumb'] = TRUE;
	$setting['width_thumb'] = 300;
	$setting['height_thumb'] = 300;
	
	$ci->load->library('imgcompressor', $setting);
	$result = $ci->imgcompressor->do_compress();

	return true;
}


/**
* This function is used to resize image size
*
*/
function resizeImage($src, $dest, $type, $customer_watermark)
{
	try
	{
		$CI =& get_instance();
		list($org_img_width, $org_img_height) = getimagesize($src);

		/*$ratio     = $org_img_height / $org_img_width;
		$img_width = $org_img_height / 2;

		$img_height= $org_img_height / 2;*/

		$img_config= array(
			'image_library' => 'gd2',
			'quality'       => IMAGE_QUALITY,
			'new_image'     => $dest,
			//'allowed_types' => $type,
			'source_image'  => $src,
			'maintain_ratio'=> TRUE,
			'width'         => MAX_WIDTH,
			'height'        => MAX_HEIGHT
		);
		
		
		$CI->load->library('image_lib');
		$CI->image_lib->initialize($img_config);
		//$CI->image_lib->resize();
		
		$CI->image_lib->clear();
		if (!$CI->image_lib->resize()) 
		{
        	echo $CI->image_lib->display_errors();
      	}
      	else{
			echo $CI->image_lib->display_errors();
		}
      	
      	
      	//print_r($img_config);die;
		//set watermark
		/*$config_img = array(
			'source_image'    => $dest,
			'wm_text'         => $customer_watermark,//$this->authentication->business_name,
			'wm_font_size'=> '80',
			'wm_vrt_alignment'=> 'bottom',
			'wm_hor_alignment'=> 'right'
		);
		$CI->image_lib->initialize($config_img);
		$CI->image_lib->watermark();*/
		
		return true;
	}catch(Exception $e)
	{
		return false;
	}
}
	


function getOTP(){
	// create the object
	$clientCode = new TOTP();
	// set the shared key
	$clientCode->setSecretKey("98765445632112345");

	// Set the expiration time (in seconds)
	// The expiration time varies between - 50 % and + 50 % of the number of sends entered
	// So for example if the expiration time is 30,
	// the actual expiration time is somewhere between 15 and 45 seconds (at "random")
	$clientCode->setExpirationTime(15 * 60); // will expire in 10 seconds (default is 30)

	// the number of digits the code should have (default to 7)
	$clientCode->setDigitsNumber(6);

	// Set if the generated code should contain or not a checksum at the end
	// If you set it to true do not forget to set it to true on the server code too
	//$clientCode->addChecksum(true); // default is false

	// generate the code
	$OTP        = $clientCode->generateCode();
	return $OTP;
}
/**
* function validates the OTP
* @param undefined $OTP the OTP to be validate
* @param undefined $unique
* 
* @return
*/
function validateOTP($OTP,$unique = ''){
	// create the object
	$serverCode = new TOTP();
	// set the shared key
	$serverCode->setSecretKey("98765445632112345");

	// Set the expiration time (in seconds)
	// The expiration time varies between - 50 % and + 50 % of the number of sends entered
	// So for example if the expiration time is 30,
	// the actual expiration time is somewhere between 15 and 45 seconds (at "random")
	$serverCode->setExpirationTime(5); // will expire in 10 seconds (default is 30)

	// the number of digits the code should have (default to 7)
	$serverCode->setDigitsNumber(6);
	//$clientCode->addChecksum(true);
	return $serverCode->validateCode($OTP);
}
/**
* function generates OTP
* @param undefined $unique
* 
* @return
*/
function generateOTP($unique = ''){
	$OTP     = getOTP();
	$OTP     = hash('ripemd160', $OTP.$unique);
	$matches = filter_var($OTP, FILTER_SANITIZE_NUMBER_INT);
	return $OTP = substr($matches,0,6);
}
function stripNum($OTP,$length = 6){
	$matches = filter_var($OTP, FILTER_SANITIZE_NUMBER_INT);
	return $OTP = substr($matches,0,$length);
}

function request($key){
	$CI = & get_instance();
	if(post($key) != "" && post($key) != null )
	return post($key);
	else return input($key);
}

function input($key){
	$CI =& get_instance();
	return $CI->input->get($key);
}
function post($key){
	$CI =& get_instance();
	return $CI->input->post($key);
}

function stripify($string)
{
	$string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

	return preg_replace('/[^A-Za-z0-9]/', '', $string); // Removes special chars.
}


//-------------------------------------------------------------------------------//
/**
* Create a directory
*
* @param	string	$path
* @param	int	$permissions
* @return	bool
*/
if(!function_exists('mkdir')){
	function mkdir($path, $permissions = NULL){
		if($path === '' OR ! $this->_is_conn()){
			return FALSE;
		}

		$result = @ftp_mkdir($this->conn_id, $path);

		if($result === FALSE){
			if($this->debug === TRUE){
				$this->_error('ftp_unable_to_mkdir');
			}

			return FALSE;
		}

		// Set file permissions if needed
		if($permissions !== NULL){
			$this->chmod($path, (int) $permissions);
		}

		return TRUE;
	}
}


/**
* Fetches records from db using sql string
* @param String $query sql string for fetching records
* @param boolean $onlyAssoc boolean to specify if required only associative array
*
* @return array array of records
*/
function fetchRows($query,$onlyAssoc = false)
{
	trace("fetchRows",$query,"Trace");
	$db = new DB();
	$res= $db->fetchRows($query,$onlyAssoc);
	if($res->status != "success" && $res->status != "warning"){
		logError($res,"Log".now("Ymd"),"ErrorLog/ApplicationErrors");
		//throwErrr($res->message,999);
	}
	unset($db);
	return $res;
}

function file_upload($name,$path)
{   
	$CI =& get_instance();

	$config['upload_path']          = $path;
	//$config['allowed_types']        = 'gif|jpg|png|jpeg|JPEG|GIF|JPG|PNG|pdf';
	$config['allowed_types']        = ALLOW_TYPES;
	$config['max_size']             = FILE_SIZE;
	$config['max_width']            = "*";
	$config['max_height']           = "*";
	$config['encrypt_name'] 		= FALSE;
	$CI->upload->initialize($config);
	//$CI->load->library('upload', $config);
	
	if ( ! $CI->upload->do_upload($name))
	{
		$file = '';
		$file_name = '';
	}
	else
	{
		$file =$CI->upload->data();
		$file_name = $file['file_name'];
	}
	return $file_name;
}


function rand_number() 
{
	$length = 6;
	$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
    return substr( str_shuffle( $chars ), 0, $length );
}

	
//function for reset password
function resetPassword($msgData){
	$name = $msgData['name'];
	$password = $msgData['password'];
	
	$html = '<div style="padding:5% 0%" align="center">
				<div class="adM"></div>
					<table style="background-color:#ffffff;border:1px solid #dedede;border-radius:3px" width="600" cellspacing="0" cellpadding="0" border="0">
						<tbody>
							<tr>
								<td valign="top" align="center">
									<table style="background-color:#e63c62;color:#ffffff;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto; border-radius:3px 3px 0 0" width="100%">
										<tbody>
											<tr>
												<td style="padding:36px 48px;display:block">
													<h1 style="font-size:30px;font-weight:700;line-height:150%;margin:0;text-align:left;color:#ffffff">Forgot Password - '.SITE_NAME.'</h1>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
							<tr style="background:#ffffff" align="center">
								<td style="padding:3% 8%">
									<h2 style="float:left">Hi '.$name.',</h2>
								</td>
							</tr>
							<tr style="background:#ffffff" align="center">
								<td style="padding:0% 8%">
									<table width="100%">
										<tbody><tr>	
											<td style="padding:2% 4%">
												<p style="text-align:justify;font-size:15px">Reset your password, and we will get you on your way.</p>
												<p style="text-align:justify;font-size:15px">To change your '.SITE_NAME.' password, hear is your new Password below.</p>
												
												<p style="text-align:justify;font-size:15px;font-weight:bold"> New Password : '.$password.'</p>
												<p style="text-align:justify;font-size:15px"> Change this password when you login your account.</p>
											</td>
										</tr>
									</tbody></table>						
								</td>
							</tr>
							<tr style="background:#ffffff">
								<td style="padding:4% 8%">
									Thank you for using '.SITE_NAME.'<br>
									The '.SITE_NAME.' Team
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>';
	return $html;
}



function send_email($mailData)
{
	$ci     =& get_instance();
	
	$config = array(
		'protocol'    => 'smtp',
		'smtp_host'=>  'ssl://smtp.googlemail.com',
		//'smtp_host'=>  'ssl://smtp.gmail.com',
		'smtp_port'   => 465,
		'smtp_user'=> 'devloperproactii@gmail.com',
		'smtp_pass'   => 'yhfmblqiqjmetonj',
    	//'smtp_crypto' => 'ssl', 
		'mailtype'=> 'html',
		'smtp_timeout'=> '10',
    	'charset' => 'iso-8859-1',
		'wordwrap'=> TRUE
	);
	
	$ci->email->initialize($config);

	$from      		= $mailData['fromID'];
	$to        		= $mailData['toID'];
	$from_name 		= 'Multivendor';
	$bcc_email 		= 'devloperproactii@gmail.com';
	$ci->email->set_newline("\r\n");
	$ci->email->from($from,$from_name);
	$ci->email->to($to);
	$ci->email->bcc($bcc_email);
	$ci->email->subject($mailData['subject']);
	$ci->email->message($mailData['message']);
	if($ci->email->send())
	{
		return TRUE;
	}
	else
	{
		// print_r($ci->email->print_debugger());
		return FALSE;
	}
}


function category_menu()
{
	$ci     =& get_instance();
	
	$cat_cond['is_active'] = 1;
	$cat_cond['parent_category_id'] = '';
	$cat_limit['limit'] = '';
	$cat_ord['order_by'] = 'category_name ASC';
	$category_menu = $ci->Master_m->whereAdvance('category',$cat_cond,$cat_ord,$cat_limit);
	
	return $category_menu;
}


function adminMenu()
{
	$ci     =& get_instance();
	
	$role_id = $ci->session->userdata[ADMIN_SESSION]['role_id'];
	$menu_result = $ci->Master_m->getRoleWiseMenu($role_id);		
				
	$menu = array();
	$i = 0;
	foreach($menu_result as $row)
	{	
		$menu[$i]['role_details_id'] = $row['role_details_id'];
		$menu[$i]['menu_id'] = $row['menu_id'];
		$menu[$i]['menu_position'] = $row['menu_position'];
		$menu[$i]['menu_name'] = $row['menu_name'];
		$menu[$i]['menu_icon'] = $row['menu_icon'];
		$menu[$i]['menu_link'] = $row['menu_link'];
		
		$submenuID = $row['submenu_id'];
		$submenu = array();
		$is_submenu = FALSE;
		if($submenuID != NULL || $submenuID != "")
		{
			$is_submenu = TRUE;
			$submenu_id = array();
			$submenu_id = explode(',',$submenuID);
			$j = 0;
			foreach($submenu_id as $sub_id)
			{
				$s_id['submenu_id'] = $sub_id;
				$submenu_result = $ci->Master_m->where('submenu_details',$s_id);							
				$submenu[$j]['submenu_id'] 	= $submenu_result[0]['submenu_id'];
				$submenu[$j]['submenu_name'] = $submenu_result[0]['submenu_name'];
				$submenu[$j]['submenu_link'] = $submenu_result[0]['submenu_link'];						
				$j++;	
			}				
		}
		$menu[$i]['is_submenu'] = $is_submenu;
		$menu[$i]['submenu'] = $submenu;
		
		$i++;				
	}
	
	return $menu;
}

function activate_menu($controller) 
{
   	$CI     =& get_instance();
    // Getting router class to active.
    $class = $CI->router->fetch_class();
    $n=strtolower(str_replace(' ', '', $class));
    $n1=strtolower(str_replace(' ', '', $controller));
     return ($n == $n1) ? 'active' : ' ';
    //return $class;
  }
  
  
//function for register successfully
function registerCustomer($msgData)
{
	$name = $msgData['name'];
	
	$html = '<div style="padding:5% 0%" align="center">
	<div class="adM"></div>
		<table style="background-color:#ffffff;border:1px solid #dedede;border-radius:3px" width="600" cellspacing="0" cellpadding="0" border="0">
			<tbody>
				<tr>
					<td valign="top" align="center">
						<table style="background-color:#e63c62;color:#ffffff;font-family:&quot;Helvetica Neue&quot;,Helvetica,Roboto; border-radius:3px 3px 0 0" width="100%">
							<tbody>
								<tr>
									<td style="padding:36px 48px;display:block">
										<h1 style="font-size:30px;font-weight:700;line-height:150%;margin:0;text-align:left;color:#ffffff">Welcome to '.SITE_NAME.'</h1>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr style="background:#ffffff" align="center">
					<td style="padding:3% 8%">
						<h2 style="float:left">Welcome '.$name.',</h2>
					</td>
				</tr>
				<tr style="background:#ffffff" align="center">
					<td style="padding:0% 8%">
						<table width="100%">
							<tbody><tr>	
								<td style="padding:2% 4%">
									<p style="text-align:justify;font-size:15px">Thank you so much for allowing us to help you with your recent account opening.We are committed to providing our customers with the highest level of service and the most innovative products possible. </p>
									<p style="text-align:justify;font-size:15px">We are very glad you chose us and hope you will take advantage of our wide variety of products, all designed to meet your specific needs.</p>
									
									<p style="text-align:justify;font-size:15px;font-weight:bold">For more detailed information about any of our products or services, please visit any of our convenient locations. You may contact us by phone at 1-800-555-5555.</p>
								</td>
							</tr>
						</tbody>
						</table>						
					</td>
				</tr>
				<tr style="background:#ffffff">
					<td style="padding:4% 8%">
						Thank you for using '.SITE_NAME.'<br>
						The '.SITE_NAME.' Team
					</td>
				</tr>
			</tbody>
		</table>
	</div>';
	
	return $html;
}

/**** bind Categorylisr from Prent Ctaegory id */
function bindCategoryByPrentctaegory($id){
	$ci     =& get_instance();
	$cat_option 	= '';
	$where['category_id'] 	= $id;
	$result 				= $ci->Master_m->where('category',$where);
	if(!empty($result))
	{
		//Category
		$child_category = $result[0]['child_category'];
		if($child_category != "" || $child_category != null || !empty($child_category)){
			$child_category_ids 		= explode(',',$result[0]['child_category']) ;
			if(!empty($child_category_ids))
			{		$i = 0;			
				$category = array();
				foreach($child_category_ids as $c_row)
				{				
					$c_id['category_id'] 		= $c_row; 
					$cat_result 				= $ci->Master_m->where('category',$c_id);
					if(!empty($cat_result)){
							$category_id 	= $cat_result[0]['category_id'];
							$category_name	= $cat_result[0]['category_name'];
							$category[$i]['category_id'] = $category_id;
							$category[$i]['category_name'] = $category_name;							
					}
					$i++;
				}
			}			
		}			
	}
	return $category;
}

function getAllElementBycategory($id,$productid=null){

			$ci     	=& get_instance();
			$option 	= "";
			$class_name = "";
			$where['category_id'] 	= $id;
			$result 				= $ci->Master_m->where('category',$where);
			$elements_html 			= '';
			$i 						= 0;
			if(!empty($result))
			{
				$element_data 			= $result[0]['element_id'];
				if($element_data != "" || $element_data != null || !empty($element_data)){
					$elements 			= explode(',',$result[0]['element_id']) ;
					
					if(!empty($elements))
					{
						$i				=0;
						$element_arr 	= array();
						foreach($elements as $row)
						{
							$attr_arr 				= array();
							$product_attributes 	= array();
							$j 						= 0;
							$bid['element_id'] 		= $row; 
							$result1 				= $ci->Master_m->where('product_elements',$bid);
							$attributes 			= $result1[0]['attributes'];

							if($productid != null || $productid != "" || !empty($productid)){
								$p_where['product_id'] 		= $productid;
								$p_where['element_id'] 		= $row;
								$product_elements 			= $ci->Master_m->where('product_elements_attributes',$p_where);
								if(!empty($product_elements)){
									$product_attributes = explode(',', $product_elements[0]['attributes_id']);
								}
							}						
							
							if(!empty($attributes))
							{
								$attributes_id = explode(',',$attributes);
								
								$ele_id = $result1[0]['element_id'];
								$ele_name = $result1[0]['element_name'];
								if(strtolower($ele_name) == "quantity"){
									$class_name	=	"elements_attributes";
								}
								$elements_html .='<div class="col-md-4 mb-10">
													<div class="form-group tagSelect-ltr">
														<label for="txt_attributes_'.$ele_id.'" class="il-gray fs-14 fw-500 align-center">'.$ele_name.'</label>
														<input type="hidden" id="txt_element_id_'.$ele_id.'" name="txt_element_id[]" value="'.$ele_id.'">
														<div class="atbd-select ">
															<select name="txt_attributes_'.$ele_id.'[]" id="txt_attributes_'.$ele_id.'" class="form-control select2 '.$class_name.'" data-name = "'.$ele_name.'">
																<option value="">
																	Select Attributes
																</option>';
											
								foreach($attributes_id as $attr)
								{
									$attr_id['attributes_id'] = $attr;
									$result2 	= $ci->Master_m->where('attributes',$attr_id);
									$attributes_id = $result2[0]['attributes_id'];
									$attributes_name = $result2[0]['attributes_name'];
									$attr_arr[$j]['attributes_id'] = $attributes_id;
									$attr_arr[$j]['attributes_name'] = $attributes_name;
									$j++;
									$selected = "";
									if(in_array($attr,$product_attributes))	{
										$selected = "selected";
									}							
									
									$elements_html .='<option value="'.$attributes_id.'" '.$selected.'>'.$attributes_name.'</option>';
								}
								$elements_html .='</select>
														</div>
													</div>
												</div>';						
							}
							$ele_name = $result1[0]['element_name'];
							$element_arr[$ele_name] = $attr_arr;
							$i++;
						}
					}			
				}					
			}
			
			return $elements_html;
}

	/*** GET ELEMENT NAME BY ID */
	function getElementNameByID($element_id){
		$ci     =& get_instance();
		$where['element_id'] 	= $element_id;
		$result 				= $ci->Master_m->where('product_elements',$where);
		$ele_name 	= $result[0]['element_name']; 
		return $ele_name;
	}

	/*** GET ATTRIBUTE NAME BY ID */
	function getAttributeNameByID($attributes_id){
		$ci     =& get_instance();
		$where['attributes_id'] 	= $attributes_id;
		$result 					= $ci->Master_m->where('attributes',$where);
		$attr_name 	= $result[0]['attributes_name']; 
		return $attr_name;
	}

	/*** GET CATEGORY NAME BY ID */
	function getCateforyNameByID($category_id)
	{
		$ci     =& get_instance();
		$where['category_id'] 	= $category_id;
		$result 					= $ci->Master_m->where('category',$where);
		$category_name 	= $result[0]['category_name']; 
		return $category_name;		
	}

	/*** GET CATEGORY NAME BY ID */
	function getBrandNameByID($brand_id)
	{
		$ci     =& get_instance();
		$where['brand_id'] 	= $brand_id;
		$result 					= $ci->Master_m->where('brand',$where);
		$brand_name 	= $result[0]['brand_name']; 
		return $brand_name;		
	}

	/*** WITHOUT RUPPEE SYMBOL FOR FRONTSITE -UI */
	if(! function_exists('moneyFormatIndia_ui'))
		{
			function moneyFormatIndia_ui($amount) {
				$fmt = new \NumberFormatter($locale = 'en_IN', NumberFormatter::DEFAULT_STYLE);
				return $fmt->format($amount);
			}
			
		}

	/*** WITH RUPPEE SYMBOL FOR ADMIN PANEL */
	if(! function_exists('moneyFormatIndia_admin'))
	{
		function moneyFormatIndia_admin($amount) {
			$fmt = new \NumberFormatter($locale = 'en_IN', NumberFormatter::CURRENCY);
			return $fmt->format($amount);
		}
		
	}

	function getAllCountry(){
		$url = 'https://api.countrystatecity.in/v1/countries';
		$key = COUNTRY_API_KEY;
		
		$curl = curl_init($url);
		
		$headers = array(
			'X-CSCAPI-KEY: '.$key
	   );
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );
		
		$data = curl_exec($curl);
		
		curl_close($curl);
		return json_decode($data);;
	}

	function getStateByCountry($countrycode){
		$url = 'https://api.countrystatecity.in/v1/countries/'.$countrycode.'/states';
		$key = COUNTRY_API_KEY;
		
		$curl = curl_init($url);
		
		$headers = array(
			'X-CSCAPI-KEY: '.$key
	   );
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );
		
		$data = curl_exec($curl);
		
		curl_close($curl);
		return json_decode($data);;
	}

	/**** GET CURRENT FINANCIAL YEAR */
	if(!function_exists('getFY')){
		function getFY($date = null){
			$date = (is_null($date)?now():$date);
			$sd   = getFYStartDate($date);
			$ed   = getFYEndDate($date);
			return substr($sd, 0, 4).substr($ed, 2, 2);
		}
	}
	if(!function_exists('getFYStartDate')){
		function getFYStartDate($curDate){
	
			$effectiveDate = date("Y-m-d",mktime(0, 0, 0, 4  ,1, date('Y', strtotime("-3 months", strtotime($curDate)))));
			return $effectiveDate;
		}
	
	}
	if(!function_exists('getFYEndDate')){
		function getFYEndDate($curDate){
			$effectiveDate = date("Y-m-d",mktime(0, 0, 0, 3  ,31, date('Y', strtotime("+9 months", strtotime($curDate)))));
			return $effectiveDate;
		}
	}

	/** Create and save pdf to folder */
	function createPdf($filepath,$file_name,$html_code){
		// $html1 = $this->load->view('UI/Invoice_v',true);
		// $html = $this->output->get_output($html1);
		$ci     	=& get_instance();
		
		if (!is_dir($filepath)) {
			mkdir($filepath, 0777, true);
		}	
		$ci->load->library('pdf');
		
		// Load HTML content
		$ci->pdf->loadHtml($html_code);
		
		// Render the HTML as PDF
		$ci->pdf->render();
		
		// ob_end_clean();      
		// $this->pdf->stream("welcome.pdf", array("Attachment"=>0));  // Output the generated PDF (1 = download and 0 = preview)
		
		$file = $ci->pdf->output();
		file_put_contents($filepath.$file_name, $file);  
		return true;
	}

	/***INDIAN CURENCY : RUPPES IN WORD  */
	function convertToIndianCurrency($number) 
	{
		$no = round($number);
		$decimal = round($number - ($no = floor($number)), 2) * 100;    
		$digits_length = strlen($no);    
		$i = 0;
		$str = array();
		$words = array(
			0 => '',
			1 => 'One',
			2 => 'Two',
			3 => 'Three',
			4 => 'Four',
			5 => 'Five',
			6 => 'Six',
			7 => 'Seven',
			8 => 'Eight',
			9 => 'Nine',
			10 => 'Ten',
			11 => 'Eleven',
			12 => 'Twelve',
			13 => 'Thirteen',
			14 => 'Fourteen',
			15 => 'Fifteen',
			16 => 'Sixteen',
			17 => 'Seventeen',
			18 => 'Eighteen',
			19 => 'Nineteen',
			20 => 'Twenty',
			30 => 'Thirty',
			40 => 'Forty',
			50 => 'Fifty',
			60 => 'Sixty',
			70 => 'Seventy',
			80 => 'Eighty',
			90 => 'Ninety');
		$digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
		while ($i < $digits_length) {
			$divider = ($i == 2) ? 10 : 100;
			$number = floor($no % $divider);
			$no = floor($no / $divider);
			$i += $divider == 10 ? 1 : 2;
			if ($number) {
				$plural = (($counter = count($str)) && $number > 9) ? 's' : null;            
				$str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural;
			} else {
				$str [] = null;
			}  
		}
		
		$Rupees = implode(' ', array_reverse($str));
		$paise = ($decimal) ? "And Paise " . ($words[$decimal - $decimal%10]) ." " .($words[$decimal%10])  : '';
		return ($Rupees ? '' . $Rupees : '') . $paise . " Only";
	}

	
	//generate shortcode form given string
	function generateShortcode($str)
	{   
		$str = preg_replace('/[^A-Za-z0-9]/', '-', $str);
		$replace_str = '';
		
		$rep_char =  array(" ",".",",","<",">","?","/","'","|",":",";","{","}","[","]","~","`","!","@","#","$","%","^","&","*","(",")","-","_","=","+","--","---","----","-----","------","-------","--------","---------");
		$rep_char_from_excel =  array(" ",".","~","`","!","@","#","$","%","^","&","*","(",")","-","_","=","+","{","}","[","]",":",";","'","|","<",">",",",".","?","/","‚");
		$rep_char_and =  array("&","&&","&&&","&&&&","&&&$$","&&&&&&");
		$rep_char_dash =  array("--","---","----","-----","------","-------","--------","---------");
		
		$replace_str = str_replace($rep_char,"-",$str);
		$replace_str = str_replace($rep_char_from_excel,"-",$replace_str);
		$replace_str = str_replace($rep_char_and,"-",$replace_str);
		$replace_str = str_replace($rep_char_dash,"-",$replace_str);
		
		$first_char = substr($replace_str,0,1);
		
		if($first_char == '-')
		{
			$replace_str = ltrim($replace_str, "-");
		}
		
		$last_char = substr($replace_str, -1);
		if($last_char == '-'){
			$replace_str = rtrim($replace_str, "-");
		}
		
		$replace_str = strtolower($replace_str);
		
		return $replace_str;
	}

	function removeSpaceNextLine($str)
	{
		$str = trim($str);
		$str = str_replace( array("\r\n","\r","\n"),"",$str);
		return $str;	
	}

?>