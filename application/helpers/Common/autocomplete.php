<?php
// contains utility functions mb_stripos_all() and apply_highlight()
if (!defined('OIMSCheck')) {
    define('OIMSCheck',true);

    require_once '../globals.php';
}
require_once 'local_utils.php';

// prevent direct access
$isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND
strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';
if (!$isAjax && isset($_GET['debuggging'])) {
    $user_error = 'Access denied ...';
    trigger_error($user_error, E_USER_ERROR);
}

// get what user typed in autocomplete input
$t      = $_GET['term'];
$term   = trim($t);
$a_json = array();
$a_json_row = array();

$a_json_invalid = array(array("id"   => "#","value"=> $term,"label"=> "Only letters and digits are permitted..."));
$json_invalid = json_encode($a_json_invalid);

// replace multiple spaces with one
$term         = preg_replace('/\s+/', ' ', $term);
/*
// SECURITY HOLE ***************************************************************
// allow space, any unicode letter and digit, underscore and dash
if(preg_match("/[^\040\pL\pN_-]/u", $term)) {
print $json_invalid;
exit;
}
// *****************************************************************************
*/

$parts        = explode(' ', $term);
$p            = count($parts);

/**
* Create SQL
*/
if (isset($_REQUEST["item"])) {
    $sql = "Select binno,IName from tm_Item where 1=1 ";
    for ($i = 0; $i < $p; $i++) {
        $sql .= " AND iname LIKE '%". valData($parts[$i]) . "%'";
    }
}
else
if (isset($_REQUEST["equipment"])) {
    $sql = "Select id,name from pm_equipment where 1=1 ";
    for ($i = 0; $i < $p; $i++) {
        $sql .= " AND name LIKE '%". valData($parts[$i]) . "%'";
    }
}
else
if (isset($_REQUEST["equipmentAlias"])) {
    $sql = "Select distinct alias,alias from pm_equipment_specification where 1=1 ";
    for ($i = 0; $i < $p; $i++) {
        $sql .= " AND alias LIKE '%". valData($parts[$i]) . "%'";
    }
}
else
if (isset($_REQUEST["equipmentSrno"])) {
    $sql = "Select distinct serialno,serialno from pm_equipment_specification where 1=1 ";
    for ($i = 0; $i < $p; $i++) {
        $sql .= " AND serialno LIKE '%". valData($parts[$i]) . "%'";
    }
}
else										 
if (isset($_REQUEST["checklist"])) {
    $sql = "Select id,checklist from pm_checklist_master where 1=1 ";
    for ($i = 0; $i < $p; $i++) {
        $sql .= " AND checklist  LIKE '%". valData($parts[$i]) . "%'";
    }
}
else
if (isset($_REQUEST["transformer"])) {
    $sql = "Select binno,IName from tm_Item where typeid=22 ";
    for ($i = 0; $i < $p; $i++) {
        $sql .= " AND iname LIKE '%". valData($parts[$i]) . "%'";
    }
}
else
if (isset($_REQUEST["party"])) {
    $sql = "Select  pid  ,pName  from TM_PARTY where type=6 and isActive=1 ";
    for ($i = 0; $i < $p; $i++) {
        $sql .= " And pname like '%". valData($parts[$i]) ."%' ";
    }
}
else
if (isset($_REQUEST["io"])) {
    $sql = "Select  pid  ,pName  from TM_PARTY where isActive=1 ";
    for ($i = 0; $i < $p; $i++) {
        $sql .= " And pname like '%". valData($parts[$i]) ."%' ";
    }
    $sql .= " order by divid desc";
}

$rs = fetchRows($sql);
if ($rs->status == 'error') {
    die( 'Something went wrong!!!');
}

$r = (array)$rs->rows;

foreach($r as $row ){
    $a_json_row["id"] = $row[0];
    $a_json_row["value"] = $row[1];
    $a_json_row["label"] = $row[1];
    $a_json_row["text"] = $row[1];
    array_push($a_json, $a_json_row);
}

// highlight search results
$a_json = apply_highlight($a_json, $parts);
$a_json['length'] = count($a_json);
$json = json_encode(utf8ize($a_json));
print $json;
?>