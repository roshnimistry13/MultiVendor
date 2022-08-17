<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{
	public $table;
	public function __construct()
	{
		parent::__construct();
		$this->table = get_Class($this);
		$this->load->database();
		$this->db->cache_off();
	}
	
	/**
	* 
	* @param undefined $table
	* @param undefined $select_column
	* @param undefined $order_column
	* @param undefined $join_column
	* @param undefined $where
	* @param undefined $search_column
	* @param undefined $order_by
	* 
	* @return
	*/
	function makeDataTableQuery($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by)
	{
		$this->db->select($select_column);
		$this->db->from($table);
		if(!empty($join_column)){
		   	for($i=0; $i<count($join_column['table']); $i++){
				$join_table = $join_column['table'][$i];
				$join_on = $join_column['join_on'][$i];
				$this->db->join($join_table,$join_on);
			}
		}
		if(!empty($where)){
			foreach($where as $w_row){
				$this->db->where($w_row);
			}	
		}
		
		if(isset($_POST["search"]["value"])){
			if(!empty($search_column)){
				$this->db->group_start();
				$k = 1;
				foreach($search_column as $key => $value) {                 
				    
				    if($k == 1){
				    	$this->db->like($value, $_POST["search"]["value"]);
					}
					else
					{
						$this->db->or_like($value, $_POST["search"]["value"]);
					}
				    $k++;
				}
				$this->db->group_end();
			}
		}
			if(isset($group_by)){
			
				$this->db->group_by($group_by);
				
		}
		if(isset($_POST["order"])){
			$this->db->order_by($order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}
		else
		{
			$this->db->order_by($order_by);
		}	
		
			
			
	}
		









	
	public function save($data,$tablename = "")
	{
		if ($tablename == "") {
			$tablename = $this->table;
		}
		$op        = 'update';
		$keyExists = FALSE;
		$fields = $this->db->field_data($tablename);

		foreach ($fields as $field) {
			if ($field->primary_key == 1) {
				$keyExists = TRUE;
				if (isset($data[$field->name])) {
					$this->db->where($field->name, $data[$field->name]);
				}
				else
				{
					$op = 'insert';
				}
			}
		}
		if ($keyExists && $op == 'update') {
			$this->db->set($data);
			$this->db->update($tablename);
			if ($this->db->affected_rows() == 1) {
				return $this->db->affected_rows();
			}
		}
		$this->db->insert($tablename,$data);
		return $this->db->affected_rows();
	}
	public function saveData($data,$condition,$tablename = "")
	{
		if ($tablename == "") {
			$tablename = $this->table;
		}
		if(!is_null($condition) && $this->count($condition,$tablename)>0)
			return $this->update($data,null,$condition,$tablename);
		else
			return $this->insert($data,$condition,$tablename);
	}
	function getStaffName($pid,$desid,$active,$activated,$UnderDivision){
		$this->db->distinct();
		$this->db->select("l.StaffName");
		$this->db->distinct();
		$this->db->select("pa.UID");
		$this->db->from('tm_login AS l');// I use aliasing make joins easier
		$this->db->join('td_postassignment AS pa', 'pa.uid=l.id');
		$this->db->join('tm_post AS p', 'p.id=pa.pid');
		if($pid != NULL && $desid != NULL)
			$this->db->where("(`pa.pid`=$pid and `l.desid`=$desid and  `pa.active`='1' and `l.Activated`='1')");
		else
			$this->db->where("(`l.desid`=$desid and `l.Activated`='1' and `l.UnderDivision`=$UnderDivision)");
			
		$query=$this->db->get();
		return $query->result();
	}
	function getStatusStaffName($pid,$desid,$active,$activated,$UnderDivision)		{
		$this->db->distinct();
		$this->db->select("l.StaffName");
		$this->db->distinct();
		$this->db->select("pa.UID");
		$this->db->from('tm_login AS l');// I use aliasing make joins easier
		$this->db->join('td_postassignment AS pa', 'pa.uid=l.id');
		$this->db->join('tm_post AS p', 'p.id=pa.pid');
		/*if($pid != NULL && $desid != NULL && $UnderDivision == NULL)
			$this->db->where("(`pa.pid`=$pid and `l.desid`=$desid and  `pa.active`='1' and `l.Activated`='1')");*/
		if($pid != NULL && $desid != NULL)
			$this->db->where("(`pa.pid`=$pid and `l.desid`=$desid and  `pa.active`='1' and `l.Activated`='1')");
		else
			$this->db->where("(`l.desid`=$desid and `l.Activated`='1' and `l.UnderDivision`=$UnderDivision)");
			
		$query=$this->db->get();
		//var_dump($this->db->last_query());
		return $query->result();
	}
	function search($conditions = NULL,$tablename = "",$limit = 500,$offset = 0)
	{
		if ($tablename == "") {
			$tablename = $this->table;
		}
		if ($conditions != NULL)
		$this->db->where($conditions);

		$query = $this->db->get($tablename,$limit,$offset);

		return $query->result();

	}
	function count($conditions = NULL,$tablename = "",$limit = 500,$offset = 0)
	{
		if ($tablename == "") {
			$tablename = $this->table;
		}
		if(is_array($conditions)){
			foreach($conditions as $key=>$condition){
				$this->db->where($key,$condition);
			}	
		}
		else if($conditions != NULL){
			$this->db->where($conditions);
		}
       		 
        $query = $this->db->get($tablename,$limit,$offset);

        return $query->num_rows();
	}
    function counta($conditions = NULL,$user_id,$tablename = "",$limit = 500,$offset = 0)
    {
        if ($tablename == "") {
            $tablename = $this->table;
        }
        if ($conditions != NULL)
        $this->db->where($conditions);
        $this->db->where("(`file_type` LIKE ',0,' OR `file_type` LIKE '%,$user_id,%') AND `active` = '1' ");
        $query = $this->db->get($tablename,$limit,$offset);

        return $query->num_rows();

    }
    function countb($conditions = NULL,$user_id,$tablename = "",$limit = 500,$offset = 0)
    {
        if ($tablename == "") {
            $tablename = $this->table;
        }
        if ($conditions != NULL)
        $this->db->where($conditions);
        $this->db->where("(`file_type` LIKE ',0,' OR `file_type` LIKE '%,$user_id,%') AND `active` = '1' ");
        $this->db->not_like('curr_location',$user_id);
        $query = $this->db->get($tablename,$limit,$offset);

        return $query->num_rows();

    }
	function get_field_from_other_field($select = NULL,$conditions = NULL,$tablename = "",$limit = 1,$offset = 0)
	{
		if ($tablename == "") {
			$tablename = $this->table;
		}
		if ($conditions != NULL)
		$this->db->where($conditions);

		if ($select != NULL) {
			$this->db->select($select,false);
		}
		else {
			$this->db->select('*');
		}

		$query = $this->db->get($tablename,$limit,$offset);
		return $query->result();
	}
	function selectAll($select = NULL,$conditions = NULL,$tablename = "",$offset = 0)
	{
		if ($tablename == "") {
			$tablename = $this->table;
		}
		if ($conditions != NULL)
		$this->db->where($conditions);

		if ($select != NULL) {
			$this->db->select($select,false);
		}
		else {
			$this->db->select('*');
		}
		$query = $this->db->get($tablename,$offset);
		
		return $query->result();
	}
    function get_field_from_other_field1($select = NULL,$file_no,$conditions = NULL,$tablename = "",$limit = 1,$offset = 0)
    {
        if ($tablename == "") {
            $tablename = $this->table;
        }
        if ($conditions != NULL)
        $this->db->where($conditions);

        if ($select != NULL) {
            $this->db->select($select);
        }
        else {
            $this->db->select('*');
        }
        $this->db->where("`file_no` LIKE '".$file_no."%'");
        $this->db->order_by('docs_id',"DESC");
        $query = $this->db->get($tablename,1,0);
        return $query->result();
    }
	function insert($data,$unique,$tablename = "")
	{
		if ($tablename == "")
		$tablename = $this->table;
		if ($unique != NULL)
		{
			if ($this->count($unique,$tablename) != 0) {
				/*$this->count($unique,$tablename);*/
                return 0;
			}
		}
		$this->db->insert($tablename,$data);
		return $this->db->insert_id();
	}
	function maxID($fieldnm,$tablenm){
		$this->db->select_max($fieldnm);
		$query = $this->db->get($tablenm);
		return $query->result();
	}
	function getMaxID($fieldnm,$tablenm){
		$this->db->select_max($fieldnm);
		$query = $this->db->get($tablenm);
		return $query->result()[0]->$fieldnm;
	}
	function update($data,$unique,$conditions,$tablename = "")
	{
		if ($tablename == "")
		$tablename = $this->table;
		if ($unique != NULL)
		{
			if ($this->count($unique,$tablename) != 1) {
				return -1;
			}

		}
		$this->db->where($conditions);
		$this->db->update($tablename,$data);
		return $this->db->affected_rows();
	}
	function delete($conditions,$tablename = "")
	{
		if ($tablename == "")
		$tablename = $this->table;
		if ($conditions != NULL)
		{
			if ($this->count($conditions,$tablename) != 1) {
				return - 1;
			}

		}
		$data['active']=1-$this->get_field_from_other_field('active',$conditions,$tablename)[0]->active;
		$this->db->where($conditions);
		
		$this->db->update($tablename,$data);
	
		return $this->db->affected_rows();
	}
	function deletea($conditions,$path = "",$tablename = "")
    {
        if ($tablename == "")
        $tablename = $this->table;

        $data['active'] = 0;

        $this->db->where($conditions);
        $this->db->where("`path` LIKE '%".$path."'");

        $this->db->update($tablename,$data);
        //var_dump($this->db->last_query());
        return $this->db->affected_rows();
    }
    function deletear($conditions,$path = "",$tablename = "")
    {
        if ($tablename == "")
        $tablename = $this->table;

        $data['active'] = 0;

        $this->db->where($conditions);
        $this->db->where("`path` LIKE '%".$path."'");

        $this->db->delete($tablename);
        //var_dump($this->db->last_query());
        return $this->db->affected_rows();
    }
    
    function deleteRecord($conditions,$tablename = "")
    {
        if ($tablename == "")
        $tablename = $this->table;

        $this->db->where($conditions);

        $this->db->delete($tablename);
        return $this->db->affected_rows();
    }
    function activate($conditions,$remarks = "",$tablename = "")
    {
        if ($tablename == "")
        $tablename = $this->table;

        $data['active'] = 1;
        $data['remarks'] = $remarks;
        $this->db->where($conditions);

        $this->db->update($tablename,$data);

        return $this->db->affected_rows();
    }
    function lost($conditions,$remarks = "",$tablename = "")
    {
        if ($tablename == "")
        $tablename = $this->table;

        $data['active'] = "-1";
        $data['remarks'] = $remarks;
        $this->db->where($conditions);

        $this->db->update($tablename,$data);

        return $this->db->affected_rows();
    }
	public function cont_checkaccess($select = NULL,$conditions = NULL,$id,$tablename = ""){
		if($tablename == ""){
			$tablename = $this->table;
		}
		if($conditions != NULL)
		$this->db->where($conditions);
		if($select != NULL){
			$this->db->select($select);
		}
		else{
			$this->db->select('*');
		}

		//$this->db->where("(`file_type` LIKE ',0,' OR `file_type` LIKE '%,$user_id,%') AND `active` = '1' ");
		$this->db->where("(`LECID` LIKE '%$id%' OR `ECID` LIKE '%$id%')");
		$query = $this->db->get($tablename);
		return $query->result();
	}
	public function checkaccess($conditions = NULL,$user_id,$tablename = "",$limit = 500,$offset = 0)
    {
        if ($tablename == "") {
            $tablename = $this->table;
        }
        if ($conditions != NULL)
        $this->db->where($conditions);

        $this->db->where("(`file_type` LIKE ',0,' OR `file_type` LIKE '%,$user_id,%') AND `active` = '1' ");
        $query = $this->db->get($tablename,$limit,$offset);

        return $query->num_rows();
    }
	public function checklimit($conditions = NULL,$tablename = "",$limit = 500,$offset = 0)
	{
		if ($tablename == "")
		{
			$tablename = $this->table;
		}
		if ($conditions != NULL)
		$this->db->where($conditions);
    

		//$this->db->where("`author_lmt` NOT LIKE '0'");
		$query = $this->db->get($tablename,$limit,$offset);
	
		return $query->result();
	}
	function getDataInGrid($CStage ,$appstage){

		$this->db->from('ctm_lec AS c');
		$this->db->where('c.stage',$CStage);
		$this->db->where('c.appstage',$appstage);
		//$this->db->where('c.fillBy',2);
		$this->db->where("(`c.fillBy` <= 2)");
		$this->db->order_by("c.priority","asc");
		
		$query=$this->db->get();
		$data=$query->result();
		$data1=array();
		
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_cont_status AS s');
			$this->db->where('s.lecid',$data[$i]->ECID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->LNAME=$data[$i]->LNAME;
				$data1[$i][0]->priority=$data[$i]->priority;	
			}	
		}
		
		//var_dump($this->db->last_query());
		
		return array_values($data1);	
		
	}
	function getDataInRenewGrid($CStage ,$appstage){

		$this->db->from('ctm_lec AS c');
		$this->db->where('c.stage',$CStage);
		$this->db->where('c.appstage',$appstage);
		$this->db->where("(`c.fillBy` = 2)");
		$this->db->order_by("c.priority","asc");
		$query=$this->db->get();
		$data=$query->result();
		$data1=array();
		
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_cont_status AS s');
			$this->db->where('s.lecid',$data[$i]->ECID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->LNAME=$data[$i]->LNAME;
				$data1[$i][0]->priority=$data[$i]->priority;	
			}	
		}
		
		//var_dump($this->db->last_query());
		
		return array_values($data1);	
		
	}
	function getDataInQueryGrid($CStage ,$appstage){

		$this->db->from('ctm_lec AS c');
		$this->db->where('c.stage',$CStage);
		$this->db->where('c.appstage',$appstage);
		$this->db->order_by("c.priority","asc");
		$query=$this->db->get();
		$data=$query->result();
		$data1=array();
		
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_cont_status AS s');
			$this->db->where('s.lecid',$data[$i]->ECID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->LNAME=$data[$i]->LNAME;
				$data1[$i][0]->priority=$data[$i]->priority;	
			}	
		}
		
		//var_dump($this->db->last_query());
		
		return array_values($data1);	
		
	}
	
	/*select s.ID,todate(Dt) AS StatusDate,s.lecid,Status,LNAME from ctm_cont_status s inner join ctm_lec c on s.lecid=c.LECID WHERE (s.ID IN (select MAX(s.ID) FROM CTM_cont_Status s where lecid in(select lecid from ctm_cont_status s where s.userid='12') GROUP BY s.lecid))
*/
	function getDataInStatusGrid($userid){
		$q = "select s.ID,todate(Dt) AS StatusDate,s.lecid,Status,LNAME 
from ctm_cont_status s inner join ctm_lec c on s.lecid=c.ECID WHERE (s.ID IN (select MAX(s.ID) FROM CTM_cont_Status s 
where lecid in(select distinct lecid from ctm_cont_status s where s.userid='$userid' ) GROUP BY s.lecid))";
		//$data1=array();
		$query = $this->db->query($q);

		foreach ($query->result() as $row)
		{
      		$data1[]=$row->ID;
      		$data1[]=$row->StatusDate;
      		$data1[]=$row->lecid;
      		$data1[]=$row->Status;
      		$data1[]=$row->LNAME;
    	}		
    	//print_r($query->result());
    	//print_r($data1);
		/*for($i=0;$i<count($data);$i++){
			//$this->db->select_max('s.ID');
			$this->db->from('ctm_cont_status AS s');
			//$this->db->where("(`s.userid`=$userid )");
			$this->db->where('s.lecid',$data[$i]->ECID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->LNAME=$data[$i]->LNAME;
				$data1[$i][0]->priority=$data[$i]->priority;	
			}	
		}*/
		
		//var_dump($this->db->last_query());
		
		return array_values($query->result());	
		
		
		
	}
	function getDataInStatusGrid_Orig($userid){
		
		
		$this->db->from('ctm_lec AS c');
	
		$query=$this->db->get();
		$data=$query->result();
		$data1=array();
		
		for($i=0;$i<count($data);$i++){
			//$this->db->select_max('s.ID');
			$this->db->from('ctm_cont_status AS s');
			//$this->db->where("(`s.userid`=$userid )");
			$this->db->where('s.lecid',$data[$i]->ECID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->LNAME=$data[$i]->LNAME;
				$data1[$i][0]->priority=$data[$i]->priority;	
			}	
		}
		
		//var_dump($this->db->last_query());
		
		return array_values($data1);	
		
		
		
	}
	function getDataDocAttachGrid($CStage,$appstage){
		
		
		$this->db->from('ctm_lec AS c');
		$this->db->where('c.stage',$CStage);
		$this->db->where('c.appstage',$appstage);
		$this->db->where('c.fillBy',1);
		$query=$this->db->get();
		$data=$query->result();
		$data1=array();
		
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_cont_status AS s');
			$this->db->where('s.lecid',$data[$i]->ECID);
			$this->db->order_by("s.ID","desc");
			
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->LNAME=$data[$i]->LNAME;
					
			}	
		}
		
		//var_dump($this->db->last_query());
		
		return array_values($data1);	
		
		
		
	}
	function getCnsDataInStatusGrid($userid){
		
		
		$this->db->from('ctm_ltc AS c');
		$this->db->join('ctm_sadd as cs','cs.UID=c.UID');
		$this->db->join('ctm_lec as l','l.LECID=c.LECID');
		$this->db->where("(`c.EC_Approved` != 0)");
		$this->db->where("l.userid",$this->session->userdata("Uname"));
		$query=$this->db->get();
		$data=$query->result();
		$data1=array();
		//var_dump($this->db->last_query());
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_status AS s');
			//$this->db->where("(`s.userid`=$userid )");
			$this->db->where('s.uid',$data[$i]->UID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->COMPANYNAME=$data[$i]->COMPANYNAME;
				$data1[$i][0]->priority=$data[$i]->priority;	
			}	
		}
		
		
		
		return array_values($data1);	
		
		
		
	}

	function getCnsDataInStatusGrid1($userid){
		
		
		$this->db->from('ctm_ltc AS c');
		$this->db->join('ctm_sadd as cs','cs.UID=c.UID');
		$this->db->where("(`c.EC_Approved` != 0)");
		$query=$this->db->get();
		$data=$query->result();
		$data1=array();
		
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_status AS s');
			$this->db->where("(`s.userid`=$userid )");
			$this->db->where('s.uid',$data[$i]->UID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->COMPANYNAME=$data[$i]->COMPANYNAME;
				$data1[$i][0]->priority=$data[$i]->priority;	
			}	
		}
		
		//var_dump($this->db->last_query());
		
		return array_values($data1);	
		
		
		
	}
	function getCnsAllappDataInGrid($userid){
		
		
		$this->db->from('ctm_ltc AS c');
		$this->db->join('ctm_sadd as cs','cs.UID=c.UID');
		$this->db->where("(`c.EC_Approved` != 0)");
		$query=$this->db->get();
		$data=$query->result();
		$data1=array();
		//var_dump($this->db->last_query());
		
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_status AS s');
			$this->db->where("(`s.userid`=$userid )");
			$this->db->where('s.uid',$data[$i]->UID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			//echo "<br>".$this->db->last_query();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->COMPANYNAME=$data[$i]->COMPANYNAME;
				$data1[$i][0]->EC_Approved=$data[$i]->EC_Approved;
				$data1[$i][0]->priority=$data[$i]->priority;
				$data1[$i][0]->AppCat=$data[$i]->AppCat;	
			}
			
		}
		//var_dump($data1);
		
		return array_values($data1);	
		
		
		
	}
	
	/*SELECT s.ID, Dt AS StatusDate, s.lecid, s.Status,l.StaffName FROM CTM_cont_Status s inner join tm_login l on l.id=s.userid WHERE s.lecid ='71' ORDER BY s.id DESC
*/	function getDataInStatusdetailsGrid($lecid){
		
		$this->db->from('ctm_cont_status AS s');
		$this->db->join('tm_login AS l', 'l.id=s.userid');
		$this->db->where('s.lecid',$lecid );
		//$this->db->limit(15,0);
		$this->db->order_by("s.ID", "desc");

		$query=$this->db->get();
		return $query->result();
		
	}
	function getCnsDataInStatusdetailsGrid($lecid){
		
		$this->db->from('ctm_status AS s');
		$this->db->join('tm_login AS l', 'l.id=s.userid');
		$this->db->where('s.UID',$lecid );
		//$this->db->limit(15,0);
		$this->db->order_by("s.ID", "desc");

		$query=$this->db->get();
		return $query->result();
		
	}
	
	/*SELECT l.Password, dv.DivName, d.DesName, l.Activated, l.INDNO,l.StaffName,L.ID,UnderDivision DivID,L.DesID,
				L.Type,proxyTo,proxyOf FROM ((tm_login l INNER JOIN tm_designation d ON l.DesID = d.DesID) 
				INNER JOIN tm_division dv ON l.UnderDivision = dv.DivID) WHERE l.UserID = '$uName' and 
				( l.password = '$pwd' )";
*/
	function getLoginData($UserName,$PassWord){
		//print_r($UserName);
		$this->db->from('tm_login AS l');
		$this->db->join('tm_designation AS d', 'l.DesID=d.DesID');
		$this->db->join('tm_division AS dv', 'l.UnderDivision = dv.DivID');
		$this->db->where("(`l.UserID` = '$UserName'  AND `l.Password` = '$PassWord' )");
		
		
		$query=$this->db->get();
			//var_dump($this->db->last_query());
			//print_r($query->result());
		return $query->result();
		
		
	}
	function getCnsDataInGrid(){
		$this->db->select('l.UserID');
		$this->db->from('tm_login AS l');
		$this->db->where('l.ID',$this->session->userdata('UID'));
		$query=$this->db->get();
		$data3=$query->result();		
		$userid=$data3[0]->UserID;
		$this->db->from('ctm_lec AS cl');
		$this->db->join('ctm_ltc AS c','c.LECID=cl.LECID');
		$this->db->where('cl.Userid',$userid);
		$this->db->join('ctm_sadd AS cs','c.UID=cs.UID');
		$this->db->where('c.appdate is not null');
		//$this->db->where('c.stage',$CStage);
		//$this->db->where('c.appstage',$appstage);
		$this->db->where('c.EC_Approved',0);
		$this->db->where('c.Contid',NULL);
		
		$this->db->order_by("c.priority","desc");
		$query=$this->db->get();
		$data=$query->result();
		//print_r($data);
		
		$data1=array();
		
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_status AS s');
			$this->db->where('s.uid',$data[$i]->UID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
				$data1[$i]=$data2;
				$data1[$i][0]->COMPANYNAME=$data[$i]->COMPANYNAME;
				$data1[$i][0]->priority=$data[$i]->priority;
				$data1[$i][0]->AppCat=$data[$i]->AppCat;
				
			}	
		}
		
		//var_dump($this->db->last_query());
		
		return array_values($data1);	
		
	}

	function hasPost($uid,$post,$desID){
		//$this->db->select(count(pa.id));
		$this->db->from('tm_login AS l');// I use aliasing make joins easier
		$this->db->join('td_postassignment AS pa', 'pa.uid=l.id');
		$this->db->join('tm_post AS p', 'p.id=pa.pid');
		$this->db->where("(`l.DesID` = $desID AND `p.PostName` = '$post' AND `pa.Active` = '1'  AND `l.ID` = $uid)");
		$query=$this->db->get();
		return $query->num_rows();
		//return $query->result();
	}
	/***************PD***********************/
	function getPostName($DesID){ //Hemangi 25-10-2016 10:17 AM
		$uid = $this->session->userdata('UID');
		$this->db->select('p.PostName');
		$this->db->from('tm_login AS l');// I use aliasing make joins easier
		$this->db->join('td_postassignment AS pa', 'pa.uid=l.id');
		$this->db->join('tm_post AS p', 'p.id=pa.pid');
		$this->db->where("(`l.DesID` = $DesID AND `l.ID` = $uid)");
		$query=$this->db->get();
		return $query->result();
	}
	function getJEID(){
		$this->db->from('tm_login AS l');// I use aliasing make joins easier
		$this->db->join('td_postassignment AS pa', 'pa.uid=l.id');
		$this->db->join('tm_post AS p', 'p.id=pa.pid');
		$this->db->where("(`l.DesID` = '3' AND `p.PostName` = 'Tech' AND `pa.Active` = '1')");
		$query=$this->db->get();
		return $query->result();
	}
	public function checkaccess_PD($select = NULL,$conditions = NULL,$id,$tablename = ""){
		if($tablename == ""){
			$tablename = $this->table;
		}
		if($conditions != NULL)
		$this->db->where($conditions);
		if($select != NULL){
			$this->db->select($select);
		}
		else{
			$this->db->select('*');
		}

		//$this->db->where("(`file_type` LIKE ',0,' OR `file_type` LIKE '%,$user_id,%') AND `active` = '1' ");
		$this->db->where("(`ConnID` LIKE '%$id%' OR `UID` LIKE '%$id%')");
		$query = $this->db->get($tablename);
		return $query->result();


	}
	function getUID(){
		$data = $this->getJEID();
		return $data;
	}
	function getPDDataInGrid($stage ,$appStage, $appCat, $uid=0, $Division=0, $jeid=0, $jecomm=0, $Divid=0){

		$this->db->from('ctm_pd AS c');
		$this->db->where('c.Stage',$stage);
		$this->db->where('c.AppStage',$appStage);
		$this->db->where('c.AppCat',$appCat);

		if($uid!=0){
			if($appCat == 'DOM')	
				$this->db->where("(`c.JEID` = '$uid')");
			else
				$this->db->where('c.UserID',$uid);		
		}
		else if($Division!=0){
			$this->db->where('c.Division',$Division);
		}
		else if($jeid!=0){
			$this->db->where('c.JEID',$jeid);
		}
		else if($jecomm!=0){
			$this->db->where('c.jecomm',$jecomm);
		}
		else if($Divid!=0){
			$this->db->where('c.DivID',$Divid);
		}

		$query=$this->db->get();
		
		$data=$query->result();
		$data1=array();
		//echo $this->db->last_query();
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_status AS s');
			$this->db->where('s.uid',$data[$i]->UID);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
			$data1[$i]=$data2;
			$data1[$i][0]->CName=$data[$i]->CName;
			$data1[$i][0]->ConnID=$data[$i]->ConnID;
				
			}	
		}
		
		//var_dump($this->db->last_query());
		
		return array_values($data1);	
		
	}
	function getPDStatusInGrid_EE($uid){
		$this->db->from('ctm_pd AS c');
		//$this->db->where('c.UserID',$uid);
		//$this->db->order_by('c.UserID',"desc");
		$query=$this->db->get();
		
		$data=$query->result();
		$data1=array();
		
		for($i=0;$i<count($data);$i++){
			$this->db->from('ctm_status AS s');
			$this->db->where('s.uid',$data[$i]->UID);
			//$this->db->where('s.userid',$uid);
			$this->db->order_by("s.ID","desc");
			$this->db->limit(1);
			$query1=$this->db->get();
			$data2=$query1->result();
			if(count($data2)==1)
			{
			$data1[$i]=$data2;
			$data1[$i][0]->CName=$data[$i]->CName;
			$data1[$i][0]->ConnID=$data[$i]->ConnID;
			$data1[$i][0]->AppCat=$data[$i]->AppCat;
				
			}	
		}
		
		//var_dump($this->db->last_query());
		
		return array_values($data1);
	}
	function getPDStatusdetailsGrid($uid){
		
		$this->db->from('ctm_status AS s');
		$this->db->join('tm_login AS l', 'l.id=s.userid');
		$this->db->where('s.uid',$uid );
		//$this->db->limit(15,0);
		$this->db->order_by("s.ID", "desc");

		$query=$this->db->get();
		return $query->result();
		
	}
	function getCNSStatusdetailsGrid($uid){
		
		$this->db->from('ctm_status AS s');
		$this->db->join('tm_login AS l', 'l.id=s.userid');
		$this->db->where('s.uid',$uid );
		//$this->db->limit(15,0);
		$this->db->order_by("s.ID", "desc");

		$query=$this->db->get();
		//var_dump($this->db->last_query());
		return $query->result();
		
	}
	function getCONTStatusdetailsGrid($ecid){
		
		$this->db->from('ctm_cont_status AS s');
		$this->db->join('tm_login AS l', 'l.id=s.userid',"left");
		$this->db->where('s.lecid',$ecid );
		//$this->db->limit(15,0);
		$this->db->order_by("s.ID", "desc");

		$query=$this->db->get();
		return $query->result();
		
	}
	function getEEStaffName(){
		$this->db->from('tm_login AS l');
		$this->db->join('td_postassignment AS pa', 'l.id=pa.uid');
		$this->db->where("(`l.DesID` = '1' AND `pa.pid` = '1' AND `pa.Active` = '1')");
		$query=$this->db->get();
		return $query->result();
	}
	function getJEFromDiv($DDL_Div){

		$this->db->from('tm_login AS l');
		if($DDL_Div != -1)
			$this->db->where("(`l.UnderDivision` = '$DDL_Div')");
		$this->db->where("(`l.DesID` = '3')");
		$this->db->where('l.Activated = 1');
		
		$query=$this->db->get();
		return $query->result();
	}
	function checkID_From_ctm_PD($ConnID,$UID,$EmailID){
		
		$this->db->from('ctm_PD AS c');
		$this->db->where("(`c.ConnID` = '$ConnID' AND `c.UID` = '$UID' AND `c.email` = '$EmailID')");
		$query=$this->db->get();
		return $query->result();
	}
	//Hemangi 05-09-2016 11:18 AM
	function checkTrackingID_From_ctm_PD($id){
		
		$this->db->from('ctm_PD AS c');
		$this->db->where("(`c.ConnID` = '$id' OR `c.UID` = '$id')");
		$query=$this->db->get();
		return $query->result();
	}
	function getMaxLTRNO($nowDT,$appaccepted,$appcat){
		$this->db->select_max('c.LTRNO');
		$this->db->from('ctm_PD AS c');
		$this->db->where("(`c.appDT` >= '$nowDT' AND `c.appAccepted` = '$appaccepted' AND `c.AppCat` = '$appcat')");
		$query=$this->db->get();
		return $query->result();
	}
	/*function outward($divid, $subject, $receivertype, $recid,$markto, $owid){
		$dt = $this->now("Y-m-d");
		if($divid==5){
			$divid = 6;
		}
		$owno = $this->getOutwardNo($divid);
	}*/
	public function generateReport($select = NULL,$conditions = NULL,$ddl_je,$txt_dTfrom,$txt_dTto,$tablename = ""){
		
		if($tablename == ""){
			$tablename = $this->table;
		}
		
		if($ddl_je != -1){
			$this->db->where("(`UserID` = '$ddl_je' OR `JEID` = '$ddl_je' OR `jecomm` = '$ddl_je')");
		}
		else if($ddl_je == -1){
			
		}
		if(strlen($txt_dTfrom) > 8){
			$txt_dTfrom = date('Y-m-d',strtotime($txt_dTfrom));
			$this->db->where("(`appDT` >= '$txt_dTfrom')");	
		}
		if(strlen($txt_dTto) > 8){
			$txt_dTto = date('Y-m-d',strtotime($txt_dTto));
			$this->db->where("(`appDT` <= '$txt_dTto')");	
		}
		if($conditions != NULL){
			$this->db->where($conditions);
		}				
		
		if($select != NULL){
			$this->db->select($select);
		}
		else{
			$this->db->select('*');
		}
		
		$query = $this->db->get($tablename);
		//var_dump($this->db->last_query());
		return $query->result();
	}
	public function generateReports($conditions=NULL)
	{
		if($tablename == ""){
			$tablename = $this->table;
		}
		$this->db->select('*,todate(AckDt) as AckDt');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.uid or pa.uid=n.reference_ID');
		$this->db->join('od_address as oa','oa.uid=n.uid or oa.uid=n.reference_ID');
		$this->db->join('tm_occupancytype as ot','ot.id=n.occupancyTypeID');
		 if ($conditions != NULL)
        $this->db->where($conditions);
		//$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		//print_r($this->db->last_query());die;
		return $query->result_array();
	}
	public function generateContReport($select = NULL,$conditions = NULL,$type,$txt_dTfrom,$txt_dTto,$txt_ecid,$txt_lncno,$txt_ackno,$txt_cmpname,$tablename = ""){
		
		if($tablename == ""){
			$tablename = $this->table;
		}
		
		
		/*
		if($type == 'NEW'){
			/*
			$this->db->where("(`is_register` <= 1 OR `is_register` IS NULL) AND (`Stage` IS NULL OR `Stage` NOT IN(0,2)) AND (`AppStage` IS NULL OR `AppStage` NOT IN(0,9))");
			
			$this->db->where("(`is_register` <= 1 OR `is_register` IS NULL)");
			* /
			$this->db->where("(`is_register` = 1)");
		}
		else if($type == 'RENEW'){
			$this->db->where("(`is_register` = 2 OR `is_register` = 4)");
		}
		if($type == 'EXP'){
			$this->db->where("(`is_register` = 3)");
		}
		*/
		if(strlen($txt_ecid)>0){
			$this->db->where("(`ECID` LIKE '%$txt_ecid%')");	
		}
		if(strlen($txt_lncno)>0){
			$this->db->where("(`LLNCNO` LIKE '%$txt_lncno%')");	
		}
		if($type == 'OFFCONT'){
			$this->db->select('l.UserID');
			$this->db->from('tm_login AS l');
			$this->db->where('l.ID',$this->session->userdata('UID'));
			$query=$this->db->get();
			$data3=$query->result();		
			$userid=$data3[0]->UserID;
			$this->db->select('cl.lecid');
			$this->db->from('ctm_lec AS cl');
			$this->db->where('cl.Userid',$userid);
			
			$query=$this->db->get();
			$data3=$query->result();
			//print_r($data3);	
			$this->db->group_start();
			$this->db->join('ctm_sadd AS cs','ctm_ltc.UID=cs.UID');
			foreach($data3 as $row){
				$lecid=$row->lecid;
				
				$this->db->or_where('LECID',$lecid);
				
			}	
			$this->db->group_end();
			
			
			$this->db->where('Contid',$this->session->userdata('UID'));
			$this->db->where('EC_Approved',1);
			$this->db->order_by('ctm_ltc.appdate desc,ctm_ltc.id desc');
			
			
		}
		else if($type == 'ONCONT'){
			$this->db->select('l.UserID');
			$this->db->from('tm_login AS l');
			$this->db->where('l.ID',$this->session->userdata('UID'));
			$query=$this->db->get();
			$data3=$query->result();		
			$userid=$data3[0]->UserID;
			$this->db->select('cl.lecid');
			$this->db->from('ctm_lec AS cl');
			$this->db->where('cl.Userid',$userid);
			
			$query=$this->db->get();
			$data3=$query->result();
			//print_r($data3);	
			$this->db->group_start();
			$this->db->join('ctm_sadd AS cs','ctm_ltc.UID=cs.UID');
			foreach($data3 as $row){
				$lecid=$row->lecid;
				
				$this->db->or_where('LECID',$lecid);
				
			}	
			$this->db->group_end();
			
			
			$this->db->where('Contid',NULL);
			$this->db->order_by('ctm_ltc.appdate desc,ctm_ltc.id desc');
			
		}
		if(strlen($txt_ackno)>0){
			$this->db->where("(`uid` LIKE '%$txt_ackno%')");	
		}
		if(strlen($txt_cmpname)>0){
			
			$this->db->group_start();
			//$this->db->from('ctm_sadd AS csa');
			$this->db->where("(`cs`.`COMPANYNAME` LIKE '%$txt_cmpname%')");	
			$this->db->group_end();
		}
		if(strlen($txt_dTfrom) > 8){
			$txt_dTfrom = date('Y-m-d',strtotime($txt_dTfrom));
			$this->db->group_start();
			$this->db->where("(`appdate` >= '$txt_dTfrom')");	
			$this->db->group_end();
		}
		if(strlen($txt_dTto) > 8){
			$txt_dTto = date('Y-m-d',strtotime($txt_dTto));
			$this->db->group_start();
			$this->db->where("(`appdate` <= '$txt_dTto')");	
			$this->db->group_end();
		}
		
		if($conditions != NULL){
			
			$this->db->where($conditions);
			
		}				
		
		if($select != NULL){
			$this->db->select($select);
		}
		else{
			$this->db->select('*');
			
		}
		
		$query = $this->db->get($tablename);
		//if($this->session->userdata('isAdminUser'))
		//var_dump($this->db->last_query());
		return $query->result();
	}
	
	function getOutwardNo($div){
		$result = 0;
		
			if($div==5){
				$div = 6;
			}
			$date = now("Y-m-d");
			$sd = getFYStartDate($date);
			//$query = "select max(cast(owno as unsigned)) from io_outward where dt>='$sd' and divid =$div";
			//$result=$this->execScalar($query);
			$this->db->select_max('io_out.owno');
			$this->db->from('io_outward AS io_out');
			$this->db->where("(`io_out.dt` >= '$sd' AND `io_out.divid` = '$div')");
			$query=$this->db->get();
			$result = $query->result();
			$result = $result[0]->owno;
			if(is_null($result)){
				$result=1;
			}
			else {
				$result++;
			}
		return $result;
	}
	function getConsumerName($id){
		$this->db->select('c.CName');
		$this->db->from('ctm_PD AS c');
		$this->db->where("(`c.ConnID` = '$id')");
		$query=$this->db->get();
		$result = $query->result();
		$result = $result[0]->CName;
		if(is_null($result)){
			$result="";
		}
		return $result;
	}
	function outward($divid, $subject, $receivertype, $recid,$markto, $owid){
			$dt=now("Y-m-d");
			if($divid==5){
				$divid = 6;
			}
			$owno=$this->getOutwardNo($divid);
		
			$rtype=0;
			$pname="";
			if(is_array($recid)){
				foreach($recid as $party)
				{
					if(strtolower($receivertype)=="consumer"){
						$rtype = 4;
						$pname = $this->getConsumerName($party);
					}
					else if(strtolower($receivertype)=="party"){
						$rtype = 5;
						$pname = getPartyName($party);
					}
					//$query = "insert into io_outward(owno,IWNO,divid,subject,rtype,rid,markto,owid,remark,stage,dt,owby) 
					//		  values('$owno',0,'$divid',ucase('$subject'),'$rtype','$party','$markto','$owid','$pname',1,now(),45)";
					//$this->execQuery($query);
					$io_outward['owno'] = $owno;
					$io_outward['IWNO'] = 0;
					$io_outward['divid'] = $divid;
					$io_outward['subject'] = strtoupper($subject);
					$io_outward['RType'] = $rtype;
					$io_outward['rid'] = $party;
					$io_outward['markto'] = $markto;
					$io_outward['owid'] = $owid;
					$io_outward['remark'] = $pname;
					$io_outward['stage'] = 1;
					$io_outward['dt'] = now("Y-m-d");
					$io_outward['owby'] = 45;
					$this->PD_m->insert($io_outward,NULL,"io_outward");
				}
			}
			else{
				if(strtolower($receivertype)=="consumer"){
					$rtype = 4;
					$pname = $this->getConsumerName($recid);
				}
				else if(strtolower($receivertype)=="party"){
					$rtype = 5;
					$pname = getPartyName($recid);
				}
				//$query = "insert into io_outward(owno,IWNO,divid,subject,rtype,rid,markto,owid,remark,stage,dt,owby)
				//values('$owno',0,'$divid',ucase('$subject'),'$rtype','$recid','$markto','$owid','$pname',1,now(),45)";
				//$this->execQuery($query);
				$io_outward['owno'] = $owno;
				$io_outward['IWNO'] = 0;
				$io_outward['divid'] = $divid;
				$io_outward['subject'] = strtoupper($subject);
				$io_outward['RType'] = $rtype;
				$io_outward['rid'] = $recid;
				$io_outward['markto'] = $markto;
				$io_outward['owid'] = $owid;
				$io_outward['remark'] = $pname;
				$io_outward['stage'] = 1;
				$io_outward['dt'] = now("Y-m-d");
				$io_outward['owby'] = 45;
				$this->PD_m->insert($io_outward,NULL,"io_outward");
				
			}
				//$query = "insert into io_status(owno,iwno,divid,subject,status,markto,markby,IOID,DT) 
					 // values('$owno',0,'$divid',ucase('$subject'),'Letter Auto outwarded','$markto',45,'$owid',now())";
				//$this->execQuery($query);
				$io_status['owno'] = $owno;
				$io_status['iwno'] = 0;
				$io_status['divid'] = $divid;
				$io_status['subject'] = strtoupper($subject);
				$io_status['status'] = 'Letter Auto outwarded';
				$io_status['markto'] = $markto;
				$io_status['markby'] = 45;
				$io_status['IOID'] = $owid;
				$io_status['DT'] = now("Y-m-d");
				
				$this->PD_m->insert($io_status,NULL,"io_status");
			return $owno;
	}
	function getPDPrintSlipUID($uid){
		
		$this->db->from('ctm_status AS s');
		$this->db->where('s.uid',$uid );
		$this->db->limit(1,0);
		$this->db->order_by("s.ID", "asc");

		$query=$this->db->get();
		return $query->result();
		
	}
	function get_PDdata_from_ctm_PD($select = NULL,$conditions = NULL,$id,$ConnID,$tablename = ""){
		if($tablename == ""){
			$tablename = $this->table;
		}
		if($conditions != NULL)
		$this->db->where($conditions);
		if($select != NULL){
			$this->db->select($select);
		}
		else{
			$this->db->select('*');
		}
		if($ConnID != "")
			$this->db->where("(`ConnID` = '$ConnID')");
		if($id != "")
			$this->db->where("(`UID` LIKE '%$id%')");
		
		$query = $this->db->get($tablename);
		//var_dump($this->db->last_query());
		return $query->result();
	}
	function getNotificationCONT(){
		
		///-------------------Contractor-------------------------/////
		$this -> load -> library('Datatable', array('model'   => 'Contractor_m','rowIdCol'=> 'id'));
		$cnsStage=0;$Contnew=0;$newCont=0;$CONTREQNot=0;$CONTNot=0;$CONTDocattach=0;$CONTQueryapp=0;$ContNEW=0;$Contcorr=0;$renewCont=0;$correCont=0;$NewCont=0;$docattachCont=0;$queryappCont=0;$Contrenew=0;$CONTLT=0;$LTcon=0;$CONTNEWREQ=0;$CONTMAIN=0;$CONTHT=0;$HTcon=0;$CONTDOM=0;$DOMcon=0;$CONTLTAD=0;$LTADcon=0;$CONTHTAD=0;$HTADcon;$CONTAD=0;$CONTDOMAD=0;$DOMADcon=0;$CONTLTPA=0;$LTPAcon=0;$CONTPAREQ=0;$CONTHTPA=0;$CONTDOMPA=0;$HTPAcon=0;$DOMPAcon=0;$CONTOFF =0;$verifyCont=0;$Contverify=0;
			
			if ($_SESSION["DesID"]==1){
				$cnsStage = 4;
				$Contnew = $this->Contractor_m->getCONTRACTORNotification($cnsStage, 4);
			}
			elseif ($_SESSION["DesID"]==3){
				$cnsStage = 1;
				$Contnew = $this->Contractor_m->getCONTRACTORNotification($cnsStage, 3);
				$Contnew = $Contnew + $this->Contractor_m->getCONTRACTORNotification(1, 4);
			
			}
			elseif ($_SESSION["DesID"]==2){
				$cnsStage = 3;
				$Contnew = $this->Contractor_m->getCONTRACTORNotification($cnsStage, 4);
			}
			elseif ($_SESSION["DesID"]==10){
				$cnsStage = 0;
				$Contnew =$this->Contractor_m->getCONTRACTORNotification($cnsStage, 9);
			}
			elseif($_SESSION["DesID"]==20){
			
				$cnsStage = 0;
			}
			
			if ($Contnew>=0){////new applications
				$newCont=$newCont + $Contnew;//new
				$CONTREQNot = $newCont;//req
				$CONTNot=$newCont;
				$notif["NEWCONT"]=$newCont;
			}
		////pending doc menu
		if($_SESSION["DesID"]==10){
			
				$CONTDocattach = $this->Contractor_m->getCONTRACTORNotification(2, 9, 1);
			 
			if ($CONTDocattach>=0){////new applications
				$docattachCont=$docattachCont + $CONTDocattach;//new
				$CONTREQNot = $CONTREQNot+ $docattachCont;//req
				$CONTNot=$CONTNot+$docattachCont;
				$notif["DOCATTACHCONT"]=$docattachCont;
				}
				
		}
		//Queried application
		if($_SESSION["DesID"]==10){
			
				$CONTQueryapp = $this->Contractor_m->getCONTRACTORNotification(12, 7);
			 
			if ($CONTQueryapp>=0){////query applications
				$queryappCont=$queryappCont + $CONTQueryapp;//new
				$CONTREQNot = $CONTREQNot + $queryappCont;//req
				$CONTNot=$CONTNot+$queryappCont;
				$notif["QUERYAPPCONT"]=$queryappCont;
				}
				
		}
		///Renew application
		if($_SESSION["DesID"]==3){
				$Contrenew = $this->Contractor_m->getCONTRACTORNotification($cnsStage, 3, 2);
				$Contrenew = $Contrenew + $this->Contractor_m->getCONTRACTORNotification(1, 4, 2);
		}	
		elseif($_SESSION["DesID"]==2)
			$Contrenew = $this->Contractor_m->getCONTRACTORNotification($cnsStage, 4, 2);
		elseif($_SESSION["DesID"]==1)
			$Contrenew = $this->Contractor_m->getCONTRACTORNotification($cnsStage, 4, 2);
		elseif($_SESSION["DesID"]==10)
			$Contrenew = $this->Contractor_m->getCONTRACTORNotification($cnsStage, 9, 2);
				
		if ($Contrenew>=0){////renew applications
			$renewCont=$renewCont + $Contrenew;//new
			$CONTREQNot = $CONTREQNot + $renewCont;//req
			$CONTNot=$CONTNot+$renewCont;
			$notif["RENEWAPPCONT"]=$renewCont;
		}
		/// Correction Application
			if($_SESSION["DesID"]==10){
				$Contcorr =  $this->Contractor_m->getCONTRACTORNotification(0, 3);	
			}
			else if($_SESSION["DesID"]==3){
				$Contcorr = $this->Contractor_m->getCONTRACTORNotification(2, 4);	
			}
			if ($Contcorr>=0){////correction applications
				$correCont=$correCont + $Contcorr;//new
				$CONTREQNot = $CONTREQNot + $correCont;//req
				$CONTNot=$CONTNot+$correCont;
				$notif["CORRAPPCONT"]=$correCont;
				}		
		
		////Verify Application//bijal 6-9-2016 3:15 PM
		if($_SESSION["DesID"]==2){
				$Contverify =  $this->Contractor_m->getCONTRACTORNotification(3, 5);	
			}
		if($_SESSION["DesID"]==10){
			$Contverify =  $this->Contractor_m->getCONTRACTORNotification(1, 6);	
		}
			if ($Contverify>=0){////correction applications
				$verifyCont=$verifyCont + $Contverify;//new
				$CONTREQNot = $CONTREQNot + $verifyCont;//req
				$CONTNot=$CONTNot+$verifyCont;
				$notif["VERIFYAPPCONT"]=$verifyCont;
				}
		if($_SESSION["DesID"]==20){
			//echo "here";
				$ContNEW =  $this->Contractor_m->getCONTNotification(0, 9, 0);	
				//$ContNEW = $ContNEW +  $this->Contractor_m->getCONTNotification(3, 3, 0);	
				
				/*$CONTLT = $this->Contractor_m->getCONTNotification(0, 0, 0,"LT");
				$CONTHT = $this->Contractor_m->getCONTNotification(0, 0, 0,"HT");
				$CONTDOM = $this->Contractor_m->getCONTNotification(0, 0, 0,"DOM");
				
				$CONTLTAD= $this->Contractor_m->getCONTNotification(2, 9, 0,"LT");
				$CONTHTAD= $this->Contractor_m->getCONTNotification(2, 9, 0,"HT");
				$CONTDOMAD= $this->Contractor_m->getCONTNotification(2, 9, 0,"DOM");
				
				$CONTLTPA= $this->Contractor_m->getCONTNotification(0, -1, 0,"LT");
				$CONTHTPA= $this->Contractor_m->getCONTNotification(0, -1, 0,"HT");
				$CONTDOMPA= $this->Contractor_m->getCONTNotification(0, -1, 0,"DOM");*/
				
				
				
			}
			//echo $ContNEW;
			if ($ContNEW>=0){////at contractor side
				$NewCont=$NewCont + $ContNEW;//new
				$CONTMAIN=$CONTMAIN + $NewCont;
				//$CONTREQNot = $CONTREQNot + $NewCont;//req
				//$CONTNot=$CONTNot+$NewCont;
				$notif["CONTNEW"]=$NewCont;
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
			*/
			if($CONTMAIN>0){
					$notif['CONTMAIN']=$CONTMAIN;
				}
			if ($CONTREQNot>=0){
				$notif['CONTREQ']=$CONTREQNot;
			}
			if ($CONTNot>=0){
				$notif['CONTRACTOR']=$CONTNot;
			}
			return $notif;
		//----------------------------------------------//
		
		
		
		
	}
	function getCONTRACTORNotification($stage, $appstage,$fillBy=0){
		if($fillBy ==1){
			if (($_SESSION["DesID"]=="1") || ($_SESSION["DesID"]=="2") || ($_SESSION["DesID"]=="3") ){
				$this->db->from('ctm_lec AS c');
				$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage)");
				$query=$this->db->get();
	
			}
			else if($_SESSION["DesID"]=="10"){
				$this->db->from('ctm_lec AS c');
				$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage AND `c.fillBy` = '$fillBy')");
				$query=$this->db->get();
			}
		}
		else if($fillBy == 2){
			if (($_SESSION["DesID"]=="1") || ($_SESSION["DesID"]=="2") || ($_SESSION["DesID"]=="3") || ($_SESSION["DesID"]=="10")){
				$this->db->from('ctm_lec AS c');
				$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage AND `c.fillBy` = '$fillBy')");
				$query=$this->db->get();
			}
		}
		else{
			if (($_SESSION["DesID"]=="1") || ($_SESSION["DesID"]=="2") || ($_SESSION["DesID"]=="3") || ($_SESSION["DesID"]=="10")){
				if($stage==12 && $appstage == 7 ){
					$this->db->from('ctm_lec AS c');
					$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage)");
					$query=$this->db->get();
				}
				else{
					$this->db->from('ctm_lec AS c');
					$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage AND `c.fillBy` < 2)");
					$query=$this->db->get();
				}
						
			}
		}
		return $query->num_rows();
	}
	function getCONTNotification($stage, $appstage,$EC_Approved,$appcat=""){
			$this->db->select('l.UserID');
			$this->db->from('tm_login AS l');
			$this->db->where('l.ID',$this->session->userdata('UID'));
			$query=$this->db->get();
			$data3=$query->result();		
			$userid=$data3[0]->UserID;
			//var_dump($this->db->last_query());
		if($EC_Approved==0){
			
			if($_SESSION["DesID"]==20){
				$this->db->from('ctm_lec AS cl');
				$this->db->join('ctm_ltc AS c','c.LECID=cl.LECID');
				$this->db->where('cl.Userid',$userid);
				//$this->db->where('c.stage',$stage);
				//$this->db->where('c.appstage',$appstage);
				$this->db->where("(`c.stage` <= 10 AND `c.appstage` <= 9)");
				$this->db->where('c.EC_Approved',$EC_Approved);
				$this->db->where('c.Contid',NULL);
				$query=$this->db->get();
				
				if($appcat !=""){
					$this->db->from('ctm_ltc AS c');
					$this->db->where('c.stage',$stage);
					$this->db->where('c.appstage',$appstage);
					$this->db->where('c.EC_Approved',$EC_Approved);
					$this->db->where('c.Contid',$_SESSION["UID"]);
					$this->db->where('c.appcat',$appcat);
					$query=$this->db->get();
				}
			}
		}
		return $query->num_rows();
	}
	function getNotification(){
		

		$this -> load -> library('Datatable', array('model'   => 'PD_m','rowIdCol'=> 'id'));


		//'' PD new connection Notification;
		
		$cnsStage=0;$LTPD=0;$HTPD=0;$DomPD=0; //LT HT
		$PDLT=0;$PDHT=0;$PDDom=0;$PDNot=0; // PD menu
		$NRNot=0;$PDREQNot=0; // Request & New Request
		$MTRPD=0;$MTRLTPD=0;$MTRHTPD=0;
		$RAPD=0;$RALTPD=0;$RAHTPD=0;
		
		if ($_SESSION["DesID"]!="10"){
			if ($_SESSION["DesID"]==1){
				$cnsStage = 4;

				$LTPD = $this->PD_m->getPDNotification($cnsStage, 4,"LT");
				$HTPD = $this->PD_m->getPDNotification($cnsStage, 4,"HT");
			}
			elseif ($_SESSION["DesID"]==3){
				$cnsStage = 1;
				if ($_SESSION["DivID"]=="1" || $_SESSION["DivID"]=="2" || $_SESSION["DivID"]=="3"){
					$DomPD = $this->PD_m->getPDNotification($cnsStage, 6,"DOM");
					$LTPD = $this->PD_m->getPDNotification($cnsStage, 6,"LT");
					$HTPD = $this->PD_m->getPDNotification($cnsStage, 6,"HT");
				}
				else{
					$DomPD = $this->PD_m->getPDNotification($cnsStage, 7,"DOM");
					
					$LTPD = $this->PD_m->getPDNotification($cnsStage, 7,"LT");
					$HTPD = $this->PD_m->getPDNotification($cnsStage, 7,"HT");
					$LTPD = $LTPD + $this->PD_m->getPDNotification($cnsStage, 4,"LT");
					$HTPD = $HTPD + $this->PD_m->getPDNotification($cnsStage, 4,"HT");
					$RALTPD = $this->PD_m->getPDNotification($cnsStage, 8,"LT");
					$RAHTPD = $this->PD_m->getPDNotification($cnsStage, 8,"HT");
				}
			}
			elseif ($_SESSION["DesID"]==2){
				$cnsStage = 3;
				if ($_SESSION["DivID"]=="1" || $_SESSION["DivID"]=="2" || $_SESSION["DivID"]=="3"){
					$DomPD = $this->PD_m->getPDNotification($cnsStage, 3,"DOM");
					$LTPD = $this->PD_m->getPDNotification($cnsStage, 6,"LT");
					$HTPD = $this->PD_m->getPDNotification($cnsStage, 6,"HT");
					$LTPD = $LTPD + $this->PD_m->getPDNotification($cnsStage, 3,"LT"); //After JE(O&M) pass to AE(O&M)
					$HTPD = $HTPD + $this->PD_m->getPDNotification($cnsStage, 3,"HT"); //After JE(O&M) pass to AE(O&M)
					$MTRDOMPD = $this->PD_m->getPDNotification($cnsStage, 7,"DOM");
					$MTRLTPD = $this->PD_m->getPDNotification($cnsStage, 7,"LT");
					$MTRHTPD = $this->PD_m->getPDNotification($cnsStage, 7,"HT");
				}
				else{
					$DomPD = $this->PD_m->getPDNotification($cnsStage, 3,"DOM");
					$LTPD = $this->PD_m->getPDNotification($cnsStage, 4,"LT");
					$HTPD = $this->PD_m->getPDNotification($cnsStage, 4,"HT");
				}
			}
			if($_SESSION["DesID"]==3){
				$LTPD = $LTPD + $this->PD_m->getPDNotification(1, 3,"LT");
				$HTPD = $HTPD + $this->PD_m->getPDNotification(1, 3,"HT");	
			}
			if ($LTPD>=0){
				$PDLT=$PDLT + $LTPD; // LT
				$NRNot = $PDLT; //New Request
				$PDREQNot = $PDLT; //Request
				$PDNot = $PDLT; // PD
				$notif["NRLT"]=$LTPD; // LT
                
			}
			if ($HTPD>=0){
				$PDHT=$PDHT + $HTPD; // HT
				$NRNot = $NRNot + $PDHT; //New Request
				$PDREQNot = $PDREQNot + $PDHT; //Request
				$PDNot = $PDNot + $PDHT; // PD
				$notif["NRHT"]=$HTPD;// HT
			}
			if ($DomPD>=0){
				$PDDom=$PDDom + $DomPD;
				$NRNot = $NRNot + $DomPD;
				$PDNot = $PDNot + $DomPD;
				$PDREQNot = $PDREQNot + $DomPD;
				//$str = $str . "NCDOMQ:" . $DomQ . ";";
				$notif["NRDOM"]=$DomPD;
			}
			if ($MTRDOMPD>0){
				$MTRPD = $MTRPD + $MTRDOMPD; // DOM for meter
				//$NRNot = $NRNot + $MTRDOMPD; //New Request
				$PDREQNot = $PDREQNot + $MTRDOMPD; //Request
				$PDNot = $PDNot + $MTRDOMPD; // PD
				$notif["MTRDOMPD"]=$MTRDOMPD; // DOM for meter
			}
			if ($MTRLTPD>0){
				$MTRPD = $MTRPD + $MTRLTPD; // LT for meter
				//$NRNot = $NRNot + $MTRLTPD; //New Request
				$PDREQNot = $PDREQNot + $MTRLTPD; //Request
				$PDNot = $PDNot + $MTRLTPD; // PD
				$notif["MTRLTPD"]=$MTRLTPD; // LT for meter
			}
			if ($MTRHTPD>0){
				$MTRPD = $MTRPD + $MTRHTPD; // HT for meter
				//$NRNot = $NRNot + $MTRHTPD; //New Request
				$PDREQNot = $PDREQNot + $MTRHTPD; //Request
				$PDNot = $PDNot + $MTRHTPD; // PD
				$notif["MTRHTPD"]=$MTRHTPD; // HT for meter
			}
			if($RALTPD>0){
				$RAPD = $RAPD + $RALTPD; // LT after released application
				$PDREQNot = $PDREQNot + $RALTPD; //Request
				$PDNot = $PDNot + $RALTPD; // PD
				$notif["RALTPD"]=$RALTPD; // LT after released application
			}
			if($RAHTPD>0){
				$RAPD = $RAPD + $RAHTPD; // HT after released application
				$PDREQNot = $PDREQNot + $RAHTPD; //Request
				$PDNot = $PDNot + $RAHTPD; // PD
				$notif["RAHTPD"]=$RAHTPD; // HT after released application
			}
		}
		// PD Online application
		
		$PDLT=0;$PDHT=0; // PD menu
		
		if ($_SESSION["DesID"]==10){
			//$cnsDom = getPDNotification($cnsStage, 1,"DOM");
			$LTPD = $this->PD_m->getPDNotification(0, 9,"LT");
			$HTPD = $this->PD_m->getPDNotification(0, 9,"HT");
		
			$PDOA  = 0;

	        if($LTPD >= 0){
	            $PDLT = $PDLT + $LTPD; // Online LT
	            $PDOA = $PDOA + $LTPD; // Online Application
	            $PDREQNot = $PDREQNot + $LTPD; // Request
	            $PDNot = $PDNot + $LTPD; // PD

	            $notif["OLTPD"] = $LTPD; // Online LT
	        }
	        if($HTPD >= 0){
	            $PDHT = $PDHT + $HTPD; // Online HT
	            $PDOA = $PDOA + $HTPD; // Online Application
	            $PDREQNot = $PDREQNot + $HTPD; // Request
	            $PDNot = $PDNot + $HTPD; // PD

	            $notif["OHTPD"] = $HTPD; // Online HT
	        }
	        
	        if($PDOA >= 0){
	            $notif["PDOnline"] = $PDOA; // Online Application
	        }
		}
        
        // PD Query application
        $PDLT=0;$PDHT=0; // PD menu
        
		if ($_SESSION["DesID"]==10){
			//$cnsDom = $this->PD_m->getPDNotification($cnsStage, 1,"DOM");
			$LTPD = $this->PD_m->getPDNotification(12, 7,"LT");
			$HTPD = $this->PD_m->getPDNotification(12, 7,"HT");
			
			$PDQA  = 0;
			if($LTPD >= 0){
	            $PDLT = $PDLT + $LTPD; // Online LT
	            $PDQA = $PDQA + $LTPD; // Query Application
	            $PDREQNot = $PDREQNot + $LTPD; // Request
	            $PDNot = $PDNot + $LTPD; // PD

	            $notif["QLTPD"] = $LTPD; // Online LT
	        }
	        if($HTPD >= 0){
	            $PDHT = $PDHT + $HTPD; // Online HT
	            $PDQA = $PDQA + $HTPD; // Online Application
	            $PDREQNot = $PDREQNot + $HTPD; // Request
	            $PDNot = $PDNot + $HTPD; // PD

	            $notif["QHTPD"] = $HTPD; // Online HT
	        }
			if($PDQA >= 0){
	            $notif["PDQuery"] = $PDQA; // Query Application
	        }
	    }
	    
	    // PD Correction application
	     $PDLT=0;$PDHT=0; // PD menu
	     $PDCorr=0;
	     
	     if ($_SESSION["DesID"]==3 || $_SESSION["DesID"]==10){
			if ($_SESSION["DesID"]==3){
				$cnsStage = 2;
			}
			else if ($_SESSION["DesID"]==10){
				$cnsStage = 0;
			}
			
			$LTPD = $this->PD_m->getPDNotification($cnsStage, 4,"LT");
			$HTPD = $this->PD_m->getPDNotification($cnsStage, 4,"HT");
			if ($_SESSION["DesID"]==10){
				if ($_SESSION["DivID"]=="1" || $_SESSION["DivID"]=="2" || $_SESSION["DivID"]=="3"){
					$DomPD = $this->PD_m->getPDNotification($cnsStage, 3,"DOM");
					if ($DomPD >= 0 ){
						//$PDDOM = $PDDOM + $DomPD; // DOM
						$PDCorr = $PDCorr + $DomPD; // Correction
						$PDREQNot = $PDREQNot + $DomPD; // Request
						$PDNot = $PDNot + $DomPD; // PD
						$notif["CorrDOMPD"]=$DomPD;
					}
				}
				else{
					$LTPD = $this->PD_m->getPDNotification($cnsStage, 3,"LT");
					$HTPD = $this->PD_m->getPDNotification($cnsStage, 3,"HT");	
				}
			}
			if ($LTPD >= 0 ){

				$PDLT = $PDLT + $LTPD; // LT
				$PDCorr = $PDCorr + $LTPD; // Correction
				$PDREQNot = $PDREQNot + $LTPD; // Request
				$PDNot = $PDNot + $LTPD; // PD

				$notif["CorrLTPD"]=$LTPD;
			}
			if ($HTPD >= 0 ){

				$PDHT = $PDHT + $HTPD; // HT
				$PDCorr = $PDCorr + $HTPD; // Correction
				$PDREQNot = $PDREQNot + $HTPD; // Request
				$PDNot = $PDNot + $HTPD; // PD

				$notif["CorrHTPD"]=$HTPD;
			}
		}
		if ($PDCorr >= 0 )
                $notif["PDCorrection"]=$PDCorr ; // for corrction menu
        
		//------------------------------------------------
		if ($RAPD>0){
			$PDNot = $PDCorr + $NRNot + $RAPD;
			$PDREQNot = $PDCorr + $NRNot + $RAPD;
			$notif["RAPD"]=$RAPD;
		}
		if ($MTRPD>0){
			$PDNot = $NRNot + $MTRPD;
			$PDREQNot = $NRNot + $MTRPD;
			$notif["MTRPD"]=$MTRPD;
		}
		if ($PDNot>=0){
			$notif["PD"] = $PDNot;
			$notif["PDReq"] = $PDREQNot;
		}
		if ($NRNot>=0){
			$notif["NR"]=$NRNot;
		}


		return $notif;
	}
	function getPDNotification($stage, $appstage, $appcat  = ""){
		$divid = $this->session->userdata('DivID');
		$uid = $this->session->userdata('UID');
		if ( $appcat!=""){
            if ($_SESSION["DesID"]=="1"){
				$this->db->from('ctm_PD AS c');
				$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage AND `c.AppCat` = '$appcat')");

				$query=$this->db->get();
            }
			else if($_SESSION["DesID"]==3){
				if($appstage == 6){
					$this->db->from('ctm_PD AS c');
					$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage AND `c.AppCat` = '$appcat' AND `c.JEID` = '$uid')");
					$query=$this->db->get();
					
				}
				else if($appstage == 7 && $stage == 1){
					$this->db->from('ctm_PD AS c');
					$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage AND `c.AppCat` = '$appcat' AND `c.jecomm` = '$uid')");
					$query=$this->db->get();
					
				}
				else{
					$this->db->from('ctm_PD AS c');
					$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage AND `c.AppCat` = '$appcat' AND `c.userid` = '$uid')");
					$query=$this->db->get();
					
				}
            }
            else if($appstage == 6  || ($appstage == 7 && $stage == 3)) {

				$this->db->from('ctm_PD AS c');
				$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage AND `c.AppCat` = '$appcat' AND `c.Division` = $divid)");
				$query=$this->db->get();
				
			}
            else{
				$this->db->from('ctm_PD AS c');
				$this->db->where("(`c.Stage` = $stage AND `c.AppStage` = $appstage AND `c.AppCat` = '$appcat'  AND `c.DivID` = $divid)");
				$query=$this->db->get();
				
            }
        }
        return $query->num_rows();
	}
	function getcont($type){
		$this->db->select('lecid ,lname');
		$this->db->from('ctm_lec');
		if($type == 'NEW')
			$this->db->where("(`is_register` <= 1 OR `is_register` IS NULL) AND (`Stage` IS NULL OR `Stage` NOT IN(0,2)) AND (`AppStage` IS NULL OR `AppStage` NOT IN(0,9))");
		elseif($type == "RENEW")
			$this->db->where("(`is_register` = 2 or `is_register` = 4)");
		elseif($type == "EXP")
			$this->db->where('is_register',3);
		$this->db->order_by("lname","asc");
		$query=$this->db->get();
		//var_dump($this->db->last_query());
		return $query->result();
	}
	function getPosts(){
		$JETech = $this->hasPost($this->session->userdata('UID'),"Tech",3);
		$data['JETech'] = $JETech;
		$AETech = $this->hasPost($this->session->userdata('UID'),"Tech",2);
		$data['AETech'] = $AETech;
		$ClerkTech = $this->hasPost($this->session->userdata('UID'),"Tech",10);
		$data['ClerkTech'] = $ClerkTech;
		$Inward = $this->hasPost($this->session->userdata('UID'),"Inward",10);
		$data['Inward'] = $Inward;
		$Outward = $this->hasPost($this->session->userdata('UID'),"Outward",10);
		$data['Outward'] = $Outward;
		$OandM = $this->hasPost($this->session->userdata('UID'),"O & M",10);
		$data['OandM'] = $OandM;
		$JEOandM = $this->hasPost($this->session->userdata('UID'),"O & M",3);
		$data['JEOandM'] = $JEOandM;
		$Comm = $this->hasPost($this->session->userdata('UID'),"Comm",2);
		$data['Comm'] = $Comm;
		$MRT = $this->hasPost($this->session->userdata('UID'),"MRT",3);
		$data['JEMRT'] = $MRT;

		return $data;
	}
	function getNOCGridData($stage, $appstage)//get provisional app type data
	{
		$this->db->select('n.UID,n.priority,n.Provisional_Type,pa.premises_name,oa.ODName');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.uid');
		$this->db->join('od_address as oa','oa.uid=n.uid');
		$this->db->where("stage = '$stage' and appstage='$appstage' and type=1");
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getFNOCGridData($stage,$appstage)//get final app type data
	{
		$this->db->select('*');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.reference_ID');
		$this->db->join('od_address as oa','oa.uid=n.reference_ID');
		$this->db->where("n.stage = '$stage' and n.appstage='$appstage' and n.type=2");
		$this->db->order_by("priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getINOCGridData($stage, $appstage ,$userid)//get provisional inspection data
	{ 		
		$this->db->select('n.UID,n.priority,n.Provisional_Type,pa.premises_name,oa.ODName,n.uploadIUID');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.uid');
		$this->db->join('od_address as oa','oa.uid=n.uid');
		$this->db->where("(stage = $stage and appstage=$appstage) and (find_in_set($userid,n.SFOID) or find_in_set($userid,n.ASFOID)) and type=1");
		/*$this->db->where_in('n.SFOID',$userid );
		$this->db->or_where_in('n.ASFOID',$userid);*/
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getIFNOCGridData($stage, $appstage ,$userid)//get final inspection data
	{ 		
		$this->db->select('n.UID,n.priority,pa.premises_name,oa.ODName,n.uploadIUID');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.reference_ID');
		$this->db->join('od_address as oa','oa.uid=n.reference_ID');
		$this->db->where("(stage = $stage and appstage=$appstage) and (find_in_set($userid,n.SFOID) or find_in_set($userid,n.ASFOID))and type=2");
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getNotingNOCGridData($stage, $appstage ,$userid)//get provisional noting SFO data
	{
		$this->db->select('n.UID,n.priority,n.Provisional_Type,pa.premises_name,oa.ODName');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.uid');
		$this->db->join('od_address as oa','oa.uid=n.uid');
		$this->db->where("stage =$stage and appstage=$appstage and n.NSFOID=$userid and n.type=1");
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getASFONotingNOCGridData($stage, $appstage ,$userid)//get provisional noting ASFO data
	{
		$this->db->select('n.UID,n.priority,n.Provisional_Type,pa.premises_name,oa.ODName');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.uid');
		$this->db->join('od_address as oa','oa.uid=n.uid');
		$this->db->where("stage =$stage and appstage=$appstage and n.NASFOID=$userid and n.type=1");
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getNotingFNOCGridData($stage, $appstage ,$userid)//get final noting SFO data
	{
		$this->db->select('n.UID,n.priority,pa.premises_name,oa.ODName');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.reference_ID');
		$this->db->join('od_address as oa','oa.uid=n.reference_ID');
		$this->db->where("stage =$stage and appstage=$appstage and n.NSFOID=$userid and n.type=2");
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getASFONotingFNOCGridData($stage, $appstage ,$userid)//get final noting ASFO data
	{
		$this->db->select('n.UID,n.priority,pa.premises_name,oa.ODName');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.reference_ID');
		$this->db->join('od_address as oa','oa.uid=n.reference_ID');
		$this->db->where("stage =$stage and appstage=$appstage and n.NASFOID=$userid and n.type=2");
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getApplicationStatus($condition)
	{
		$this->db->select('n.UID,n.last_action_Date,pa.premises_name,oa.ODName,n.AppType,n.currentStatus');
		$this->db->from('noc_request as n');
		$this->db->join('premises_address as pa','pa.uid=n.uid or pa.uid=n.reference_ID');
		$this->db->join('od_address as oa','oa.uid=n.uid or oa.uid=n.reference_ID');
		
		$this->db->where("$condition");
		$this->db->order_by("n.last_action_Date", "asc");
		$query = $this->db->get();
		//print_r($this->db->last_query());die;
		return $query->result_array();
	}
	function FinalNOCUID($refernece_ID)
	{
		$query = "select uid from noc_request where reference_ID='$refernece_ID' order by ID desc limit 1,1";
		
		$res = fetchRows($query);
		$row =  $res->rows;
		$FUID = $row[0]['uid'];
		return $FUID;
	}
	function getRFNOCGridData($stage,$appstage)
	{
		$this->db->select('*');
		$this->db->from('noc_request as n');
		//$this->db->join('premises_address as pa','pa.uid=n.reference_ID');
		//$this->db->join('od_address as oa','oa.uid=n.reference_ID');
		$this->db->where("n.stage = '$stage' and n.appstage='$appstage' and n.type='3'");
		$this->db->order_by("priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getIRFNOCGridData($stage, $appstage ,$userid)//get final inspection data
	{ 		
		// $this->db->select('n.UID,n.priority,pa.premises_name,oa.ODName,n.uploadIUID');
		$this->db->select('*');
		$this->db->from('noc_request as n');
		// $this->db->join('premises_address as pa','pa.uid=n.reference_ID');
		// $this->db->join('od_address as oa','oa.uid=n.reference_ID');
		$this->db->where("(stage = $stage and appstage=$appstage) and (find_in_set($userid,n.SFOID) or find_in_set($userid,n.ASFOID))and type=3");
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getASFONotingRFNOCGridData($stage, $appstage ,$userid)//get renewal final noting ASFO data
	{
		$this->db->select('*');
		$this->db->from('noc_request as n');
		// $this->db->join('premises_address as pa','pa.uid=n.reference_ID');
		// $this->db->join('od_address as oa','oa.uid=n.reference_ID');
		$this->db->where("stage =$stage and appstage=$appstage and n.NASFOID=$userid and n.type=3");
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function getNotingRFNOCGridData($stage, $appstage ,$userid)//get renewal final noting SFO data
	{
		$this->db->select('*');
		$this->db->from('noc_request as n');
		// $this->db->join('premises_address as pa','pa.uid=n.reference_ID');
		// $this->db->join('od_address as oa','oa.uid=n.reference_ID');
		$this->db->where("stage =$stage and appstage=$appstage and n.NSFOID=$userid and n.type=3");
		$this->db->order_by("n.priority", "asc");
		$query = $this->db->get();
		return $query->result();
	}
	function logout(){
		$tm_activity['actDate'] = now('d-m-y');
		$tm_activity['Description']="User Log Out from IP : " . $_SERVER['REMOTE_ADDR'] . "!!!'";
		$tm_activity['UserId']= $this->session->userdata('UID');
		$tm_activity['Division']= $this->session->userdata('Division');
		$tm_activity['Designation']= $this->session->userdata('Designation');
		$tm_activity['Type']="Login";
		if($this->Contractor_m->insert($tm_activity,NULL,"tm_activity")!=-1)
			return true;
		$this->session->sess_destroy();
	}
}