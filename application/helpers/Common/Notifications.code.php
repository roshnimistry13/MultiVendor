<?php

defined('OIMSCheck') or _e(403);
// Emergency Material Notification;
function getEMRNotification( $stage)
{
    $query = "";
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    /*if (($_SESSION["DesID"] == 2 && $_SESSION["DivID"] != 5) ) {

        $query = ' select sum(cnt) from ( SELECT count(*) as cnt FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme             as         s,tm_post  p WHERE  M.INDNO in ( select INDNO from tm_login '.
        ' where  underDivision = ' . $_SESSION["DivID"] . ') and ((m.DivID= ' . $_SESSION["DivID"] .
        ' and m.pid<3) ) and M.rType="Emergency" and stage=' . $stage . ' and M.Userid = l.ID and s.SID=M.schemeID and p.id=m.pid ';

        $query = $query  .' Union all SELECT count(*) cnt FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s, tm_post p ' .
        ' WHERE (m.pid in ( select pid from td_postassignment where pid>2 and  active=1 and uid =' . $uid . '))  and M.rType="Emergency" and stage=' . $stage . ' and M.Userid = l.ID and s.SID=M.schemeID  and p.id=m.pid  ) as cnt';
    }
    else {
        $query = " SELECT count(*) FROM TM_MaterialRequested M,tm_login L " .
        " WHERE stage=" . $stage . " and rType='Emergency' and M.Userid = l.ID and m.locid=" . $_SESSION["DefaultLocation"];
    }
	*/
	if (!hasPost($_SESSION["UID"],'O & M',2)) {
            $query = "SELECT count(*)
            FROM TM_MaterialRequested M,tm_login L,TM_Scheme s ,tm_post p
            WHERE p.id=m.pid and  stage=$stage and M.Userid = l.ID and M.schemeID=s.sid and rtype='Emergency'";
        }
        else {
            $query = " select sum(cnt) from ( SELECT count(*) as cnt
            FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s,tm_post p WHERE  M.INDNO in ( select INDNO from tm_login
            where  underDivision = " . $_SESSION["DivID"] . ") and ((m.DivID= " . $_SESSION["DivID"] .
            " and m.pid<3) ) and  stage=1 and M.Userid = l.ID and s.SID=M.schemeID and p.id=m.pid  and rtype='Emergency'
            UNION ALL SELECT count(*) as cnt
            FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s, tm_post p WHERE (m.pid in ( select pid from td_postassignment
            where pid>1 and  active=1 and uid =" . $_SESSION["UID"] . ")) and  stage=" . $stage . " and M.Userid = l.ID and s.SID=M.schemeID  and
            p.id=m.pid  and rtype='Emergency') as cnt" ;
        }
    return execScalar($query);
}

////////   Material return Notification;

function getRMNotification()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];
    $cnt1  = 0;$cnt2  = 0;
    $query = "";

    $stage = 0;

    if ($_SESSION["Designation"] == "Executive Engineer") {
        $stage = 3;
    }
    elseif ($_SESSION["Designation"] == "Junior Engineer") {
        $stage = - 1;
    }
    elseif ($_SESSION["Designation"] == "Assistant Engineer") {
        $t = hasPost($_SESSION["UID"],'Store',2);
        if (hasPost($_SESSION["UID"],'Store',2)) {
            $stage = 2;
        }
        else {
            $stage = 4;
        }
    }
    elseif ($_SESSION["Designation"] == "Store Keeper") {
        $stage = 1;
    }
    else {
        return 0;
    }

    if ($stage == 4) {
        $query = " SELECT count(*) FROM tm_materialreturn AS M ,tm_login AS l,tm_post p " .
        " WHERE  M.INDNO in ( select INDNO from tm_login,tm_division " .
        " where  underDivision = DivID and DivID = " . $_SESSION["DivID"] . ") and ((m.DivID= " . $_SESSION["DivID"] .
        " and m.pid<3) )  and stage=" . $stage . " and M.Userid = l.ID and p.id=m.pid ";

        $cnt1  = execScalar($query);

        $query = "  SELECT count(*) FROM tm_materialreturn AS M ,tm_login AS l, tm_post p WHERE (m.pid in
        ( select pid from td_postassignment where pid>2 and  active=1 and uid ='$uid'))
        and  stage='$stage' and M.Userid = l.ID and p.id=m.pid";
        $cnt2  = execScalar($query);
    }
    else {
        $query = " SELECT count(*) FROM tm_materialreturn AS M ,tm_login AS l WHERE stage=" . $stage .
        " and M.Userid = l.ID  and M.locid=" . $_SESSION["DefaultLocation"]; //. " and p.id = m.pid ";

        $cnt1  = execScalar($query);
        $cnt2  = 0;

    }

    return ($cnt1 + $cnt2);
}

