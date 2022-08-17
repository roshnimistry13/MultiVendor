<?php

define('INCLUDE_CHECK',true);
define('OIMSCheck',true);
header('Access-Control-Allow-Origin: http://192.168.100.81');
include_once "../globals.php";
error_reporting(E_ERROR);
//init();
require "Notifications.code.php";
if(isset($_REQUEST['notify'])){
	echo getNotification();
}
else
if(isset($_REQUEST['getActivity'])){
	getActivity();
}
else
if(isset($_REQUEST['ActivityRead'])){
	ActivityRead();
}
elseif(isset($_REQUEST['logout'])){
	echo logout();
}
elseif(isset($_REQUEST['sendToDeveloper'])){
	echo sendToDeveloper();
}
elseif(isset($_REQUEST['Dashboard'])){
	//  echo dashboard($_REQUEST['uid']);
	$json['dashboard'] = dashboard($_REQUEST['uid']);
	//$json['charts'] = charts();
	//$json['estimateChart'] = EstChart();
	$json['status']='success';
	echo json_encode($json);
	//echo $json;
}
else{
	echo "No function called";
}
function sendToDeveloper(){
	ini_set('max_execution_time',0);
	$url = valData($_REQUEST['url']);
	$err = valData($_REQUEST['err']);
	$img = valData($_REQUEST['scrnShot']);
	$replyTo['to'] = valData($_REQUEST['replyTo']);
	$sLogFormat = now("d-m-Y H:i:s")." ==> ";
	$replyTo['name'] = $logOf = $_SESSION["StaffName"];
	$urls  = explode('oims',$url);
	if($_SERVER['HTTP_HOST']!=EmailURL) $url   = trim(URL,'/').$urls[1];
	if(strlen($logOf) == 0)
	$logOf    = "Offline";
	$FileName = now("Ymd") . ".php";
	$userID   = $_SESSION["Username"];
	$uid      = $_SESSION["UID"];
	$path     = "ErrorLog/$logOf";
	$errFile  = AppErrPath.now("Y-m-d/H/")."log".now("Ymd").".php";
	$error    = "$uid $userID $logOf <span style='color:red;'>$err </span>  ==> <a style='color:#F9FC92;' href='$url'>Page</a>";
	PaymentLog($error,now("Ymd"),$path);
	$json     = array();
	if(MailTo("OIMS : ScreenShot", array("hksofttronix@gmail.com"), "Screen Shot send by $logOf" , $sLogFormat.$error,$img,$errFile,$replyTo)){
		$json["Success"] = "ScreenShoot send to Developer.";
		echo json_encode($json);
	}
	else{
		$json["Fail"] = "ScreenShoot failed to send to Developer.";
		echo json_encode($json);
	}
}
function getNotification(){
	$flag     = 0;
	$JENot    = 0;$StoreNot = 0;$ReqNot   = 0;$ESTNot   = 0;$EstErr   = 0;
	$EstTS    = 0;$EstCS    = 0;$EstEECS  = 0;$EstPCS   = 0;$EstTech  = 0;$cnsNot   = 0;
	$cnsCon   = 0;$cnsPA    = 0;$cnsAD    = 0;$IONot    = 0;
	$str      = "";
	$DesID    = $_SESSION["DesID"];
	$notif    = array();
	#STORE_START
	{
		// Material Notification';
		if($_SESSION["DesID"] == 1){
			$flag = getEENotification("Material");
		}
		elseif($_SESSION["DesID"] == 3){
			$JENot = 0;
		}
		elseif($_SESSION["DesID"] == 2){
			$flag = getAENotification("Material");
			if(hasPost($_SESSION["UID"],'Store',2)){
				$flag = getAESNotification("Material");
			}
        
		}
		elseif($_SESSION["DesID"] == 4){
			$flag = getSKNotification("Material");
		}
		if($flag > 0){
			$StoreNot = $flag;
			$ReqNot   = $flag;
			$str      = "MatReq:" . $flag . ";";
			$notif["MatReq"] = $flag;
		}
		$flag = 0;
		//// Material return Notification';
		$flag = getRMNotification();
		if($flag > 0){
			$StoreNot = $StoreNot + $flag;
			$ReqNot   = $ReqNot + $flag;
			$str      = $str . "MatRet:" . $flag . ";";
			$notif["MatRet"] = $flag;
		}
		//  Stock Notification';
		$flag = 0;
		if($_SESSION["DesID"] == 1){
			$flag = getStockNotification(1);
		}
		elseif($_SESSION["DesID"] == 2){
			if(hasPost($_SESSION["UID"],'Store',2)){
				$flag = getStockNotification("2");
			}
		}
		elseif($_SESSION["DesID"] == 4){
			if($_SESSION["DefaultLocation"] == 1){
				$flag = getStockNotification("3 or stage=4");
			}
		}
		if($flag > 0){
			$StoreNot = $StoreNot + $flag;
			$ReqNot   = $ReqNot + $flag;
			$str      = $str . "Stock:" . $flag . ";";
			$notif["Stock"] = $flag;
		}
		//EMR Notification';
		$flag = 0;
		if($_SESSION["DesID"] == 1){
			$flag = getEMRNotification(3);
		}
		elseif($_SESSION["DesID"] == 2){
			$flag = getAEEMRNotification(4);
			if(hasPost($_SESSION["UID"],'Store',2)){
				$flag += getEMRNotification(2);
			}
		}
		elseif($_SESSION["DesID"] == 4){
			$flag = getEMRNotification(1);
		}
		if($flag > 0){
			$StoreNot = $StoreNot + $flag;
			$ReqNot   = $ReqNot + $flag;
			$str      = $str . "EMR:" . $flag . ";";
			$notif["EMR"] = $flag;
		}
		if($ReqNot > 0){
			$str = $str . "StoreReq:" . $ReqNot . ";";
			$notif["StoreReq"] = $ReqNot;
		}
		if($StoreNot > 0){
			$str = $str . "Store:" . $StoreNot . ";";
			$_SESSION["oStore"] = $_SESSION["Store"];
			$_SESSION["Store"] = $StoreNot;
			$notif["Store"] = $StoreNot;
		}
	}
	#STORE_END
	
	#ESTIMATE_START
	{
		$stage = 0;$tcount= 0;
		$flag  = 0;
		$ReqNot= 0;
		//EST Notification';
		if($_SESSION["DesID"] == 1){
			//  '$flag = getEstEENotification(3);
			$EstTS       = getEstNotification(3, 1);
			$EstCS       = getEstNotification(3, 3);
			$EstEECS     = getEstNotification(3, 5);
			$EstPCS      = getEstNotification(3, 6);
			$EstPBR      = getEstNotification(3, 8);
			$EstBA       = getEstNotification(3, 11);
			$EstCSCorr   = getEstNotification(3, 97);
			$EstBillCorr = getEstNotification(3, 96);
			$CSCorctd    = getEstNotification(3, 95);
			$BillCorctd  = getEstNotification(3, 94);
		}
		elseif($_SESSION["DesID"] == 3){
			$EstErr = getEstNotification(1, 1);
			$EstErr += getEstNotification(1, 0);
			$EstCSCorr   = getEstNotification(1, 5);
			$EstBillCorr = getEstNotification(1, 8);
			$EstTS       = getEstNotification(1, 2);
			$EstTN       = getEstNotification(1, 3,'LT');
			$EstETN      = getEstNotification(1, 3,'ET');
			$EstCS = getEstNotification(1, 4);
			if(hasPost($_SESSION["UID"],'Tech',$_SESSION["DesID"]))
			$EstTech = getEstNotification(98, 1);
			$EstReq  = getEstNotification(0, 0);
			$EstRB   = getEstNotification(1, 7);
			$EstPO   = 0;
		}
		elseif($_SESSION["DesID"] == 2){
			$stage = 2;
			$tcount= 0;
			$EstTS = getEstNotification(2, 0);
			$EstCS = getEstNotification(2, 3);
			if(hasPost($_SESSION["UID"],'Tech',$_SESSION["DesID"]))
			$EstTech     = getEstNotification(99, 1);
			$EstPCS      = getEstNotification(2, 5);
			$EstPBR      = getEstNotification(2, 8);
			$EstErr      = getEstNotification(2, 1);
			$EstCSCorr   = getEstNotification(2, 97);
			$EstBillCorr = getEstNotification(2, 96);
			$CSCorctd    = getEstNotification(2, 95);
			$BillCorctd  = getEstNotification(2, 94);
		}
		elseif($_SESSION["DesID"] == 9){
			$EstACCS = getEstNotification(4, 5);//getEstACNotification(4);
			$EstPBR  = getEstNotification(4, 8);
			$EstBA   = getEstNotification(4, 11);
		}
		else
		if( hasPost($_SESSION["UID"],"Audit",10)){
			// Audit Clerk
			$EstACCS = getEstNotification(5, 5);//getEstACNotification(4);
			$EstPBR  = getEstNotification(5, 11);
		}
		else
		if( hasPost($_SESSION["UID"],"Cashier",10)){
			// Cashier
			//$EstACCS = getEstNotification(4, 5);//getEstACNotification(4);
			$EstPBR = getEstNotification(6, 11);
		}
		if($flag > 0){
			$ESTNot = $flag;
			$ReqNot = $flag;
			$str    = $str . "EstReq:" . $flag . ";";
			$notif["ESTReq"] = $flag;
			//'Spn_ReqEst.InnerText = " Requested Estimate (" . $flag.ToString . ")";
		}
		if($EstACCS > 0){
			$ESTNot += $EstACCS;
			$ReqNot += $EstACCS;
			$str = $str . "EstReqd :" . $EstACCS . ";";
			$notif["EstReqd"] = $EstACCS;
			//'Spn_ReqEst.InnerText = " Requested Estimate (" . $flag.ToString . ")";
		}
		$EstCorrNot = 0;
		if($EstErr > 0){
			$ESTNot = $ESTNot + $EstErr;
			$ReqNot = $ReqNot + $EstErr;
			$EstCorrNot += $EstErr;
			$str = $str . "EstErr:" . $EstErr . ";";
			$notif["EstCorr"] = $EstErr;
		}
		if($EstCSCorr > 0){
			$ESTNot = $ESTNot + $EstCSCorr;
			$ReqNot = $ReqNot + $EstCSCorr;
			$EstCorrNot += $EstCSCorr;
			$str = $str . "EstCSCorr:" . $EstCSCorr . ";";
			$notif["CSCorr"] = $EstCSCorr;
		}
		if($EstBillCorr > 0){
			$ESTNot = $ESTNot + $EstBillCorr;
			$ReqNot = $ReqNot + $EstBillCorr;
			$EstCorrNot += $EstBillCorr;
			$notif["BillCorr"] = $EstBillCorr;
		}
		$EstCorrctdNot = 0;
		if($CSCorctd > 0){
			$ESTNot = $ESTNot + $CSCorctd;
			$ReqNot = $ReqNot + $CSCorctd;
			$EstCorrctdNot += $CSCorctd;
			$notif["CSCorctd"] = $CSCorctd;
		}
		if($BillCorctd > 0){
			$ESTNot = $ESTNot + $BillCorctd;
			$ReqNot = $ReqNot + $BillCorctd;
			$EstCorrctdNot += $BillCorctd;
			$notif["BillCorctd"] = $BillCorctd;
		}
		if($EstCS > 0){
			$ESTNot = $ESTNot + $EstCS;
			$ReqNot = $ReqNot + $EstCS;
			$str    = $str . "EstCS:" . $EstCS . ";";
			$notif["EstCS"] = $EstCS;
		}
		if($EstEECS > 0){
			$ESTNot = $ESTNot + $EstEECS;
			$ReqNot = $ReqNot + $EstEECS;
			$str    = $str . "EstEECS:" . $EstEECS . ";";
			$notif["EstEECS"] = $EstEECS;
		}
		if($EstTS > 0){
			$ESTNot = $ESTNot + $EstTS;
			$ReqNot = $ReqNot + $EstTS;
			$str    = $str . "EstTS:" . $EstTS . ";";
			$notif["EstTS"] = $EstTS;
		}
		if($EstETN > 0){
			$ESTNot = $ESTNot + $EstETN;
			$ReqNot = $ReqNot + $EstETN;
			$str    = $str . "EstETN:" . $EstETN . ";";
			$notif["EstETN"] = $EstETN;
		}
		if($EstTN > 0){
			$ESTNot = $ESTNot + $EstTN;
			$ReqNot = $ReqNot + $EstTN;
			$str    = $str . "EstTN:" . $EstTN . ";";
			$notif["EstTN"] = $EstTN;
		}
		if($EstTech > 0){
			$ESTNot = $ESTNot + $EstTech;
			$ReqNot = $ReqNot + $EstTech;
			$str    = $str . "EstTech:" . $EstTech . ";";
			$notif["EstTech"] = $EstTech;
		}
		if($EstPCS > 0){
			$ESTNot = $ESTNot + $EstPCS;
			$ReqNot = $ReqNot + $EstPCS;
			$str    = $str . "EstPcs:" . $EstPCS . ";";
			$notif["ESTPCS"] = $EstPCS;
		}
		if($EstReq > 0){
			$ESTNot = $ESTNot + $EstReq;
			$ReqNot = $ReqNot + $EstReq;
			$str    = $str . "EstReqd:" . $EstReq . ";";
			$notif["EstReqd"] = $EstReq;
		}
		if($EstRB > 0){
			$ESTNot = $ESTNot + $EstRB;
			$ReqNot = $ReqNot + $EstRB;
			$str    = $str . "EstRB:" . $EstRB . ";";
			$notif["ESTRB"] = $EstRB;
		}
		if($EstPBR > 0){
			$ESTNot = $ESTNot + $EstPBR;
			$ReqNot = $ReqNot + $EstPBR;
			$str    = $str . "EstPBR:" . $EstPBR . ";";
			$notif["ESTPBR"] = $EstPBR;
		}
		if($EstBA > 0){
			$ESTNot = $ESTNot + $EstBA;
			$ReqNot = $ReqNot + $EstBA;
			$str    = $str . "EstBA:" . $EstBA . ";";
			$notif["ESTBA"] = $EstBA;
		}
		if($EstPO > 0){
			$ESTNot = $ESTNot + $EstPO;
			$ReqNot = $ReqNot + $EstPO;
			$str    = $str . "EstPO:" . $EstPO . ";";
			$notif["ESTOP"] = $EstPO;
		}
		$flag = 0;
		if($ESTNot > 0){
			$str = $str . "Estimate:" . $ESTNot . ";";
			$str = $str . "EstReq:" . $ReqNot . ";";
			$notif["Estimate"] = $ESTNot;
			$notif["EstReq"] = $ReqNot;
			$notif["EstCorctd"] = $EstCorrctdNot;
			if($EstCorrNot > 0){
				$notif["EstErr"] = $EstCorrNot;
				if($ESTNot == $EstCorrNot){
					$str = $str . "EstClass:red;";
					$notif["EstClass"] = "badge-danger";
				}
				else{
					$str = $str . "EstClass:orange;";
					$notif["EstClass"] = "badge-warning";
				}
			}
			else{
				$str = $str . "EstClass:green;";
				$notif["EstClass"] = "badge-success";
			}
			$_SESSION["oEstimate"] = $_SESSION["Estimate"];
			$_SESSION["Estimate"] = $ESTNot;
		}
	}
	#ESTIMATE_END
	
	#CONSUMER_START
	{
		
		//Hemangi 15 - 09 - 2016 12:38 PM
		$cnsStage = 0;$cnsLT    = 0;$cnsHT    = 0;$cnsDom   = 0;$DomQ     = 0;$DomPQ    = 0;$DomR     = 0;$DOMMTR   = 0;$LTC      = 0;$HTC      = 0;$LTR      = 0;$HTR      = 0;$OAD      = 0;
		$NCNot    = 0;$CNSREQNot= 0;$CHKNot   = 0;$ErrNot   = 0;
		$NCLTQ    = 0;$RADOM    = 0;
		//echo (hasPost($_SESSION["UID"],"O & M",$_SESSION["DesID"])?'true':'false');
		if(hasPost($_SESSION["UID"],"Tech",$_SESSION["DesID"])){
			//'' Consumer new connection Notification;
			if($_SESSION["DesID"] != "10"){
				if($_SESSION["DesID"] == 1){
					$cnsStage = 4;
				}
				elseif($_SESSION["DesID"] == 3){
					$cnsStage = 1;
				}
				elseif($_SESSION["DesID"] == 2){
					$cnsStage = 3;
				}
				$LTC = getCNSNotification($cnsStage, 4,"LT");
				$HTC = getCNSNotification($cnsStage, 4,"HT");
				if($DesID == 3){
					$LTC = $LTC + getCNSNotification(1, 3,"LT");
					$HTC = $HTC + getCNSNotification(1, 3,"HT");
				}
				if($LTC > 0){
					$cnsLT     = $cnsLT + $LTC;
					$NCNot     = $cnsLT;
					$cnsNot    = $cnsLT;
					$CNSREQNot = $cnsLT;
					$notif["NCLTC"] = $LTC;
				}
				if($HTC > 0){
					$cnsHT     = $cnsHT + $HTC;
					$NCNot     = $NCNot + $cnsHT;
					$cnsNot    = $cnsNot + $cnsHT;
					$CNSREQNot = $CNSREQNot + $cnsHT;
					$str       = $str . "NCHTC:" . $HTC . ";";
					$notif["NCHTC"] = $HTC;
				}
				//'' Consumer Released Application Notification; //After issue release order
				$RALT = getCNSNotification($cnsStage, 8,"LT");
				$RAHT = getCNSNotification($cnsStage, 8,"HT");
				if($_SESSION["DesID"] == 3){
					$RALT = getCNSNotification($cnsStage, 9,"LT");
					$RAHT = getCNSNotification($cnsStage, 9,"HT");
				}
				if($RALT > 0){
					$notif["RALT"] = $RALT;
				}
				if($RAHT > 0){
					$str = $str . "RAHT:" . $RAHT . ";";
					$notif["RAHT"] = $RAHT;
				}
			}
			// Release Notifications
			if($_SESSION["DesID"] == 1){
				$cnsStage = 9;
			}
			elseif($_SESSION["DesID"] == 3){
				$cnsStage = 6;
			}
			elseif($_SESSION["DesID"] == 2){
				$cnsStage = 8;
			}
			elseif($_SESSION["DesID"] == 10){
				$cnsStage = 5;
			}
			$LTR = getCNSNotification($cnsStage, 5,"LT");
			$HTR = getCNSNotification($cnsStage, 5,"HT");
			if($LTR > 0){
				$cnsLT     = $cnsLT + $LTR;
				$NCNot     = $NCNot + $LTR;
				$cnsNot    = $cnsNot + $LTR;
				$CNSREQNot = $CNSREQNot + $LTR;
				$str       = $str . "NCLTR:" . $LTR . ";";
				$notif["NCLTR"] = $LTR;
			}
			if($HTR > 0){
				$cnsHT     = $cnsHT + $HTR;
				$NCNot     = $NCNot + $HTR;
				$cnsNot    = $cnsNot + $HTR;
				$CNSREQNot = $CNSREQNot + $HTR;
				$str       = $str . "NCHTR:" . $HTR . ";";
				$notif["NCHTR"] = $HTR;
			}
			// New Connection Application Form Filling Notification
			if($_SESSION["DesID"] == 10){
				$cnsStage = 0;
				$LTC      = getCNSNotification($cnsStage, 1,"LT");
				$HTC      = getCNSNotification($cnsStage, 1,"LT");
				if($LTC > 0){
					$cnsLT     = $cnsLT + $LTC;
					$NCNot     = $NCNot + $LTC;
					$cnsNot    = $cnsNot + $LTC;
					$CNSREQNot = $CNSREQNot + $LTC;
					$str       = $str . "NCLTC:" . $LTC . ";";
					$notif["NCLTC"] = $LTC;
				}
				if($HTC > 0){
					$cnsHT     = $cnsHT + $HTC;
					$NCNot     = $NCNot + $HTC;
					$cnsNot    = $cnsNot + $HTC;
					$CNSREQNot = $CNSREQNot + $HTC;
					$str       = $str . "NCHTC:" . $HTC . ";";
					$notif["NCHTC"] = $HTC;
				}
			}
			$RA = $RALT + $RAHT;
			if($RA > 0){
				$CNSREQNot = $CNSREQNot + $RA;
				$cnsNot    = $cnsNot + $RA;
				$notif["RA"] = $RA;
			}
			$cnsLT = $LTR + $LTC;
			$cnsHT = $HTC + $HTR;
			if($cnsLT > 0){
				$notif["NCLT"] = $cnsLT;
			}
			if($cnsHT > 0){
				$notif["NCHT"] = $cnsHT;
			}
			if($NCNot > 0){
				$notif["NC"] = $NCNot;
			}
			// Consumer Correction Notification;
			if($_SESSION["DesID"] == 3 || $_SESSION["DesID"] == 10){
				$flag   = 0;
				$cnsLT  = 0;
				$cnsHT  = 0;
				$ErrNot = 0;
				if($_SESSION["DesID"] == 3){
					$cnsStage = 2;
				}
				else
				if($_SESSION["DesID"] == 10){
					$cnsStage = 0;
				}
				$LTC = getCNSNotification($cnsStage, 4,"LT");
				$HTC = getCNSNotification($cnsStage, 4,"HT");
				if($_SESSION["DesID"] == 10){
					$LTC = getCNSNotification($cnsStage, 3,"LT");
					$HTC = getCNSNotification($cnsStage, 3,"HT");
				}
				$eappstage = 0;
				if($_SESSION["DesID"] == 3){
					$cnsStage = 7;
					$eappstage= 5;
				}
				else
				if($_SESSION["DesID"] == 10){
					$cnsStage = 5;
					$eappstage= 2;
				}
				$LTR     = getCNSNotification($cnsStage, $eappstage,"LT");
				$HTR     = getCNSNotification($cnsStage, $eappstage,"HT");
				$cnsCorr = 0;
				if($LTC > 0 ){
					$cnsLT     = $cnsLT + $LTC;
					$cnsCorr   = $cnsCorr + $LTC;
					$CNSREQNot = $CNSREQNot + $LTC;
					$cnsNot    = $cnsNot + $LTC;
					$notif["CorrLTC"] = $LTC;
				}
				if($LTR > 0){
					$cnsLT     = $cnsLT + $LTR;
					$cnsCorr   = $cnsCorr + $LTR;
					$CNSREQNot = $CNSREQNot + $LTR;
					$cnsNot    = $cnsNot + $LTR;
					$notif["CorrLTR"] = $LTR ;
				}
				if($HTC > 0 ){
					$cnsHT     = $cnsHT + $HTC;
					$cnsCorr   = $cnsCorr + $HTC;
					$CNSREQNot = $CNSREQNot + $HTC;
					$cnsNot    = $cnsNot + $HTC;
					$notif["CorrHTC"] = $HTC;
				}
				if($HTR > 0 ){
					$cnsHT     = $cnsHT + $HTR;
					$cnsCorr   = $cnsCorr + $HTR;
					$CNSREQNot = $CNSREQNot + $HTR;
					$cnsNot    = $cnsNot + $HTR;
					$notif["CorrHTR"] = $HTR ;
				}
				$cnsLT = $LTR + $LTC;
				$cnsHT = $HTC + $HTR;
				if($cnsHT > 0 )
				$notif["CorrHT"] = $cnsHT ;
				if($cnsLT > 0 )
				$notif["CorrLT"] = $cnsLT ;
				if($cnsCorr > 0 )
				$notif["Correction"] = $cnsCorr ;
				$ErrNot = $LTR + $HTR + $LTC + $HTC;
			}
			// Consumer Pending Application Notification;
			$flag = 0;
			$LTC  = 0;
			$HTC  = 0;
			$LTR  = 0;
			$HTR  = 0;
			$cnsLT= 0;
			$cnsHT= 0;
			if($_SESSION["DesID"] == 10){
				$LTC = getCNSNotification(0, 0, "LT");
				$HTC = getCNSNotification(0, 0, "HT");
				$LTR = getCNSNotification(5, 1, "LT");
				$HTR = getCNSNotification(5, 1, "HT");
				if($LTC > 0){
					$cnsLT     = $cnsLT + $LTC;
					$cnsPA     = $cnsPA + $LTC;
					$CNSREQNot = $CNSREQNot + $LTC;
					$cnsNot    = $cnsNot + $LTC;
					$notif["PALTC"] = $LTC ;
				}
				if( $LTR > 0 ){
					$cnsLT     = $cnsLT + $LTR;
					$cnsPA     = $cnsPA + $LTR;
					$CNSREQNot = $CNSREQNot + $LTR;
					$cnsNot    = $cnsNot + $LTR;
					$notif["PALTR"] = $LTR;
				}
				if( $HTC > 0 ){
					$cnsHT     = $cnsHT + $HTC;
					$cnsPA     = $cnsPA + $HTC;
					$CNSREQNot = $CNSREQNot + $HTC;
					$cnsNot    = $cnsNot + $HTC;
					$notif["PAHTC"] = $HTC;
				}
				if( $HTR > 0 ){
					$cnsHT     = $cnsHT + $HTR;
					$cnsPA     = $cnsPA + $HTR;
					$CNSREQNot = $CNSREQNot + $HTR;
					$cnsNot    = $cnsNot + $HTR;
					$notif["PAHTR"] = $HTR;
				}
				$cnsLT = $LTR + $LTC;
				$cnsHT = $HTC + $HTR;
				if( $cnsHT > 0 ){
					$notif["PAHT"] = $cnsHT;
				}
				if( $cnsLT > 0 ){
					$notif["PALT"] = $cnsLT;
				}
				if( $cnsPA > 0 ){
					$notif["PA"] = $cnsPA;
				}
			}
			// Consumer Doc. Attachment Notification;
			$flag = 0;
			$cnsLT= 0;
			$cnsHT= 0;
			if($_SESSION["DesID"] == 10){
				$cnsLT = getCNSNotification(0, 2, "LT");
				$cnsHT = getCNSNotification(0, 2, "HT");
				//$OAD   = getCNSNotification(2, 9);//Hemangi 27 - 08 - 2016 10:38 AM
				$OAD = 0;
			}
			if( $cnsLT > 0){
				$cnsNot    = $cnsNot + $cnsLT;
				$CNSREQNot = $CNSREQNot + $cnsLT;
				$cnsAD     = $cnsAD + $cnsLT;
				$notif["ADLT"] = $cnsLT;
			}
			if( $cnsHT > 0){
				$cnsNot    = $cnsNot + $cnsHT;
				$CNSREQNot = $CNSREQNot + $cnsHT;
				$cnsAD     = $cnsAD + $cnsHT;
				$notif["ADHT"] = $cnsHT;
			}
			if( $OAD > 0){
				$cnsNot    = $cnsNot + $OAD;
				$CNSREQNot = $CNSREQNot + $OAD;
				$cnsAD     = $cnsAD + $OAD;
				$notif["ADO"] = $OAD;
			}
			if( $cnsAD > 0){
				$notif["AD"] = $cnsAD;
			}
			// Consumer Online application
			$flag   = 0;
			$cnsDom = 0;
			$cnsLT  = 0;
			$cnsHT  = 0;
			$HTC    = 0;
			$LTC    = 0;
			$LTR    = 0;
			$HTR    = 0;
			if($_SESSION["DesID"] == 10){
				$cnsDom = getCNSNotification(0, 9, "DOM");
				$LTC    = getCNSNotification(0, 9, "LT");
				$HTC    = getCNSNotification(0, 9, "HT");
				$LTR    = getCNSNotification(5, 9, "LT");
				$HTR    = getCNSNotification(5, 9, "HT");
			}
			$cnsOA = 0;
			if($LTC > 0){
				$cnsLT     = $cnsLT + $LTC;
				$cnsNot    = $cnsNot + $LTC;
				$CNSREQNot = $CNSREQNot + $LTC;
				$cnsOA     = $cnsOA + $LTC;
				$notif["OLTC"] = $LTC;
			}
			if($LTR > 0){
				$cnsLT     = $cnsLT + $LTR;
				$cnsNot    = $cnsNot + $LTR;
				$CNSREQNot = $CNSREQNot + $LTR;
				$cnsOA     = $cnsOA + $LTR;
				$notif["OLTR"] = $LTR;
			}
			if($HTC > 0){
				$cnsHT     = $cnsHT + $HTC;
				$cnsNot    = $cnsNot + $HTC;
				$CNSREQNot = $CNSREQNot + $HTC;
				$cnsOA     = $cnsOA + $HTC;
				$notif["OHTC"] = $HTC;
			}
			if($HTR > 0){
				$cnsHT     = $cnsHT + $HTR;
				$cnsNot    = $cnsNot + $HTR;
				$CNSREQNot = $CNSREQNot + $HTR;
				$cnsOA     = $cnsOA + $HTR;
				$notif["OHTR"] = $HTR;
			}
			if($cnsDom > 0){
				$cnsNot    = $cnsNot + $cnsDom;
				$CNSREQNot = $CNSREQNot + $cnsDom;
				$cnsOA     = $cnsOA + $cnsDom;
				$notif["ODOM"] = $cnsDom;
			}
			$cnsLT = $LTR + $LTC;
			$cnsHT = $HTC + $HTR;
			if($cnsHT > 0){
				$notif["OHT"] = $cnsHT;
			}
			if($cnsLT > 0){
				$notif["OLT"] = $cnsLT;
			}
			if($cnsOA > 0){
				$notif["Online"] = $cnsOA;
			}
			//Hemangi 27 - 08 - 2016 10:42 AM
			// Consumer Queried appliation
			if($_SESSION["DesID"] == 10){
				$QA   = 0;
				$QLT  = 0;$QHT  = 0;
				$QLTC = 0;$QHTC = 0;
				$QLTC = getCNSNotification(12, 7, "LT");
				$QHTC = getCNSNotification(12, 7, "HT");
				if($QLTC > 0){
					$cnsNot    = $cnsNot + $QLTC;
					$CNSREQNot = $CNSREQNot + $QLTC;
					$QA        = $QLTC;
					$notif["QLTC"] = $QLTC; // Consent LT in query application
					$notif["QLT"] = $QLTC; // consent in query application
				}
				if($QHTC > 0){
					$cnsNot    = $cnsNot + $QHTC;
					$CNSREQNot = $CNSREQNot + $QHTC;
					$QA        = $QA + $QHTC;
					$notif["QHTC"] = $QHTC;// Consent HT in query application
					$notif["QHT"] = $QHTC;// consent in query application
				}
				if($QA > 0){
					$notif["QA"] = $QA;//Query application in consumer
				}
			}
			/*$AE_quot=0;$EE_quot=0;
			if ($_SESSION["DesID"]==1){
			$EE_quot=getQuotlogNotification();
			}
			if ($_SESSION["DesID"]==2){
			$AE_quot=getQuotlogNotification();
			}
			if($EE_quot > 0 ){
			$cnsNot = $cnsNot + $EE_quot;
			$CNSREQNot = $CNSREQNot + $EE_quot;
			//$cnsPA = $cnsPA + $EE_quot;
			$notif["QUOTLOG"] = $EE_quot;
			}
			if($AE_quot > 0 ){
			$cnsNot = $cnsNot + $AE_quot;
			$CNSREQNot = $CNSREQNot + $AE_quot;
			//$cnsPA = $cnsPA + $EE_quot;
			$notif["QUOTLOG"] = $AE_quot;
			}*/
		}
		if(hasPost($_SESSION["UID"],"O & M",$_SESSION["DesID"])){
			$cnsLT    = 0;
			$cnsHT    = 0;
			$LTR      = 0;
			$HTR      = 0;
			$NCLT     = 0;$NCLTQ    = 0;$NCLTPQ   = 0;$NCLT_RAQ = 0;$NCLTMTR  = 0;
			if($_SESSION["DesID"] != "10"){
				// Consumer new connection Notification;
				if($_SESSION["DesID"] == 1){
					$cnsStage = 4;
				}
				elseif($_SESSION["DesID"] == 3){
					$cnsStage = 1;
				}
				elseif($_SESSION["DesID"] == 2){
					$cnsStage = 3;
				}

				/**
				* @Author:Hemangi
				* @Description:For LT Menu where Demand less than 10 in Consumer.
				**/
				$NCLTQ = getCNSNotification($cnsStage, 3, "LT"); // new Connection LT Quotation
				if($DesID == 3)
				$NCLTQ = $NCLTQ + getCNSNotification(1, 4,"LT");

				if($NCLTQ > 0){
					$NCNot     = $NCNot + $NCLTQ;
					$cnsNot    = $cnsNot + $NCLTQ;
					$CNSREQNot = $CNSREQNot + $NCLTQ;
					$notif["NCLTQ"] = $NCLTQ;
				}

				$NCLT_RAQ = getCNSNotification($cnsStage, 5, "LT"); // new Connection LT Release application

				if($NCLT_RAQ > 0){
					$NCNot     = $NCNot + $NCLT_RAQ;
					$cnsNot    = $cnsNot + $NCLT_RAQ;
					$CNSREQNot = $CNSREQNot + $NCLT_RAQ;
					$notif["NCLTRAPP"] = $NCLT_RAQ;
				}
				$LTR = getCNSNotification($cnsStage, 6, "LT");
				$HTR = getCNSNotification($cnsStage, 6, "HT");
				if($LTR > 0){
					//$cnsLT = $cnsLT + $LTR;
					$NCNot     = $NCNot + $LTR;
					$cnsNot    = $cnsNot + $LTR;
					$CNSREQNot = $CNSREQNot + $LTR;
					//$notif["NCLT"] = $LTR;
					$notif["NCLTR"] = $LTR;
				}
				if($HTR > 0){
					//$cnsHT = $cnsHT + $HTR;
					$NCNot     = $NCNot + $HTR;
					$cnsNot    = $cnsNot + $HTR;
					$CNSREQNot = $CNSREQNot + $HTR;
					$notif["NCHT"] = $HTR;
					$notif["NCHTR"] = $HTR;
				}
				if($_SESSION["DesID"] == 2){
					$NCLTMTR = getCNSNotification($cnsStage, 7,"LT");
					$NCLTMTR = $NCLTMTR + getCNSNotification(8, 5,"LT");
					$NCHTMTR = getCNSNotification($cnsStage, 7,"HT");
					if($NCLTMTR > 0){
						$cnsNot    = $cnsNot + $NCLTMTR;
						$CNSREQNot = $CNSREQNot + $NCLTMTR;
						$NCNot     = $NCNot + $NCLTMTR;
						//$notif["NCLT"] = $LTR + $NCLTMTR;
						$notif["NCLTMTR"] = $NCLTMTR;
					}
					if($NCHTMTR > 0){
						//$str = $str . "RAHT:" . $RAHT . ";";
						$cnsNot    = $cnsNot + $NCHTMTR;
						$CNSREQNot = $CNSREQNot + $NCHTMTR;
						$NCNot     = $NCNot + $NCHTMTR;
						$notif["NCHT"] = $HTR + $NCHTMTR;
						$notif["NCHTMTR"] = $NCHTMTR;
					}
					$NCLTPQ = getCNSNotification($cnsStage, 4, "LT"); // new Connection LT Approve Quotation

					if($NCLTPQ > 0){
						$NCNot     = $NCNot + $NCLTPQ;
						$cnsNot    = $cnsNot + $NCLTPQ;
						$CNSREQNot = $CNSREQNot + $NCLTPQ;
						$notif["NCLTPQ"] = $NCLTPQ;
					}
					$DOMMTR = getCNSNotification(8, 5,"DOM");//After filled meter details For DOM in AE
					if($DOMMTR > 0){
						$cnsNot    = $cnsNot + $DOMMTR;
						$CNSREQNot = $CNSREQNot + $DOMMTR;
						$NCNot     = $NCNot + $DOMMTR;
						//$cnsDom = $cnsDom + $DOMMTR;
						$notif["DOMMTR"] = $DOMMTR;
					}
					/*$NCLTCL = getCNSNotification(8, 5, "LT"); // new Connection LT Close Connection

					if ($NCLTCL>0){
					$NCNot = $NCNot + $NCLTCL;
					$cnsNot = $cnsNot + $NCLTCL;
					$CNSREQNot = $CNSREQNot + $NCLTCL;
					$notif["LTCL"]=$NCLTCL;
					}*/
				}
				$DomQ = getCNSNotification($cnsStage, 3,"DOM");
				if($DesID == 3)
				$DomQ = $DomQ + getCNSNotification(1, 4,"DOM");
				if($DesID == 2){
					$DomPQ = getCNSNotification(3, 4,"DOM");
					$DomRA = getCNSNotification(2, 3,"DOM");
				}
				$DomR = getCNSNotification($cnsStage, 5,"DOM");
				if($DomQ > 0){
					$cnsDom    = $cnsDom + $DomQ;
					$NCNot     = $NCNot + $DomQ;
					$cnsNot    = $cnsNot + $DomQ;
					$CNSREQNot = $CNSREQNot + $DomQ;
					$str       = $str . "NCDOMQ:" . $DomQ . ";";
					$notif["NCDOMQ"] = $DomQ;
				}
				if($DomPQ > 0){
					$cnsDom    = $cnsDom + $DomPQ;
					$NCNot     = $NCNot + $DomPQ;
					$cnsNot    = $cnsNot + $DomPQ;
					$CNSREQNot = $CNSREQNot + $DomPQ;
					$str       = $str . "NCDOMPQ:" . $DomPQ . ";";
					$notif["NCDOMPQ"] = $DomPQ;
				}
				if($DomRA > 0){
					$cnsDom    = $cnsDom + $DomRA;
					$NCNot     = $NCNot + $DomRA;
					$cnsNot    = $cnsNot + $DomRA;
					$CNSREQNot = $CNSREQNot + $DomRA;
					$str       = $str . "DOMReject:" . $DomRA . ";";
					$notif["DOMReject"] = $DomRA;
				}
				if($DomR > 0){
					$cnsDom    = $cnsDom + $DomR;
					$NCNot     = $NCNot + $DomR;
					$cnsNot    = $cnsNot + $DomR;
					$CNSREQNot = $CNSREQNot + $DomR;
					$str       = $str . "NCDOMR:" . $DomR . ";";
					$notif["NCDOMR"] = $DomR;
				}
				$LTTF=0;$LTTO=0;
				if($_SESSION["DesID"]==3){
					//echo "here";
					$LTTF = getTrans_fsblNotification(1, 13, "LT");
					$LTTO = getTrans_overloadedNotification();
				}
				else if($_SESSION["DesID"] == 2){
					$LTTO = getTrans_overloadedNotification();
				}
				if($LTTF > 0){
					$TFLT = $TFLT + $LTTF;
					$NCNot = $NCNot + $LTTF;
					$cnsNot = $cnsNot + $LTTF;
					$CNSREQNot = $CNSREQNot + $LTTF;
					//$cnsAD = $cnsAD + $OAD;
					$notif["LTTF"] = $LTTF;
				}
				if($LTTO > 0){
					$TOLT = $TFLT + $LTTO;
					//$NCNot = $NCNot + $LTTO;
					$cnsNot = $cnsNot + $LTTO;
					$CNSREQNot = $CNSREQNot + $LTTO;
					//$cnsAD = $cnsAD + $OAD;
					$notif["LTTO"] = $LTTO;
				}
				$notif["LTTFMenu"] = $LTTF + $LTTO;
			}
			else
			if($_SESSION["DesID"] == 10){
				// Clerk New Connection
				$flag     = 0;
				$cnsDom   = 0;
				$cnsStage = 0;
				$cnsDom   = $DomQ     = getCNSNotification($cnsStage, 1,"DOM");
				if($cnsDom > 0){
					$NCNot     = $NCNot + $cnsDom;
					$cnsNot    = $cnsNot + $cnsDom;
					$CNSREQNot = $CNSREQNot + $cnsDom;
					$str       = $str . "NCDOM:" . $cnsDom . ";";
					$notif["NCDOM"] = $cnsDom;
					$notif["NCDOMQ"] = $cnsDom;
				}
			
				$flag     = 0;
				$cnsDom   = 0;
				$cnsStage = 0;
				$cnsDom = getCNSNotification(0, 9, "DOM");
            
				if($cnsDom > 0){
					$cnsNot    = $cnsNot + $cnsDom;
					$CNSREQNot = $CNSREQNot + $cnsDom;
					$cnsOA     = $cnsOA + $cnsDom;
					$notif["Online"] = $notif["ODOM"] = $cnsDom;
				}
            
			}

			$cnsDom = $DomPQ + $DomRA + $DomQ + $DomR + $DOMMTR;
			if($cnsDom > 0){
				$notif["NCDOM"] = $cnsDom;
			}

			$NCLT = $NCLTQ + $NCLTPQ + $NCLT_RAQ + $LTR + $NCLTMTR + $LTTF;
			if($NCLT > 0){
				$notif["NCLT"] = $NCLT;
			}
			if($NCNot > 0){
				$notif["NC"] = $NCNot;
			}
			if($_SESSION["DesID"] == 3 || $_SESSION["DesID"] == 10){
				// Domestic Correction
				$flag   = 0;
				$cnsDom = 0;
				$ErrNot = 0;
				if($_SESSION["DesID"] == 3){
					$cnsStage = 2;
				}
				else
				if($_SESSION["DesID"] == 10){
					$cnsStage = 0;
				}
				$cnsDom = getCNSNotification($cnsStage, 3,"DOM");
				$cnsCorr= 0;
				if($cnsDom > 0){
					$ErrNot    = $cnsDom;
					$cnsNot    = $cnsNot + $cnsDom;
					$CNSREQNot = $CNSREQNot + $cnsDom;
					$cnsCorr   = $cnsDom;
					$notif["CorrDom"] = $cnsDom;
				}
				if($cnsDom > 0 ){
					$notif["DC"] = $cnsDom;
				}
				if($cnsCorr > 0 )
				$notif["Correction"] = $cnsCorr ;
				$ErrNot = $cnsDom;
			}
			if($_SESSION["DesID"] == 10){
				// Consumer Pending Application Notification;
				$flag   = 0;
				$cnsDom = 0;
				$cnsDom = getCNSNotification(0, 0, "DOM");
				if( $cnsDom > 0 ){
					$cnsNot    = $cnsNot + $cnsDom;
					$CNSREQNot = $CNSREQNot + $cnsDom;
					$cnsPA     = $cnsPA + $cnsDom;
					$notif["PADOM"] = $cnsDom;
				}
				if( $cnsDom > 0 ){
					$notif["PAD"] = $cnsDom;
				}
				if( $cnsPA > 0 ){
					$notif["PA"] = $cnsPA;
				}
				// Consumer Doc. Attachment Notification;
				$flag   = 0;
				$cnsDom = 0;
				$cnsDom = getCNSNotification(0, 2, "DOM");
				//    OAD = getCNSNotification(2, 9);
				$OAD    = 0;
				if( $cnsDom > 0){
					$cnsNot    = $cnsNot + $cnsDom;
					$CNSREQNot = $CNSREQNot + $cnsDom;
					$cnsAD     = $cnsAD + $cnsDom;
					$notif["ADDOM"] = $cnsDom;
				}
				if( $OAD > 0){
					$cnsNot    = $cnsNot + $OAD;
					$CNSREQNot = $CNSREQNot + $OAD;
					$cnsAD     = $cnsAD + $OAD;
					$notif["ADO"] = $OAD;
					//$notif["AD"] = $cnsAD;
				}
				$OAAD = getCNSNotification(0, 5, "DOM");//Test report
				$OAAD =0;
				if($OAAD > 0){
					//$cnsDom = $cnsDom + $OAAD; //Attach Dom -> DOM
					$cnsAD     = $cnsAD + $OAAD; //Attach Dom
					$cnsNot    = $cnsNot + $OAAD;
					$CNSREQNot = $CNSREQNot + $OAAD;
					//$notif["ADO"] = $OAAD;
				}
				if( $cnsAD > 0){
					$notif["AD"] = $cnsAD;
				}
			}
		}
		if(hasPost($_SESSION["UID"],"Comm.(LT)",$_SESSION["DesID"]) || hasPost($_SESSION["UID"],"Comm.(HT)",$_SESSION["DesID"]) || hasPost($_SESSION["UID"],"Comm",$_SESSION["DesID"])){
			if($_SESSION["DesID"] == "3"){
				if($_SESSION["DesID"] == 1){
					$cnsStage = 4;
				}
				elseif($_SESSION["DesID"] == 3){
					$cnsStage = 1;
				}
				elseif($_SESSION["DesID"] == 2){
					$cnsStage = 3;
				}
				//'' Consumer Released Application Notification; //After issue release order
				$RALT = getCNSNotification($cnsStage, 8,"LT");
				$RAHT = getCNSNotification($cnsStage, 8,"HT");
				$RADOM= getCNSNotification($cnsStage, 8,"DOM");
				if($RALT > 0){
					$notif["RALT"] = $RALT;
				}
				if($RAHT > 0){

					$notif["RAHT"] = $RAHT;
				}
				if($RADOM > 0){
					$notif["RADOM"] = $RADOM;
				}
				$RA = $RALT + $RAHT + $RADOM;
				if($RA > 0){
					$CNSREQNot = $CNSREQNot + $RA;
					$cnsNot    = $cnsNot + $RA;
					$notif["RA"] = $RA;
				}
			}
		}
		if($cnsNot > 0){
			$notif["Consumer"] = $cnsNot;
			$notif["CnsReq"] = $CNSREQNot;
			$_SESSION["oConsumer"] = $_SESSION["Consumer"];
			$_SESSION["Consumer"] = $cnsNot;
			if($ErrNot > 0){
				if($ErrNot == $cnsNot)
				$notif["CnsClass"] = "badge-danger";
				else
				$notif["CnsClass"] = "badge-warning";
			}
			else
			$notif["CnsClass"] = "badge-success";
		}
    
	}
	#CONSUMER_END
	
	#PD_START
	{
		//'' PD new connection Notification;
		$cnsStage = 0;$LTPD     = 0;$HTPD     = 0;$DomPD    = 0; //LT HT
		$PDLT     = 0;$PDHT     = 0;$PDDom    = 0; // PD menu
		$NRNot    = 0;$PDREQNot = 0; // Request & New Request
		$MTRPD    = 0;$MTRLTPD  = 0;$MTRHTPD  = 0;
		$RAPD     = 0;$RALTPD   = 0;$RAHTPD   = 0;
		if($_SESSION["DesID"] != "10"){
			if($_SESSION["DesID"] == 1){
				$cnsStage = 4;
				$LTPD     = getPDNotification($cnsStage, 4,"LT");
				$HTPD     = getPDNotification($cnsStage, 4,"HT");
			}
			elseif($_SESSION["DesID"] == 3){
				$cnsStage = 1;
				if($_SESSION["DivID"] == "1" || $_SESSION["DivID"] == "2" || $_SESSION["DivID"] == "3"){
					$DomPD = getPDNotification($cnsStage, 6,"DOM");
					$LTPD  = getPDNotification($cnsStage, 6,"LT");
					$HTPD  = getPDNotification($cnsStage, 6,"HT");
				}
				else{
					$DomPD = getPDNotification($cnsStage, 7,"DOM");
					$LTPD  = getPDNotification($cnsStage, 7,"LT");
					$HTPD  = getPDNotification($cnsStage, 7,"HT");
					$LTPD  = $LTPD + getPDNotification($cnsStage, 4,"LT");
					$HTPD  = $HTPD + getPDNotification($cnsStage, 4,"HT");
					$RALTPD= getPDNotification($cnsStage, 8,"LT");
					$RAHTPD= getPDNotification($cnsStage, 8,"HT");
				}
			}
			elseif($_SESSION["DesID"] == 2){
				$cnsStage = 3;
				if($_SESSION["DivID"] == "1" || $_SESSION["DivID"] == "2" || $_SESSION["DivID"] == "3"){
					$DomPD    = getPDNotification($cnsStage, 3,"DOM");
					$LTPD     = getPDNotification($cnsStage, 6,"LT");
					$LTPD     = $LTPD + getPDNotification($cnsStage, 3,"LT"); //After JE(O & M) pass to AE(O & M)
					$HTPD     = getPDNotification($cnsStage, 6,"HT");
					$HTPD     = $HTPD + getPDNotification($cnsStage, 3,"HT"); //After JE(O & M) pass to AE(O & M)
					$MTRDOMPD = getPDNotification($cnsStage, 7,"DOM");
					$MTRLTPD  = getPDNotification($cnsStage, 7,"LT");
					$MTRHTPD  = getPDNotification($cnsStage, 7,"HT");
				}
				else{
					$DomPD = getPDNotification($cnsStage, 3,"DOM");
					$LTPD  = getPDNotification($cnsStage, 4,"LT");
					$HTPD  = getPDNotification($cnsStage, 4,"HT");
				}
			}
			//$DomPD = getPDNotification($cnsStage, $cnsappStage,"DOM");
			//$LTPD = getPDNotification($cnsStage, $cnsappStage,"LT");
			//$HTPD = getPDNotification($cnsStage, $cnsappStage,"HT");
			if($DesID == 3){
				$LTPD = $LTPD + getPDNotification(1, 3,"LT");
				$HTPD = $HTPD + getPDNotification(1, 3,"HT");
			}
			if($LTPD > 0){
				$PDLT     = $PDLT + $LTPD; // LT
				$NRNot    = $PDLT; //New Request
				$PDREQNot = $PDLT; //Request
				$PDNot    = $PDLT; // PD
				$notif["NRLT"] = $LTPD; // LT
			}
			if($HTPD > 0){
				$PDHT     = $PDHT + $HTPD; // HT
				$NRNot    = $NRNot + $PDHT; //New Request
				$PDREQNot = $PDREQNot + $PDHT; //Request
				$PDNot    = $PDNot + $PDHT; // PD
				$notif["NRHT"] = $HTPD;// HT
			}
			if($DomPD > 0){
				$PDDom    = $PDDom + $DomPD;
				$NRNot    = $NRNot + $DomPD;
				$PDNot    = $PDNot + $DomPD;
				$PDREQNot = $PDREQNot + $DomPD;
				//$str = $str . "NCDOMQ:" . $DomQ . ";";
				$notif["NRDOM"] = $DomPD;
			}
			if($MTRDOMPD > 0){
				$MTRPD    = $MTRPD + $MTRDOMPD; // DOM for meter
				//$NRNot = $NRNot + $MTRDOMPD; //New Request
				$PDREQNot = $PDREQNot + $MTRDOMPD; //Request
				$PDNot    = $PDNot + $MTRDOMPD; // PD
				$notif["MTRDOMPD"] = $MTRDOMPD; // DOM for meter
			}
			if($MTRLTPD > 0){
				$MTRPD    = $MTRPD + $MTRLTPD; // LT for meter
				//$NRNot = $NRNot + $MTRLTPD; //New Request
				$PDREQNot = $PDREQNot + $MTRLTPD; //Request
				$PDNot    = $PDNot + $MTRLTPD; // PD
				$notif["MTRLTPD"] = $MTRLTPD; // LT for meter
			}
			if($MTRHTPD > 0){
				$MTRPD    = $MTRPD + $MTRHTPD; // HT for meter
				//$NRNot = $NRNot + $MTRHTPD; //New Request
				$PDREQNot = $PDREQNot + $MTRHTPD; //Request
				$PDNot    = $PDNot + $MTRHTPD; // PD
				$notif["MTRHTPD"] = $MTRHTPD; // HT for meter
			}
			if($RALTPD > 0){
				$RAPD     = $RAPD + $RALTPD; // LT after released application
				$PDREQNot = $PDREQNot + $RALTPD; //Request
				$PDNot    = $PDNot + $RALTPD; // PD
				$notif["RALTPD"] = $RALTPD; // LT after released application
			}
			if($RAHTPD > 0){
				$RAPD     = $RAPD + $RAHTPD; // HT after released application
				$PDREQNot = $PDREQNot + $RAHTPD; //Request
				$PDNot    = $PDNot + $RAHTPD; // PD
				$notif["RAHTPD"] = $RAHTPD; // HT after released application
			}
		}
		// PD Online application
		$PDLT = 0;$PDHT = 0; // PD menu
		if($_SESSION["DesID"] == 10){
			//$cnsDom = getPDNotification($cnsStage, 1,"DOM");
			$LTPD = getPDNotification(0, 9,"LT");
			$HTPD = getPDNotification(0, 9,"HT");
			$PDOA = 0;
			if($LTPD > 0){
				$PDLT     = $PDLT + $LTPD; // Online LT
				$PDOA     = $PDOA + $LTPD; // Online Application
				$PDREQNot = $PDREQNot + $LTPD; // Request
				$PDNot    = $PDNot + $LTPD; // PD
				$notif["OALPD"] = $notif["OLTPD"] = $LTPD; // Online LT
			}
			if($HTPD > 0){
				$PDHT     = $PDHT + $HTPD; // Online HT
				$PDOA     = $PDOA + $HTPD; // Online Application
				$PDREQNot = $PDREQNot + $HTPD; // Request
				$PDNot    = $PDNot + $HTPD; // PD
				$notif["OAHPD"] = $notif["OHTPD"] = $HTPD; // Online HT
			}
			if($PDOA > 0){
				$notif["PDOnline"] = $PDOA; // Online Application
			}
		}
		// PD Query application
		$PDLT = 0;$PDHT = 0; // PD menu
		if($_SESSION["DesID"] == 10){
			//$cnsDom = getPDNotification($cnsStage, 1,"DOM");
			$LTPD = getPDNotification(12, 7,"LT");
			$HTPD = getPDNotification(12, 7,"HT");
			$PDQA = 0;
			if($LTPD > 0){
				$PDLT     = $PDLT + $LTPD; // Online LT
				$PDQA     = $PDQA + $LTPD; // Query Application
				$PDREQNot = $PDREQNot + $LTPD; // Request
				$PDNot    = $PDNot + $LTPD; // PD
				$notif["QLTPD"] = $LTPD; // Online LT
			}
			if($HTPD > 0){
				$PDHT     = $PDHT + $HTPD; // Online HT
				$PDQA     = $PDQA + $HTPD; // Online Application
				$PDREQNot = $PDREQNot + $HTPD; // Request
				$PDNot    = $PDNot + $HTPD; // PD
				$notif["QHTPD"] = $HTPD; // Online HT
			}
			if($PDQA > 0){
				$notif["PDQuery"] = $PDQA; // Query Application
			}
		}
		// PD Correction application
		$PDLT   = 0;$PDHT   = 0; // PD menu
		$PDCorr = 0;
		if($_SESSION["DesID"] == 3 || $_SESSION["DesID"] == 10){
			if($_SESSION["DesID"] == 3){
				$cnsStage = 2;
			}
			else
			if($_SESSION["DesID"] == 10){
				$cnsStage = 0;
			}
			$LTPD = getPDNotification($cnsStage, 4,"LT");
			$HTPD = getPDNotification($cnsStage, 4,"HT");
			if($_SESSION["DesID"] == 10){
				if($_SESSION["DivID"] == "1" || $_SESSION["DivID"] == "2" || $_SESSION["DivID"] == "3"){
					$DomPD = getPDNotification($cnsStage, 3,"DOM");
					if($DomPD > 0 ){
						//$PDDOM = $PDDOM + $DomPD; // DOM
						$PDCorr   = $PDCorr + $DomPD; // Correction
						$PDREQNot = $PDREQNot + $DomPD; // Request
						$PDNot    = $PDNot + $DomPD; // PD
						$notif["CorrDOMPD"] = $DomPD;
					}
				}
				else{
					$LTPD = getPDNotification($cnsStage, 3,"LT");
					$HTPD = getPDNotification($cnsStage, 3,"HT");
				}
			}
			if($LTPD > 0 ){
				$PDLT     = $PDLT + $LTPD; // LT
				$PDCorr   = $PDCorr + $LTPD; // Correction
				$PDREQNot = $PDREQNot + $LTPD; // Request
				$PDNot    = $PDNot + $LTPD; // PD
				$notif["CorrLTPD"] = $LTPD;
			}
			if($HTPD > 0 ){
				$PDHT     = $PDHT + $HTPD; // HT
				$PDCorr   = $PDCorr + $HTPD; // Correction
				$PDREQNot = $PDREQNot + $HTPD; // Request
				$PDNot    = $PDNot + $HTPD; // PD
				$notif["CorrHTPD"] = $HTPD;
			}
		}
		if($PDCorr > 0 )
		$notif["PDCorrection"] = $PDCorr ; // for corrction menu
		//------------------------------------------------
		if($RAPD > 0){
			$PDNot    = $PDCorr + $NRNot + $RAPD;
			$PDREQNot = $PDCorr + $NRNot + $RAPD;
			$notif["RAPD"] = $RAPD;
		}
		if($MTRPD > 0){
			$PDNot    = $NRNot + $MTRPD;
			$PDREQNot = $NRNot + $MTRPD;
			$notif["MTRPD"] = $MTRPD;
		}
		if($PDNot > 0){
			$notif["PD"] = $PDNot;
			$notif["PDReq"] = $PDREQNot;
		}
		if($NRNot > 0){
			$notif["NR"] = $NRNot;
		}
	}
	
	#IO_START
	{
		//''' IO Notification;
		$recLtr = 0;
		$flag   = 0;
		$flag   = getIONotification();
		// $flag = 0;
		if($flag > 0){
			$IONot = $flag;
			$notif["IORec"] = $flag;
		}
		// Bill Notification for Accountant
		$flag = 0;
		if($DesID == 9 )
		$flag = getIONotification(true);
		if($flag > 0){
			$IONot = $IONot + $flag;
			$notif["Bills"] = $flag;
		}
		if($IONot > 0){
			$notif["IO"] = $IONot;
			$_SESSION["oIO"] = $_SESSION["IO"];
			$_SESSION["IO"] = $IONot;
		}
	}
	#IO_END
	
	#CONTRACTOR_START
	{
		////Contractor Notification
		$cnsStage      = 0;$Contnew       = 0;$newCont       = 0;$CONTREQNot    = 0;$CONTNot       = 0;$CONTDocattach = 0;$CONTQueryapp  = 0;$ContNEW       = 0;$CONTLT        = 0;$CONTHT        = 0;$CONTDOM       = 0;$CONTNEWREQ    = 0;
		if($_SESSION["DesID"] == 1){
			$cnsStage = 4;
		}
		elseif($_SESSION["DesID"] == 3){
			$cnsStage = 1;
		}
		elseif($_SESSION["DesID"] == 2){
			$cnsStage = 3;
		}
		elseif($_SESSION["DesID"] == 10){
			$cnsStage = 0;
		}
		elseif($_SESSION["DesID"] == 20){
			$cnsStage = 0;
		}
		if($_SESSION["DesID"] == 3){
			$Contnew = getCONTRACTORNotification($cnsStage, 3);
			$Contnew = $Contnew + getCONTRACTORNotification(1, 4);
		}
		elseif($_SESSION["DesID"] == 2)
		$Contnew = getCONTRACTORNotification($cnsStage, 4);
		elseif($_SESSION["DesID"] == 1)
		$Contnew = getCONTRACTORNotification($cnsStage, 4);
		elseif($_SESSION["DesID"] == 10)
		$Contnew = getCONTRACTORNotification($cnsStage, 9);
		//echo $Contnew;
		if($Contnew > 0){
			////new applications
			$newCont    = $newCont + $Contnew;//new
			$CONTREQNot = $newCont;//req
			$CONTNot    = $newCont;
			$notif["NEWCONT"] = $newCont;
		}
		//////pending Doc Attach at clerk
		if($_SESSION["DesID"] == 10){
			$CONTDocattach = getCONTRACTORNotification(2, 9, 1);
			if($CONTDocattach > 0){
				////new applications
				$docattachCont = $docattachCont + $CONTDocattach;//new
				$CONTREQNot    = $CONTREQNot + $docattachCont;//req
				$CONTNot       = $CONTNot + $docattachCont;
				$notif["DOCATTACHCONT"] = $docattachCont;
			}
		}
		/////Queried application
		if($_SESSION["DesID"] == 10){
			$CONTQueryapp = getCONTRACTORNotification(12, 7);
			if($CONTQueryapp > 0){
				////query applications
				$queryappCont = $queryappCont + $CONTQueryapp;//new
				$CONTREQNot   = $CONTREQNot + $queryappCont;//req
				$CONTNot      = $CONTNot + $queryappCont;
				$notif["QUERYAPPCONT"] = $queryappCont;
			}
		}
		///Renew application
		if($_SESSION["DesID"] == 3){
			$Contrenew = getCONTRACTORNotification($cnsStage, 3, 2);
			$Contnew   = $Contrenew + getCONTRACTORNotification(1, 4, 2);
		}
		elseif($_SESSION["DesID"] == 2)
		$Contrenew = getCONTRACTORNotification($cnsStage, 4, 2);
		elseif($_SESSION["DesID"] == 1)
		$Contrenew = getCONTRACTORNotification($cnsStage, 4, 2);
		elseif($_SESSION["DesID"] == 10)
		$Contrenew = getCONTRACTORNotification($cnsStage, 9, 2);
		if($Contrenew > 0){
			////renew applications
			$renewCont = $renewCont + $Contrenew;//new
			$CONTREQNot= $CONTREQNot + $renewCont;//req
			$CONTNot   = $CONTNot + $renewCont;
			$notif["RENEWAPPCONT"] = $renewCont;
		}
		/// Correction Application
		if($_SESSION["DesID"] == 10){
			$Contcorr = getCONTRACTORNotification(0, 3);
		}
		else
		if($_SESSION["DesID"] == 3){
			$Contcorr = getCONTRACTORNotification(2, 4);
		}
		if($Contcorr > 0){
			////correction applications
			$correCont = $correCont + $Contcorr;//new
			$CONTREQNot= $CONTREQNot + $correCont;//req
			$CONTNot   = $CONTNot + $correCont;
			$notif["CORRAPPCONT"] = $correCont;
		}
		//verify applications
		if($_SESSION["DesID"] == 2){
			$Contverify = getCONTRACTORNotification(3, 5);
		}
		if($_SESSION["DesID"] == 10){
			$Contverify = getCONTRACTORNotification(1, 6);
		}
		if($Contverify > 0){
			////correction applications
			$verifyCont = $verifyCont + $Contverify;//new
			$CONTREQNot = $CONTREQNot + $verifyCont;//req
			$CONTNot    = $CONTNot + $verifyCont;
			$notif["VERIFYAPPCONT"] = $verifyCont;
		}
		///////
		if($CONTREQNot > 0){
			$notif['CONTREQ'] = $CONTREQNot;
		}
		if($CONTNot > 0){
			$notif['CONTRACTOR'] = $CONTNot;
		}
	}
	#CONTRACTOR_END
	
	#FILES_START
	{
		//----------------------------------------------------//
		//documents notification
		$files     = 0;
		$documents = 0;
		// active documents
		$activedocs= getdocuments();
		if( $activedocs > 0){
			$documents = $documents + $activedocs;
			$notif["activedocs"] = $activedocs;
		}
		if($_SESSION["DesID"] == "1" || (hasPost($_SESSION["UID"],"Document Store In-Charge",$_SESSION["DesID"]))  ){
			// pending
			$pending = pendingdoc();
			if( $pending > 0){
				$documents = $documents + $pending;
				$notif["ptadocs"] = $pending;
			}
			// lost
			$lost = lostdoc();
			if( $lost > 0){
				$documents = $documents + $lost;
				$notif["lostdocs"] = $lost;
			}
			//
			// delete
			$delete = deletedoc();
			if( $delete > 0){
				$documents = $documents + $delete;
				$notif["deldocs"] = $delete;
			}
			//
			// defaulter
			$default = defaultdoc();
			if( $default > 0){
				$documents = $documents + $default;
				$notif["defdocs"] = $default;
			}
			//
		}
		else
		if($_SESSION["DesID"] != "1" && !(hasPost($_SESSION["UID"],"Document Store In-Charge",$_SESSION["DesID"]))){
			// My docs
			$mydocs = 0;
			$mydocs = mydocument();
			if( $mydocs > 0){
				$notif["mydocs"] = $mydocs;
			}
			//
			$documents = $documents + $mydocs;
		}
		$notif["docs"] = $documents ;
		// docs request
		$req = requestdoc();
		if( $req > 0){
			$notif["requests"] = $req;
		}
		//
		// Permission
		$per = 0;
		//if ($_SESSION["DesID"] == "1" || $_SESSION["DesID"] == "2"   )
		{
			$per = permission();
			if( $per > 0){
				$notif["permis"] = $per;
			}
		}
		$per = 0;
		//if ($_SESSION["DesID"] == "1" || $_SESSION["DesID"] == "2"   )
		{
			$per = unauthorised();
			if( $per > 0){
				$notif["unauthor"] = $per;
			}
		}
		//
		$cir = Circular();
		if($cir == 0){
			$cir = "";
		}
		$notif["Circular"] = $cir;
		$notif["files"] = $documents + $req + $per + $cir;
	}
	#FILES_END 
	
	#CONTRACTOR_START
	{
		
		if($_SESSION["DesID"] == 20){
			$ContNEW = getCONTNotification(0, 9, 0);
			//$ContNEW = $ContNEW + getCONTNotification(3, 3, 0);
			/*$CONTLT =  getCONTNotification(0, 0, 0,"LT");
			$CONTHT =  getCONTNotification(0, 0, 0,"HT");
			$CONTDOM =  getCONTNotification(0, 0, 0,"DOM");
			$CONTLTAD= getCONTNotification(2, 9, 0,"LT");
			$CONTHTAD= getCONTNotification(2, 9, 0,"HT");
			$CONTDOMAD= getCONTNotification(2, 9, 0,"DOM");
			$CONTLTPA= getCONTNotification(0, -1, 0,"LT");
			$CONTHTPA= getCONTNotification(0, -1, 0,"HT");
			$CONTDOMPA= getCONTNotification(0, -1, 0,"DOM");
			*/
		}
		if($ContNEW > 0){
			////at contractor side
			$NewCont = $NewCont + $ContNEW;//new
			$CONTMAIN= $CONTMAIN + $NewCont;
			$notif["CONTNEW"] = $NewCont;
		}
		/*if ($CONTLT>0){////at contractor side
		$LTcon=$LTcon + $CONTLT;//new
		$CONTNEWREQ = $CONTNEWREQ + $LTcon;//req
		$CONTMAIN=$CONTMAIN + $LTcon;
		$CONTOFF = $CONTOFF + $LTcon;
		$notif["CONTLT"]=$LTcon;
		}
		/////////offline consumer app by contractor
		if ($CONTHT>0){////at contractor side
		$HTcon=$HTcon + $CONTHT;//new
		$CONTNEWREQ = $CONTNEWREQ + $HTcon;//req
		$CONTMAIN=$CONTMAIN + $HTcon;
		$CONTOFF = $CONTOFF + $HTcon;
		//$CONTREQNot = $CONTREQNot + $NewCont;//req
		//$CONTNot=$CONTNot+$NewCont;
		$notif["CONTHT"]=$HTcon;
		}
		if ($CONTDOM>0){////at contractor side
		$DOMcon=$DOMcon + $CONTDOM;//new
		$CONTNEWREQ = $CONTNEWREQ + $DOMcon;//req
		$CONTMAIN=$CONTMAIN + $DOMcon;
		$CONTOFF = $CONTOFF + $DOMcon;
		//$CONTREQNot = $CONTREQNot + $NewCont;//req
		//$CONTNot=$CONTNot+$NewCont;
		$notif["CONTDOM"]=$DOMcon;
		}
		/////pending doc attach by contractor.
		if ($CONTLTAD>0){////at contractor side
		$LTADcon=$LTADcon + $CONTLTAD;//new
		$CONTAD = $CONTAD + $LTADcon;//req
		$CONTMAIN=$CONTMAIN + $LTADcon;
		$CONTOFF = $CONTOFF + $LTADcon;
		$notif["CONTLTAD"]=$LTADcon;
		}
		if ($CONTHTAD>0){////at contractor side
		$HTADcon=$HTADcon + $CONTHTAD;//new
		$CONTAD = $CONTAD + $HTADcon;//req
		$CONTMAIN=$CONTMAIN + $HTADcon;
		$CONTOFF = $CONTOFF + $HTADcon;
		$notif["CONTHTAD"]=$HTADcon;
		}
		if ($CONTDOMAD>0){////at contractor side
		$DOMADcon=$DOMADcon + $CONTDOMAD;//new
		$CONTAD = $CONTAD + $DOMADcon;//req
		$CONTMAIN=$CONTMAIN + $DOMADcon;
		$CONTOFF = $CONTOFF + $DOMADcon;
		$notif["CONTDOMAD"]=$DOMADcon;
		}
		if ($CONTLTPA>0){////at contractor side
		$LTPAcon=$LTPAcon + $CONTLTPA;//new
		$CONTPAREQ = $CONTPAREQ + $LTPAcon;//req
		$CONTMAIN=$CONTMAIN + $LTPAcon;
		$CONTOFF = $CONTOFF + $LTPAcon;
		$notif["CONTLTPA"]=$LTPAcon;
		}
		if ($CONTHTPA>0){////at contractor side
		$HTPAcon=$HTPAcon + $CONTHTPA;//new
		$CONTPAREQ = $CONTPAREQ + $HTPAcon;//req
		$CONTMAIN=$CONTMAIN + $HTPAcon;
		$CONTOFF = $CONTOFF + $HTPAcon;
		$notif["CONTHTPA"]=$HTPAcon;
		}
		if ($CONTDOMPA>0){////at contractor side
		$DOMPAcon=$DOMPAcon + $CONTDOMPA;//new
		$CONTPAREQ = $CONTPAREQ + $DOMPAcon;//req
		$CONTMAIN=$CONTMAIN + $DOMPAcon;
		$CONTOFF = $CONTOFF + $DOMPAcon;
		$notif["CONTDOMPA"]=$DOMPAcon;
		}
		if($CONTOFF>0){
		$notif['CONTOFF']=$CONTOFF;
		}
		if($CONTPAREQ>0){
		$notif['CONTPAREQ']=$CONTPAREQ;
		}
		if($CONTAD>0){
		$notif['CONTAD']=$CONTAD;
		}
		if($CONTNEWREQ>0){
		$notif['CONTNEWREQ']=$CONTNEWREQ;
		}
		*/
		if($CONTMAIN > 0){
			$notif['CONTMAIN'] = $CONTMAIN;
		}
	}
	#CONTRACTOR_END
	
	#MRT_START
	{
		
		$MRT = getMRTNotification();
		if(is_array($MRT))
		$notif = array_merge($notif,$MRT);
		//------------------------------------------//
	}
	#MRT_END
	
	#DGSET_START
	{
		if(hasPost($_SESSION['UID'],'tech',$_SESSION['DesID'])){

			$DGNOCReject = $DGNOCQuery  = $DGNOC       = $DGOnline    = $DGNOCCorr   = 0;

			if($_SESSION['DesID'] == 10){
				$DGOnline = getDGSetNotification(9,0);
				$stage    = $_SESSION['DesID'];
				$appStage = 5;
				$DGNOCCorr= getDGSetNotification($appStage,$stage);

			}
			else{

				$stage = $_SESSION['DesID'];
				if($stage == 3)
				$appStage = '3,4';
				else
				if($stage == 101)
				$appStage = 6;
				else
				$appStage = 4;

				$DGNOC    = getDGSetNotification($appStage,$stage);

				$stage    = $_SESSION['DesID'];
				$appStage = 5;
				$DGNOCCorr= getDGSetNotification($appStage,$stage);
				if($_SESSION['DesID'] == 3){
					$stage      = 103;
					$appStage   = 6;
					$DGNOCQuery = getDGSetNotification($appStage,$stage);
					$stage      = $_SESSION['DesID'];
					$appStage   = 6;
					$DGNOCReject= getDGSetNotification($appStage,$stage);
				}
			}

			if($DGNOC > 0)
			$notif['DGSetNOC'] = $DGNOC;
			if($DGNOCQuery > 0)
			$notif['NOCQuery'] = $DGNOCQuery;
			if($DGNOCReject > 0)
			$notif['NOCReject'] = $DGNOCReject;
			if($DGOnline > 0)
			$notif['DGSetOnline'] = $DGOnline;
			if($DGNOCCorr > 0)
			$notif['NOCCorr'] = $DGNOCCorr;

			$DGSetReq = $DGNOCReject + $DGNOCQuery + $DGNOC + $DGOnline + $DGNOCCorr;
			if($DGSetReq > 0)
			$notif['DGSetReq'] = $notif['DGSetMenu'] = $DGSetReq;

			if($DGNOCCorr > 0){
				if($DGSetReq == $DGNOCCorr){
					$notif["DGSClass"] = "badge-danger";
				}
				else{
					$notif["DGSClass"] = "badge-warning";
				}
			}
			else{
				$notif["DGSClass"] = "badge-success";
			}
		}
	}
	#END_DGSET
	
	#X2 Start
	
	{
		$json=ddCurl(oimsURL.'offix.apis/getNotif/ddId/'.$_SESSION["UID"].'/stage/'.$_SESSION["DesID"]);
		$data= json_decode($json,true);
		
		if(is_array($data['notifs']))
		$notif = array_merge($notif,$data['notifs']);
		
	}
	
	#X2 end
	
	$notif["desID"] = $_SESSION["DesID"];
	$mydate = now('Y-m-d');
	$month  = date("m",strtotime($mydate));
	$_SESSION["month"] = $month;
	$_SESSION["notif"] = $notif;
	//$notif["Session"] = base64_encode(serialize($_SESSION));
	/*
	'if ($StoreNot>0){
	'    ScriptManager.RegisterStartupScript(Me.Page, Me.Page.GetType(), Guid.NewGuid().ToString, "inform('You have " . $StoreNot . " request in Store','information','bottomRight');", True);
	'}
	'if (Not $_SESSION["DesID"]==4){
	'    if ($ESTNot>0){
	'        ScriptManager.RegisterStartupScript(Me.Page, Me.Page.GetType(), Guid.NewGuid().ToString, "inform('You have " . $ESTNot . " request in Estimate','alert','bottomRight');", True);
	'    }
	'    if ($cnsNot>0){
	'        ScriptManager.RegisterStartupScript(Me.Page, Me.Page.GetType(), Guid.NewGuid().ToString, "inform('You have " . $cnsNot . " request in Consumer','warning','bottomRight');", True);
	'    }
	'}
	*/
	return json_encode($notif);
}
function logout(){
	$date = new DateTime('NOW',new DateTimeZone('Asia/Calcutta'));
	$query= "INSERT INTO tm_activity (actDate,Description,UserId,Division,Designation,Type)
	VALUES (now(),'User Log Out from IP : " . $_SERVER['REMOTE_ADDR'] . "!!!','" . $_SESSION["UID"] . "','"
	. $_SESSION["Division"] . "','" . $_SESSION["Designation"] . "','Login')";
	execQuery($query);
	$query= "update tm_login set isLogin=1 where islogin=2 and id='" . $_SESSION["DevID"] . "'";
	execQuery($query);
	session_destroy();
	setcookie("OIMSRememberMe", "0", ( - 3 * 7 * 24 * 60 * 60));
	return "true";
}
function getActivity(){
	$query = "Select type,status,toDate(NDate) as date,`read` from TM_Notifications where userid=".$_SESSION["UID"] ." order by Ndate desc";
	$res   = fetchRows($query);
	$rows  = resultToArray($res);
	echo json_encode($rows);
}
function ActivityRead(){
	$query = "update TM_Notifications set `read`= 1 where userid=".$_SESSION["UID"];
	echo json_encode(array("success"=> execQuery($query)));
}
function EstChart(){
	if(!(hasPost($_SESSION["UID"],'Admin',$_SESSION["DesID"]))){
		return [];
	}

	$query = "select FY,cast(sum(ts) as decimal(10,0)) as ts,cast(sum(tender)  as decimal(10,0)) as tender,cast(sum(orders) as decimal(10,0)) as orders, cast(sum(bill) as decimal(10,0)) as bill  from (
	SELECT getfy(date_order) as FY,sum(tsamt) as ts,0 as tender,0 as orders, 0 as bill FROM tm_estimaterequest where date_order is not null group by getfy(date_order)
	union all SELECT getfy(date_tender)  as FY,0 as ts,sum(tenderamt) as tender,0 as orders,0 as bill  FROM tm_estimaterequest where date_tender is not null group by getfy(date_tender)
	union all SELECT getfy(fodate)  as FY,0 as ts,0 as tender,sum(orderamt) as orders,0 as bill FROM tm_estimaterequest where fodate is not null group by getfy(fodate)
	union all SELECT getfy(savedate)  as FY,0 as ts ,0 as tender,0 as orders,sum(billamt) as bill FROM tm_est_bill where savedate is not null group by getfy(savedate) ) t group by FY order by 1;

	";
	$res   = fetchRows($query);
	$rows  = resultToArray($res);
	$data  = array();
	$yAxis = array();
	$data2 = array();
	$data1 = array();
	foreach($rows as $row){
		$yAxis[] = $row["FY"];

		array_push($data1,array("y"     =>$row["FY"],"ts"    =>$row["ts"],"tender"=>$row["tender"],"orders"=>$row["orders"],"bill"  =>$row["bill"]));
		//        array_push($data1,array("y"=>$row["FY"],"ts"=>$row["ts"],"tender"=>$row["tender"]));

	}
	$data2[] = "ts";
	$data2[] = "tender";
	$data2[] = "orders";
	$data2[] = "bill";

	$data["data"] = $data1;
	$data["cols"] = $yAxis;
	$data["body"] = $data2;
	return $data;
}
function filter8($value){
	return ($value['type'] == 8);
}
function filter13($value){
	return ($value['type'] == 13);
}
function charts(){
	if(!(hasPost($_SESSION["UID"],'Tech','3') || hasPost($_SESSION["UID"],'Tech','2') || hasPost($_SESSION["UID"],'Admin',$_SESSION["DesID"]))){
		return [];
	}

	$s['select'] = "iname as Item,getBalance(binno,l.LocID) as Stock,LocName as Location,typeid as type";
	$s['where']['typeid']['op'] = "in";
	$s['where']['typeid']["val"] = "13,8";
	if((hasPost($_SESSION["UID"],'Tech','3') || hasPost($_SESSION["UID"],'Tech','2')) && !hasPost($_SESSION["UID"],'Admin',$_SESSION["DesID"])){
		$s['where']["locid"] = $_SESSION["LocID"];
	}
	$s['orderBy'] = "typeid";
	$records = (array)select('tm_item inner join tm_location l',$s)->rows;
	//$query = "select iname as Item,getBalance(binno,l.LocID) as Stock,LocName as Location,typeid as type
	//from tm_item inner join tm_location l where typeid in (13,8) order by typeid";

	//$res = fetchRows($query);
	//$records = resultToArray($res);
	$data = array();

	$types = [8,13];
	foreach($types as $type){
		$yAxis = array();
		$rows = [];
		$rows = array_filter($records,"filter$type");
		//print_r($rows);
		//return;
		//for($i = 0;$i <= count($rows);$i++){
		foreach($rows as $row){
			if($row['Location'] != ''){
				if(!in_array($row['Location'], $yAxis)){
					$yAxis[] = $row['Location'];
				}
			}
		}
		// get data
		$data1 = array();
		$data2 = array();
		for($i = 0;$i < count($yAxis);$i++){
			$data1[$i] = array("y"=>$yAxis[$i]);
			foreach($rows as $row){
				if($row["Location"] == $yAxis[$i]){

					if($row["Stock"] > 0){
						$data1[$i][$row["Item"]] = $row["Stock"];
						array_push($data2,$row["Item"]);
					}
				}
			}

		}
		//
		$data[$type]["data"] = $data1;
		$data[$type]["cols"] = $yAxis;
		$data[$type]["body"] = $data2;

	}
	$a = count($rows);
	return $data;
}
?>