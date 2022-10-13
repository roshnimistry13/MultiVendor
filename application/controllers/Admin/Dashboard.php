<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata(ADMIN_SESSION))){
			redirect('admin');
		}
	}
	public function index()
	{
 		$data['totalproducts'] 		= $this->Master_m->totalProductsCount(); 
 		$data['totalvendors'] 		= $this->Master_m->totalVendorCount();
 		$data['totalorders']		= $this->Master_m->totalOrderCount();
 		$data['totalCustomers'] 	= $this->Master_m->totalCustomerCount();
		
		
		$headdata['title'] 		= 'Dashboard | '.ADMIN_THEME;		
		$jsdata['pagejs']	 	= array('application/Dashboard.js');
		$this->load->view('Admin/Common/Header',$headdata);
		$this->load->view('Admin/Common/Topbar');
		$this->load->view('Admin/Common/Sidebar');
		$this->load->view('Admin/Dashboard/Dashboard_v',$data);
		$this->load->view('Admin/Common/Footer',$jsdata);
	}

	function databaseBackUp()
	{
		//ENTER THE RELEVANT INFO BELOW
		$mysqlUserName = DBUSER;
		$mysqlPassword = DBPASS;
		$mysqlHostName = DBHOST;
		$DbName        = DBNAME;
		$backup_name   = "mybackup.sql";
		$tables        = "";

		//or add 5th parameter(array) of specific tables:    array("mytable1","mytable2","mytable3") for multiple tables

		$this->Export_Database($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName,  $tables        = false, $backup_name = false );
	}

	function Export_Database($host,$user,$pass,$name,  $tables = false, $backup_name = false )
	{
		$mysqli      = new mysqli($host,$user,$pass,$name);
		$mysqli->select_db($name);
		$mysqli->query("SET NAMES 'utf8'");

		$queryTables = $mysqli->query('SHOW TABLES');
		while($row = $queryTables->fetch_row()){
			$target_tables[] = $row[0];
		}
		if($tables !== false){
			$target_tables = array_intersect( $target_tables, $tables);
		}
		foreach($target_tables as $table){
			$result        = $mysqli->query('SELECT * FROM '.$table);
			$fields_amount = $result->field_count;
			$rows_num      = $mysqli->affected_rows;
			$res           = $mysqli->query('SHOW CREATE TABLE '.$table);
			$TableMLine    = $res->fetch_row();
			$content       = (!isset($content) ?  '' : $content) . "\n\n".$TableMLine[1].";\n\n";

			for($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter = 0){
				while($row = $result->fetch_row()){
					//when started (and every after 100 command cycle):
					if($st_counter % 100 == 0 || $st_counter == 0 ){
						$content .= "\nINSERT INTO ".$table." VALUES";
					}
					$content .= "\n(";
					for($j = 0; $j < $fields_amount; $j++){
						$row[$j] = str_replace("\n","\\n", addslashes($row[$j]) );
						if(isset($row[$j])){
							$content .= '"'.$row[$j].'"' ;
						}
						else
						{
							$content .= '""';
						}
						if($j < ($fields_amount - 1)){
							$content .= ',';
						}
					}
					$content .= ")";
					//every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
					if( (($st_counter + 1) % 100 == 0 && $st_counter != 0) || $st_counter + 1 == $rows_num){
						$content .= ";";
					}
					else
					{
						$content .= ",";
					}
					$st_counter = $st_counter + 1;
				}
			} $content .= "\n\n\n";
		}
		//$backup_name = $backup_name ? $backup_name : $name."___(".date('H - i - s')."_".date('d - m - Y').")__rand".rand(1,11111111).".sql";
		$backup_name = $backup_name ? $backup_name : $name.".sql";
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary");
		header("Content-disposition: attachment; filename=\"".$backup_name."\"");
		echo $content; exit;
	}

	public function AddSql(){
		$role_id 	= $this->session->userdata[ADMIN_SESSION]['role_id'];
		if($role_id == 2){
			$headdata['title'] 		= 'SQL | '.ADMIN_THEME;		
			$headdata['page'] 		= "sql-operation";
			$jsdata['pagejs']	 	= array('');
			$this->load->view('Admin/Common/Header',$headdata);
			$this->load->view('Admin/Common/Topbar');
			$this->load->view('Admin/Common/Sidebar');
			$this->load->view('Admin/Sql/AlterSql_v');
			$this->load->view('Admin/Common/Footer',$jsdata);
		}else{
			redirect('error-page');
		}
		
	}
	public function alterDBTableFiled(){
		
		$mysqlUserName = DBUSER;
		$mysqlPassword = DBPASS;
		$mysqlHostName = DBHOST;
		$DbName        = DBNAME;
		$conn      		= new mysqli($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}	
		
		$sql 				= $this->input->post('text_sql');
		$sql_error_arr 		= array();
		$i = 1;
		if(!empty($sql) && $sql !="" && $sql != null){
			
			$query_obj = explode('||',$sql);
			
			if(!empty($query_obj)){
				foreach($query_obj as $query){
					$alter = mysqli_query($conn,$query);
					logThis($query, date('Y-m-d'),'SQL Oeration');
					if($conn -> error){
						$sql_error_arr[$i]['error'] = $conn -> error;
						$sql_error_arr[$i]['query'] = $query;
						logThis($conn -> error, date('Y-m-d'),'SQL Oeration');
					}
					$i++;	
				}
			}
			if(empty($sql_error_arr)){
				$this->session->set_flashdata('success', 'Alter Sql Succesfully');
				redirect('sql-operation');
			}
			else{
				echo '<pre>'; print_r($sql_error_arr); echo '</pre>';
				echo '<a href="'.base_url('sql-operation').'">Back To Page</a>';
				$this->session->set_flashdata('error', 'Try Again');
			}			
		}			
	}
}