function getAEEMRNotification( $stage)
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];
    $cnt1  = 0; $cnt2  = 0;

    $query = "";

    $query = " SELECT count(*) FROM TM_MaterialRequested AS M ,tm_login AS l,tm_post p ".
    " WHERE  M.INDNO in ( select INDNO from tm_login,tm_division " .
    " where  underDivision = DivID and DivID = " . $_SESSION["DivID"] . ") and ((m.DivID= " . $_SESSION["DivID"] .
    " and m.pid<3) ) and rType='Emergency' and stage=" . $stage . " and M.Userid = l.ID and p.id=m.pid ";

  
	$query = " SELECT count(*)
            FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s,tm_post p WHERE  M.INDNO in ( select INDNO from tm_login
            where  underDivision = " . $_SESSION["DivID"] . ") and ((m.DivID= " . $_SESSION["DivID"] .
            " and m.pid<3) ) and  stage=" . $stage . " and M.Userid = l.ID and s.SID=M.schemeID and p.id=m.pid  and rtype='Emergency' ";

    $cnt1  = execScalar($query);

    $query = " SELECT count(*) FROM TM_MaterialRequested AS M ,tm_login AS l, tm_post p WHERE (m.pid in " .
    " ( select pid from td_postassignment where pid>1 and  active=1 and uid ='$uid')) " .
    " and rType='Emergency' and  stage=" . $stage . " and M.Userid = l.ID and p.id=m.pid";
	
	$query = " SELECT count(*)
            FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s, tm_post p WHERE (m.pid in ( select pid from td_postassignment
            where pid>1 and  active=1 and uid =" . $_SESSION["UID"] . ")) and  stage=" . $stage . " and M.Userid = l.ID and s.SID=M.schemeID  and
            p.id=m.pid  and rtype='Emergency'";

    $cnt2  = execScalar($query);
/*
if (hasPost($_SESSION["UID"],'Store',2)) {
            $query = "SELECT count(*)
            FROM TM_MaterialRequested M,tm_login L,TM_Scheme s ,tm_post p
            WHERE p.id=m.pid and  (stage=3 or stage=1) and m.DivID= '" . $_SESSION["DivID"] .
            "' and M.Userid = l.ID and M.schemeID=s.sid and rtype='Material'";
        }
        else {
            $query = " 
            UNION ALL " ;
        }
		*/
    return ($cnt1 + $cnt2);
}

//////// Material request Notification;

function getAENotification( $rType )
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];
    $cnt1  = 0; $cnt2  = 0;

    $query = "";

    $query = " SELECT count(*) FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s,tm_post p " .
    " WHERE  M.INDNO in ( select INDNO from tm_login,tm_division " .
    " where  underDivision = DivID and DivID = " . $_SESSION["DivID"] . ") and ((m.DivID= " . $_SESSION["DivID"] .
    " and m.pid<3) ) and rType='" . $rType . "' and stage=1 and M.Userid = l.ID and s.SID=M.schemeID and p.id=m.pid ";
    $query = " SELECT count(*)
            FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s,tm_post p WHERE  M.INDNO in ( select INDNO from tm_login
            where  underDivision = " . $_SESSION["DivID"] . ") and ((m.DivID= " . $_SESSION["DivID"] .
            " and m.pid<3) ) and  stage=1 and M.Userid = l.ID and s.SID=M.schemeID and p.id=m.pid  and rtype='$rType' ";

    $cnt1  = execScalar($query);

    $query = " SELECT count(*) FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s, tm_post p WHERE (m.pid in " .
    " ( select pid from td_postassignment where pid>2 and  active=1 and uid ='$uid')) " .
    " and rType='" . $rType . "' and  stage=1 and M.Userid = l.ID and s.SID=M.schemeID  and p.id=m.pid";
	
	$query = " SELECT count(*)
            FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s, tm_post p WHERE (m.pid in ( select pid from td_postassignment
            where pid>2 and  active=1 and uid =" . $_SESSION["UID"] . ")) and  stage=1 and M.Userid = l.ID and s.SID=M.schemeID  and
            p.id=m.pid  and rtype='$rType'";

    $cnt2  = execScalar($query);

    return ($cnt1 + $cnt2);
}

/*
function getAENotification(){
$cnt1 = 0; $cnt2 = 0;

$query="";

$query = " SELECT count(id)  FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s,tm_post p " .
" WHERE  M.INDNO in ( select INDNO from tm_login,tm_division " .
" where  underDivision = DivID and DivID = " . $_SESSION["DivID"] . ") and ((m.DivID= " . $_SESSION["DivID"] .
" and m.pid<3) )  and stage=1 and M.Userid = l.ID and s.SID=M.schemeID and p.id=m.pid ";

$cnt1 = execScalar($query);

$query = " SELECT count(id) FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s, tm_post p " .
" WHERE (m.pid in ( select pid from td_postassignment where pid>2 and  active=1 and uid =" . $_SESSION["UID"] . ")) " .
" and  stage=1 and M.Userid = l.ID and s.SID=M.schemeID  and p.id=m.pid ";

$cnt2 = execScalar($query);

return ($cnt1 + $cnt2);
}

*/

function getJENotification()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];
    $query = "";

    $query = " SELECT count(*) FROM TM_MaterialRequested M " .
    " WHERE rType='Material' and stage>3 and stage<6 and M.Userid ='$uid'";
    return (execScalar($query));
}

function getEENotification( $rType )
{
    $query = "";
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];

    $query = " SELECT count(*) FROM TM_MaterialRequested AS M ,tm_login AS l,tm_Scheme as s, tm_post p WHERE (m.pid in " .
    " ( select pid from td_postassignment where active=1 and uid ='$uid')) " .
    " and rType='" . $rType . "' and  stage=2 and M.Userid = l.ID and s.SID=M.schemeID  and p.id=m.pid";

    $query = " SELECT count(*) FROM TM_MaterialRequested M,tm_login L ,tm_Scheme as s,tm_post p ".
    " WHERE p.id=m.pid and rType='" . $rType . "' and stage=2 and M.Userid = l.ID and M.schemeID=s.SID";

    return (execScalar($query));
}

function getAESNotification( $rType)
{
    $query = "";

    $query = "SELECT count(*) FROM TM_MaterialRequested M,tm_login L,TM_Scheme s ,tm_post p " .
    " WHERE p.id=m.pid and  (stage=3 or (stage=1 and L.underDivision=6)) and rType='" . $rType .
    "' and M.Userid = l.ID and M.schemeID=s.sid ";
	
	$query = "SELECT count(*)
            FROM TM_MaterialRequested M,tm_login L,TM_Scheme s ,tm_post p
            WHERE p.id=m.pid and  (stage=3 or (stage=1 and m.DivID= '" . $_SESSION["DivID"] .
            "')) and M.Userid = l.ID and M.schemeID=s.sid and rtype='Material'";

    return (execScalar($query));
}

function getSKNotification( $rType)
{
    $query = "";

    /*
    'if ($_SESSION["DivID"]=="2"){
    '    $query = " SELECT  count(*) FROM TM_MaterialRequested M,tm_login L,TM_Scheme s,tm_post p WHERE p.id=m.pid and stage=4  and " .
    '            " M.ID in (select distinct MatReqID from td_MatRequested where remQty > 0)  and M.Userid = l.ID and rType='" . $rType . "' and M.schemeID=s.sid and " .
    '            " M.INDNO in ( select INDNO from tm_login,tm_division where underDivision = DivID and locid=2 )";

    '}
    else
    {
    */
    $query = " SELECT  count(*) FROM TM_MaterialRequested M,tm_login L,TM_Scheme s,tm_post p WHERE p.id=m.pid and stage=4 and " .
    " M.ID in (select distinct MatReqID from td_MatRequested where remQty > 0) and rType='" . $rType .
    "' and M.Userid = l.ID and M.schemeID=s.sid and " .
    " M.INDNO in ( select INDNO from tm_login,tm_division where underDivision = DivID and locid=" .
    $_SESSION["DefaultLocation"] . ") ";

    return (execScalar($query));
}

// Stock request Notification;
function getStockNotification( $stage)
{
    $query = "SELECT count(*) FROM TM_StockRequest WHERE stage=" . $stage ;

    return (execScalar($query));

}

function getMRNotification( $stage)
{
    $query = " Select count(*) from tm_materialreturn where stage=" . $stage;

    return (execScalar($query));
}

// Estimate Notification;

function getEstACNotification( $stage)
{
    $query = "SELECT count(*) FROM TM_EstimateRequest AS M  WHERE  M.stage=" . $stage ;

    return (execScalar($query));
}

function getEstEENotification( $stage)
{
    $query = " SELECT count(*) FROM TM_EstimateRequest M WHERE stage=" . $stage . " and M.U_ID = l.ID " ;

    return (execScalar($query));
}

function getEstNotification( $stage, $tCount, $TNType='%'){
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];
    $query = "";
    if ($stage == 2) {

        $query = " SELECT count(*) FROM TM_EstimateRequest AS M " .
        " WHERE  M.INDNO in ( select INDNO from tm_login " .
        " where  underDivision = " . $_SESSION["DivID"] . ") and
        m.pid<3   and stage='$stage' and est_T_count='$tCount'";

        $cnt1  = execScalar($query);

        $query = " SELECT count(*) FROM TM_EstimateRequest AS M  WHERE m.pid in (select pid from td_postassignment
        where pid>1 and  active=1 and uid ='$uid') and stage='$stage' and est_T_count='$tCount'";

        $cnt2  = execScalar($query);

        return ($cnt1 + $cnt2);

    }
    else
    if ($stage == 5) {
        $query = " SELECT count(*) FROM TM_EstimateRequest AS M  WHERE stage=" . $stage .
        " and est_T_count=$tCount  and auditclrk= '$uid'";
    }
    else
    if ($stage >= 3) {
        $query = " SELECT count(*) FROM TM_EstimateRequest AS M  WHERE stage=" . $stage .
        " and est_T_count=" . $tCount;
    }
    else
    if ($stage == 98 || $stage == 99 ) {
        $query = " SELECT COUNT(*) FROM TM_EstimateRequest AS M WHERE M.STAGE = " . $stage . " AND " .
        " ((SELECT COUNT(PID) FROM td_postassignment WHERE PID = 7 " .
        " AND Active = 1 AND UID = '$uid') = 1)";
    }
    else {
        $query = " SELECT count(*) FROM TM_EstimateRequest AS M  WHERE stage=$stage and est_T_count=$tCount and tendernoticetype like '$TNType' and u_id = '$uid'";
    }
    return (execScalar($query));
}

function getEstAENotification( $stage)
{
    $query = " SELECT count(*) FROM TM_EstimateRequest AS M
    WHERE  M.INDNO in ( select INDNO from tm_login where
    underDivision = " . $_SESSION["DivID"] .
    ") and stage=" . $stage ;
    return (execScalar($query));
}

/////////////// change remains from here

function getEstTechNotification( $stage)
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];
    $query = " SELECT count(*) FROM TM_EstimateRequest AS M
    WHERE (( select count(PID) from td_postassignment
    where pid=7 and active=1 and uid ='$uid')=1)  and  stage=" . $stage;
    return (execScalar($query));
}

function getEstJENotification( $status)
{
    $query = " SELECT count(*) FROM TM_Est_Status AS M WHERE (indno=" . $_SESSION["INDNO"] . ") and status like '%" . $status . "%'
    AND (ID IN (SELECT MAX(ID) FROM TM_Est_Status WHERE(INDNO = " . $_SESSION["INDNO"] . ") GROUP BY EST_ID))";

    return (execScalar($query));
}

//////' Consumer notification;
function getCNSNotification( $stage, $appstage, $appcat = "")
{
    $query = "";
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    if ( $appcat != "") {
        if ($_SESSION["DesID"] == "1") {
            $query = " SELECT count(id) FROM ctm_ltc c where c.stage=" . $stage . " and c.appstage=" . $appstage .
            " and appcat='" . $appcat . "'";
        }
        else
        if ($_SESSION["DesID"] == 3) {
            if ($appstage == 6)
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " and appcat='" . $appcat . "' ) and  c.roje='$uid'";
            else
            if ($appstage == 8 && $stage == 1)
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " and appcat='" . $appcat . "' ) and  c.jecomm='$uid'";
            else
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " and appcat='" . $appcat . "' ) and  c.userid='$uid'";
        }
        else
        if (($appstage == 6 || $appstage == 7) && $stage == 3) {
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " and appcat='" . $appcat . "' ) and  rodiv=" . $_SESSION["DivID"];
        }
        else {
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " and appcat='" . $appcat . "' ) and  DivID=" . $_SESSION["DivID"];
        }
    }
    else {
        if ($_SESSION["DesID"] == "1") {
            $query = " SELECT count(id) FROM ctm_ltc c where c.stage=" . $stage . " and c.appstage=" . $appstage;
        }

        else
        if ($_SESSION["DesID"] == 3) {
            if ($appstage == 6)
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " ) and  c.roje='$uid'";
            else
            if ($appstage == 8 && $stage == 1)
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " ) and  c.jecomm='$uid'";
            else
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " ) and  c.userid='$uid'";
        }
        else
        if (($appstage == 6 || $appstage == 7) && $stage == 3) {
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " ) and  rodiv=" . $_SESSION["DivID"];
        }
        else {
            $query = " SELECT count(id) FROM ctm_ltc c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " ) and  DivID=" . $_SESSION["DivID"];
        }
    }
    //echo "Query:".$query;
    return execScalar($query);
}
////Quotation log notification
function getQuotlogNotification()
{
    $query = "";
    if ($_SESSION["DesID"] == "2") {
        $query = "SELECT * from quotationlog  where stage=3 group by quot_no" ;
        $res   = fetchRows($query);
        $rows   = $res->count;
        //echo $rows;
    }
    else
    if ($_SESSION["DesID"] == "1") {
        $query = "SELECT * from quotationlog  where stage='3' group by quot_no";
        $res   = fetchRows($query);
        $rows   = $res->count;
    }
    // echo $res = execScalar($query);
    return $rows;
}
//////' PD notification;
function getPDNotification( $stage, $appstage, $appcat = "")
{
    $query = "";
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    if ( $appcat != "") {
        if ($_SESSION["DesID"] == "1") {
            $query = " SELECT count(id) FROM ctm_PD c where c.stage=" . $stage . " and c.appstage=" . $appstage .
            " and appcat='" . $appcat . "'";
        }
        else
        if ($_SESSION["DesID"] == 3) {
            if ($appstage == 6) {
                $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
                " and appcat='" . $appcat . "' ) and  c.JEID='$uid'";
            }
            else
            if ($appstage == 7 && $stage == 1) {
                $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
                " and appcat='" . $appcat . "' ) and  c.jecomm='$uid'";
            }
            else {
                $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
                " and appcat='" . $appcat . "' ) and  c.userid='$uid'";
            }
        }
        else
        if ($appstage == 6 || ($appstage == 7 && $stage == 3)) {
            $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " and appcat='" . $appcat . "' ) and  c.Division=" . $_SESSION["DivID"];
        }
        else {
            $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " and appcat='" . $appcat . "' ) and  DivID=" . $_SESSION["DivID"];
        }
    }
    else {
        if ($_SESSION["DesID"] == "1") {
            $query = " SELECT count(id) FROM ctm_PD c where c.stage=" . $stage . " and c.appstage=" . $appstage;
        }
        else
        if ($_SESSION["DesID"] == 3) {
            if ($appstage == 6) {
                $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
                " ) and  c.JEID='$uid'";
            }
            else
            if ($appstage == 7 && $stage == 1) {
                $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
                " ) and  c.jecomm='$uid'";
            }
            else {
                $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
                " ) and  c.userid='$uid'";
            }
        }
        else
        if ($appstage == 6 || ($appstage == 7 && $stage == 3)) {
            $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " ) and  c.Division=" . $_SESSION["DivID"];
        }
        else {
            $query = " SELECT count(id) FROM ctm_PD c where (c.stage=" . $stage . "  and c.appstage=" . $appstage .
            " ) and  DivID=" . $_SESSION["DivID"];
        }
    }
    return execScalar($query);
}
///////////Contractor Notification
function getCONTRACTORNotification( $stage, $appstage,$fillBy = 0)
{
    $query = "";
    //echo "here";
    if ($fillBy == 1) {
        if (($_SESSION["DesID"] == "1") || ($_SESSION["DesID"] == "2") || ($_SESSION["DesID"] == "3") ) {
            $query = " SELECT count(id) FROM ctm_lec c where c.stage=" . $stage . " and c.appstage=" . $appstage;
        }
        else
        if ($_SESSION["DesID"] == "10") {
            $query = " SELECT count(id) FROM ctm_lec c where c.stage=" . $stage . " and c.appstage=" . $appstage." and fillBy='" . $fillBy . "'";
            //echo $query;
        }
    }
    else
    if ($fillBy == 2) {
        if (($_SESSION["DesID"] == "1") || ($_SESSION["DesID"] == "2") || ($_SESSION["DesID"] == "3") || ($_SESSION["DesID"] == "10") ) {
            $query = " SELECT count(id) FROM ctm_lec c where c.stage=" . $stage . " and c.appstage=" . $appstage." and fillBy='" . $fillBy . "'";
        }
    }

    else {
        if (($_SESSION["DesID"] == "1") || ($_SESSION["DesID"] == "2") || ($_SESSION["DesID"] == "3") || ($_SESSION["DesID"] == "10") ) {
            if ($stage == 12 && $appstage == 7 )
            $query = " SELECT count(id) FROM ctm_lec c where c.stage=" . $stage . " and c.appstage=" . $appstage;

            else
            $query = " SELECT count(id) FROM ctm_lec c where c.stage=" . $stage . " and c.appstage=" . $appstage." and fillBy in (0,1)";
        }
    }



    return execScalar($query);

}
///////At Contractor side
function getCONTNotification($stage, $appstage,$EC_Approved,$appcat = "")
{

    //echo $EC_Approved;
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];

    $query = "";
    $query1= "select l.UserID from tm_login as l where l.ID='$uid'";
    $userid= execScalar($query1);
    if ($EC_Approved == 0) {
        if ($_SESSION["DesID"] == "20") {
            //echo "here";
            $query = " SELECT count(c.id) FROM ctm_ltc c inner join ctm_lec cl on c.LECID=cl.LECID where cl.is_register>0 and cl.is_register<3 and c.stage<=10 and c.appstage<=9 and c.EC_Approved ='" . $EC_Approved."' and cl.Userid='".$userid ."' and c.appdate is not null and c.Contid IS NULL";

            if ($appcat != "") {

                $query = " SELECT count(c.id) FROM ctm_ltc c where c.stage=" . $stage . " and c.appstage=" . $appstage." and c.EC_Approved ='" . $EC_Approved."'  and c.Contid ='$uid'  and c.appcat='".$appcat."'";
            }

            // echo $query;
        }
    }


    return execScalar($query);
}
//////// Inward outward Notification;

function getIONotification()
{
    $query = "";
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];


    if (hasPost($uid,"Inward",10) || hasPost($uid,"Outward",10) ) {
        $query = " SELECT l.id FROM tm_login l,td_postassignment p WHERE l.id=p.uid and p.pid=1 and p.active=1 and  l.DesID=1 ";

        $eid   = execScalar($query);
        $query = " SELECT count(*) FROM IO_inward WHERE  stage=1 and ( markto= $eid or  markto='$uid')";
    }
    elseif ($_SESSION["DesID"] == 9) {
        $query = " SELECT count(*) FROM IO_billdetails WHERE  stage=1";
    }
    else {
        $query = " SELECT count(*) FROM IO_inward WHERE  stage=1 and markto='$uid'";
    }

    return execScalar($query);
}
function getdocuments()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    if ($_SESSION["Designation"] == "Executive Engineer") {
        $query = " SELECT count(*) FROM docs_docs where active = '1'";
    }

    else
    if (hasPost($uid,"Document Store In-Charge",$_SESSION["DesID"])) {
        $query = " SELECT count(*) FROM docs_docs where active = '1' AND und_division = '".$_SESSION["DivID"]."'";
    }
    else {
        $query = " SELECT count(*) FROM docs_docs where active = '1'   AND (file_type = ',0,' OR file_type LIKE ',$uid,') AND      curr_location != '$uid'";
    }
    return execScalar($query);
}
function mydocument()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    if ( !hasPost($uid,"Document Store In-Charge",$_SESSION["DesID"])) {
        $query = " SELECT count(*) FROM docs_docs where active = '1' AND curr_location  = '$uid'";
    }
    return execScalar($query);

}
function pendingdoc()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    if ($_SESSION["Designation"] == "Executive Engineer") {
        $query = " SELECT count(*) FROM docs_docs  where active = '-2'";
    }
    else
    if ((hasPost($uid,"Document Store In-Charge",$_SESSION["DesID"]))) {
        $query = " SELECT count(*) FROM docs_docs where active = '-2' AND und_division = '".$_SESSION["DivID"]."'";
    }
    return execScalar($query);
}
function lostdoc()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    if ($_SESSION["Designation"] == "Executive Engineer") {
        $query = " SELECT count(*) FROM docs_docs  where active = '-1'";
    }
    else
    if ((hasPost($uid,"Document Store In-Charge",$_SESSION["DesID"]))) {
        $query = " SELECT count(*) FROM docs_docs where active = '-1' AND und_division = '".$_SESSION["DivID"]."'";
    }
    return execScalar($query);
}
function deletedoc()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    if ($_SESSION["Designation"] == "Executive Engineer") {
        $query = " SELECT count(*) FROM docs_docs  where active = '0'";
    }
    else
    if (hasPost($uid,"Document Store In-Charge",$_SESSION["DesID"])) {
        $query = " SELECT count(*) FROM docs_docs where active = '0' AND und_division = '".$_SESSION["DivID"]."'";
    }
    return execScalar($query);
}
function defaultdoc()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    if ($_SESSION["Designation"] == "Executive Engineer") {
        $query = " SELECT count(*) FROM docs_docs  where active = '-3'";
    }
    else
    if (hasPost($uid,"Document Store In-Charge",$_SESSION["DesID"])) {
        $query = " SELECT count(*) FROM docs_docs where active = '-3' AND und_division = '".$_SESSION["DivID"]."'";
    }
    return execScalar($query);
}
function requestdoc()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid = $_SESSION["UID"];
    if ($_SESSION["Designation"] == "Executive Engineer") {
        $query = " SELECT count(*) FROM docs_request  where req_to = '$uid' AND status = '1' AND aprv_status = '1'";
    }
    else
    if (hasPost($uid,"Document Store In-Charge",$_SESSION["DesID"])) {
        $query = " SELECT count(*) FROM docs_request as r INNER JOIN docs_docs AS d ON d.docs_id = r.docs_id  where   d.und_division = '".$_SESSION["DivID"].
        "'AND (status = '0' AND aprv_status = '1' OR status = '1' AND aprv_status = '1') AND req_status = 0";

    }
    else {
        $query = " SELECT count(*) FROM docs_request  where (req_by = '$uid' OR req_to = '$uid')
        AND (status = '0' AND aprv_status = '1' OR status = '1' AND aprv_status = '1') AND req_status = 0";
    }
    return execScalar($query);
}
function Circular()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];
    $query = " SELECT count(*) FROM upload  where file_type = 'circular' AND status = '1'
    AND  person LIKE '%,$uid,%' AND attach_see NOT LIKE  '%$uid,%' " ;

    return execScalar($query);
}
function permission()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid    = $_SESSION["UID"];
    //if($_SESSION["DesID"] == "1")
    {
        $sql    = "SELECT AuthLevel FROM tm_login WHERE ID='$uid' limit 1";
        $cid = execScalar($sql);
        $query  = " SELECT count(*) FROM docs_permission AS p
        INNER JOIN tm_login  AS t ON  t.ID = p.User_id
        where  t.UnderDivision = '".$_SESSION["DivID"]."'  AND p.stage = '$cid'";
    }
    /*else
    if($_SESSION["DesID"] == "2"){
    $query = " SELECT count(*) FROM docs_permission AS p INNER JOIN docs_docs AS d ON d.docs_id = p.Doc_id INNER JOIN tm_login  AS t ON t.ID = p.User_id where EE = '3' AND AE = '3' AND status = '1' AND t.UnderDivision = '".$_SESSION["DivID"]."'  ";

    }*/
    return execScalar($query);
}
function unauthorised()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid    = $_SESSION["UID"];
    $sql    = "SELECT AuthLevel FROM tm_login WHERE ID='$uid' limit 1";
    $cid = execScalar($sql);
    $a      = 0;
    $query  = fetchRows("select * from docs_docacess");
    $i      = 0;
    $r = (array)$query->rows;

foreach($r as $row ){
        $sql    = "SELECT * FROM tm_login WHERE ID ='".$row["user_id"]."'";
        $result = fetchRows($sql);
        $value  = $result->row;
        if ((( $value->UnderDivision) == $_SESSION["DivID"]) && $row["auth"] > $cid) {

            $uidd = "$uid,";
            if (strpos($row["view"],$uidd) !== false) {
            }else {
                $a++;
            }
        }
        $i++;
    }


    //
    $query = $a;

    return ($query);
}
function getMail()
{
    if ($_SESSION["AccType"] == "Proxy")
    $uid = $_SESSION["proxyOf"];
    else
    $uid   = $_SESSION["UID"];
    $query = "";

    $query = " SELECT sender + '|' + convert(varchar(MAX),stime) + '|' + m.subject  + '|' +  m.UID + '|' +
    convert(varchar(MAX),d.$stage) " .
    " FROM tm_mail m,td_mail d WHERE m.uid=d.uid and d.sendto='$uid' order by d.stage ";
    $res   = fetchRows($query);
    $row    = (array)$res->row;
    return json_encode($row);
}

/* **************** MRT ******************** */
function getMRTNotification1()
{
    if ($_SESSION['DesID'] == "3") {

        $query            = "select count(*) as cnt from (SELECT DISTINCT `mrt`
        FROM `tm_mrt` `tm`
        INNER JOIN `td_mrt` `td` ON `tm`.`mrtID` = `td`.`referenceID`
        WHERE `isTested` =0
        AND   (
        `tm`.`stage` = 1
        OR `tm`.`stage` = 2
        OR `tm`.`stage` = 3
        )) t";
        $MeterTestRequest = execScalar($query);

        $data['MRTReq'] = $data['MeterTestRequest'] = $MeterTestRequest;

        $query     = "select count(*) as cnt from (SELECT DISTINCT tm.mrt
        FROM `tm_mrt` `tm`
        INNER JOIN `td_mrt` `td` ON `tm`.`mrtID`= `td`.`referenceID`
        WHERE `td`.`isTested` = '1') t";
        $MRTTested = execScalar($query);

        $data['MRTTested'] = $MRTTested;


        $data['MRTRequest'] = $MRTTested + $MeterTestRequest;

        $data['MRTMenu'] = $data['MRTRequest'];

    }
    else
    if ($_SESSION['DesID'] == "4") {

        $query     = "select count(*) as cnt from (SELECT DISTINCT tm.mrt
        FROM `tm_mrt` `tm`
        INNER JOIN `td_mrt` `td` ON `tm`.`mrtID`= `td`.`referenceID`
        WHERE `td`.`isTested` = '2'
        AND `td`.`is_submitted` = '0')t";

        $MRTTested = execScalar($query);

        $data['MRTTested'] = $MRTTested;
        $data['MRTRequest'] = $MRTTested;
        $data['MRTMenu'] = $data['MRTRequest'];

    }
    return $data;
}

function getMRTNotification()
{
    if ($_SESSION['DesID'] == "3") {

       /* $query            = "select count(*) as cnt from (SELECT DISTINCT `mrt`
        FROM `tm_mrt` `tm`
        INNER JOIN `td_mrt` `td` ON `tm`.`mrtID` = `td`.`referenceID`
        WHERE `isTested` =0
        AND   (
        `tm`.`stage` = 1
        OR `tm`.`stage` = 2
        OR `tm`.`stage` = 3
        )) t";
        $MeterTestRequest = execScalar($query);*/

       // $data['MRTReq'] = $data['MeterTestRequest'] = $MeterTestRequest;

        $query     = "select count(*) as cnt from (SELECT DISTINCT tm.mrt
        FROM `tm_mrt` `tm`
        INNER JOIN `td_mrt` `td` ON `tm`.`mrtID`= `td`.`referenceID`
        WHERE `td`.`isTested` = '3') t";
        $MRTTested = execScalar($query);

        $data['MRTTested'] = $MRTTested;


        //$data['MRTRequest'] = $MRTTested + $MeterTestRequest;
        $data['MRTRequest'] = $MRTTested;

        $data['MRTMenu'] = $data['MRTRequest'];

    }
    else
    if ($_SESSION['DesID'] == "4") {

        $query     = "select count(*) as cnt from (SELECT DISTINCT tm.mrt
        FROM `tm_mrt` `tm`
        INNER JOIN `td_mrt` `td` ON `tm`.`mrtID`= `td`.`referenceID`
        WHERE `td`.`isTested` = '2'
        AND `td`.`is_submitted` = '0')t";

        $MRTTested = execScalar($query);

        $data['MRTTested'] = $MRTTested;
       // $data['MRTRequest'] = $MRTTested;
        $data['MRTMenu'] = $data['MRTTested'];

    }
    else
    if ($_SESSION['DesID'] == "12") {

       $query            = "select count(*) as cnt from (SELECT DISTINCT `mrt`
        FROM `tm_mrt` `tm`
        INNER JOIN `td_mrt` `td` ON `tm`.`mrtID` = `td`.`referenceID`
        WHERE `isTested` =0
        AND   (
        `tm`.`stage` = 1
        OR `tm`.`stage` = 2
        OR `tm`.`stage` = 3
        )) t";
        $MeterTestRequest = execScalar($query);

        $data['MRTReq'] =  $MeterTestRequest;
        
		$query            = "select count(*) as cnt from (SELECT DISTINCT `mrt`
        FROM `tm_mrt` `tm`
        INNER JOIN `td_mrt` `td` ON `tm`.`mrtID` = `td`.`referenceID`
        WHERE `isTested` =0
        AND  isEdit =1
        AND
         (
        `tm`.`stage` = 1
        OR `tm`.`stage` = 2
        OR `tm`.`stage` = 3
        )) t";
        $MeterCorrection = execScalar($query);

        //$data['MRTReq'] = $data['mrtreq'] = $MeterCorrection;        
        $data['MRTCorr'] = $MeterCorrection;        

        $query     = "select count(*) as cnt from (SELECT DISTINCT tm.mrt
        FROM `tm_mrt` `tm`
        INNER JOIN `td_mrt` `td` ON `tm`.`mrtID`= `td`.`referenceID`
        WHERE `td`.`isTested` = '1') t";
        $MRTTested = execScalar($query);

        $data['MRTTested'] = $MRTTested;


        $data['MRTRequest'] = $MRTTested + $MeterTestRequest + $MeterCorrection;
       // $data['MRTRequest'] = $MRTTested;

        $data['MRTMenu'] = $data['MRTRequest'];

    }
    return $data;
}

/* **************** DGSet ******************** */
function getDGSetNotification($appstage,$stage)
{
    $query = "select count(*) as cnt from dgset_request where stage='$stage' and find_in_set(appStage,'$appstage')";
    $cnt   = execScalar($query);

    return $cnt;
}
function getTrans_fsblNotification($stage,$appstage,$appcat){
		if($_SESSION["DesID"] == 3)
		 $query="select count(id) from ctm_ltc where stage='$stage' and appstage='$appstage'
						and appCat='$appcat' and jeoandm='".$_SESSION["UID"]."'";
		if($_SESSION["DesID"] == 2)
			$query = "select count(id) from ctm_ltc where rodiv = '".$_SESSION["DivID"]."' and is_trans_fsbl=1 and fsbl_action_taken=0 and appstage >=5";
		return execScalar($query);
	}
function getTrans_overloadedNotification(){
		if($_SESSION["DesID"] == 3)
			$query = "select count(id) from ctm_ltc where rodiv = '".$_SESSION["DivID"]."'
			 and is_trans_fsbl=1 and fsbl_action_taken=0 and appstage >=5  and jeoandm='".$_SESSION["UID"]."'";
		else if($_SESSION["DesID"] == 2)
			$query = "select count(id) from ctm_ltc where rodiv = '".$_SESSION["DivID"]."' and is_trans_fsbl=1 and fsbl_action_taken=0 and appstage >=5";
		
		return execScalar($query);
	}
?>