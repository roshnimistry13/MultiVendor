<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operation extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(empty($this->session->userdata(ADMIN_SESSION))){
			redirect('admin');
		}else if($this->session->userdata(ADMIN_SESSION)['user_id'] != "999"){
			redirect('error-page');
		}
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
		$rid 		= $this->config->item('user_login')['rid'];
		if($role_id == $rid){
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

	public function fetchResult(){
		$role_id 	= $this->session->userdata[ADMIN_SESSION]['role_id'];
		$rid 		= $this->config->item('user_login')['rid'];
		if($role_id == $rid){
			$headdata['title'] 		= 'SQL | '.ADMIN_THEME;		
			$headdata['page'] 		= "sql-operation";
			$jsdata['pagejs'] 		= array('application/sql.js');
			$this->load->view('Admin/Common/Header',$headdata);
			$this->load->view('Admin/Common/Topbar');
			$this->load->view('Admin/Common/Sidebar');
			$this->load->view('Admin/Sql/FetchSql_v');
			$this->load->view('Admin/Common/Footer',$jsdata);
		}else{
			redirect('error-page');
		}
		
	}

	public function fetchSqlResult(){
		
		$mysqlUserName = DBUSER;
		$mysqlPassword = DBPASS;
		$mysqlHostName = DBHOST;
		$DbName        = DBNAME;
		$conn      		= new mysqli($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}	
		$json = array();
		$sql 				= $this->input->post('text_sql');
		$sql_error_arr 		= array();
		$i = 1;
		if(!empty($sql) && $sql !="" && $sql != null){		
			
			if(!empty($sql)){				

				$result = mysqli_query($conn, $sql);				
				if($conn -> error){

					$json['error'] = $conn -> error;

				}else{	
					$num    = mysqli_num_rows($result);	
					if($num > 0){
						$k = 0;
						//$i = 0;
						$tot_col = 0;
						$table = '<div class="table-responsive"><table class="table" id="query_datatable_result">
						<thead>
						<tr>';
						while($row = $result->fetch_assoc())
						{
							if($k == 0)
							{
								foreach($row as $key=>$value)
								{
									$table .= '<th><span class="userDatatable-title">'.$key.'</th></span>';
								}
								$k = 1;
								$table .= '</tr>
								</thead>
								<tbody>';
							}
							$table .= '<tr>';
							foreach($row as $key1=>$value1)
							{
								$table .= '<td class="userDatatable-content">'.$value1.'</td>';
							}

							$table .= '</tr>';

						}
						$table .= '</tbody>
						</table></div>';
						$json['success'] = 'success';
						$json['table'] = $table;
					}else{
						$json['error'] = 'No data found';
					}
				}
				$this->output->set_content_type('application/json', 'utf-8');
				$this->output->set_output(json_encode($json));
			}
					
		}			
	}

	public function importSql(){
		$role_id 	= $this->session->userdata[ADMIN_SESSION]['role_id'];
		$rid 		= $this->config->item('user_login')['rid'];
		if($role_id == $rid){
			$headdata['title'] 		= 'SQL | '.ADMIN_THEME;		
			$headdata['page'] 		= "sql-operation";
			$jsdata['pagejs'] 		= array('application/sql.js');
			$this->load->view('Admin/Common/Header',$headdata);
			$this->load->view('Admin/Common/Topbar');
			$this->load->view('Admin/Common/Sidebar');
			$this->load->view('Admin/Sql/Import_v');
			$this->load->view('Admin/Common/Footer',$jsdata);
		}else{
			redirect('error-page');
		}
	}

	public function importDatabase(){
		$json = array();
		if($_FILES["database"]["name"] != ''){

			$array = explode(".", $_FILES["database"]["name"]);
			$extension = end($array);

			if($extension == 'sql'){

				$mysqlUserName = DBUSER;
				$mysqlPassword = DBPASS;
				$mysqlHostName = DBHOST;
				$DbName        = "ci4";
				$conn      		= new mysqli($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName);

				$output = '';
				$count = 0;
				$file_data = file($_FILES["database"]["tmp_name"]);
				foreach($file_data as $row){
					$start_character = substr(trim($row), 0, 2);
					if($start_character != '--' || $start_character != '/*' || $start_character != '//' || $row != '')
					{
						$output = $output . $row;
						$end_character = substr(trim($row), -1, 1);
						if($end_character == ';')
						{
							if(!mysqli_query($conn, $output)) {
								$count++;
							}
						$output = '';
						}
					}
				}
				if($count > 0) {
					$json['error'] = 'There is an error in Database Import';
				}
				else {
					$json['success'] = 'Database Successfully Imported';
				}
			}
		}
		$this->output->set_content_type('application/json', 'utf-8');
		$this->output->set_output(json_encode($json));
	}

	function databaseBackUpAndMail()
	{
		//ENTER THE RELEVANT INFO BELOW
		$mysqlUserName = DBUSER;
		$mysqlPassword = DBPASS;
		$mysqlHostName = DBHOST;
		$DbName        = DBNAME;
		$backup_name   = "mybackup.sql";
		$tables        = "";
	
		//or add 5th parameter(array) of specific tables:    array("mytable1","mytable2","mytable3") for multiple table
		$this->exportDatabaseForMail($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName,  $tables        = false, $backup_name = false );
	}
	function exportDatabaseForMail($host,$user,$pass,$name,  $tables = false, $backup_name = false )
	{
		$mysqli      = new mysqli($host,$user,$pass,$name);
		$mysqli->select_db($name);
		$mysqli->query("SET NAMES 'utf8'");
		
		$queryTables = $mysqli->query('SHOW TABLES');
		while($row = $queryTables->fetch_row())
		{
			$target_tables[] = $row[0];
		}
		if($tables !== false)
		{
			$target_tables = array_intersect( $target_tables, $tables);
		}
		foreach($target_tables as $table)
		{
			$result        = $mysqli->query('SELECT * FROM '.$table);
			$fields_amount = $result->field_count;
			$rows_num      = $mysqli->affected_rows;
			$res           = $mysqli->query('SHOW CREATE TABLE '.$table);
			$TableMLine    = $res->fetch_row();
			$content       = (!isset($content) ?  '' : $content) . "\n\n".$TableMLine[1].";\n\n";

			for($i = 0, $st_counter = 0; $i < $fields_amount;   $i++, $st_counter = 0)
			{
				while($row = $result->fetch_row())
				{
					//when started (and every after 100 command cycle):
					if($st_counter % 100 == 0 || $st_counter == 0 )
					{
						$content .= "\nINSERT INTO ".$table." VALUES";
					}
					$content .= "\n(";
					for($j = 0; $j < $fields_amount; $j++)
					{
						$row[$j] = str_replace("\n","\\n", addslashes($row[$j]) );
						if(isset($row[$j]))
						{
							$content .= '"'.$row[$j].'"' ;
						}
						else
						{
							$content .= '""';
						}
						if($j < ($fields_amount - 1))
						{
							$content .= ',';
						}
					}
					$content .= ")";
					//every after 100 command cycle [or at last line] ....p.s. but should be inserted 1 cycle eariler
					if( (($st_counter + 1) % 100 == 0 && $st_counter != 0) || $st_counter + 1 == $rows_num)
					{
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
		
		$fileName = time();
		$dir = date('d-m-Y');
		//$query    = $msg;
		$path     = DATAPATH."DB Backup/$dir/";
		$fileName = str_replace("/", "_",$fileName) . ".sql";
		if(!is_dir($path))
		mkdir($path,0777,true);
		
		$filepath = $path.$fileName;
		
		if(!file_exists($filepath)){
			$handle = fopen($filepath, "a+");
			$sql    = $content;
			fwrite($handle, $sql . "\n\n");
			fclose($handle);
		}
		$attachFile = DB_BACKUP_URL.$dir.'/'.$fileName;
		
		//$smtp_data    = $this->Master_m->getSmtpDetails();

		$mailData['subject'] = "Hello Your AIC db backup ".date('d-m-Y H:i:s');
		$mailData['from_name'] = "Multivendor";
		$mailData['fromID'] = 'devloperproactii@gmail.com';
		$mailData['attachFile'] = $attachFile;
		$mailData['toID'] = 'dainik.tandel@proactii.com';
		$mailData['message'] = "Test";
		$send = send_email($mailData);
		if($send){
			$this->session->set_flashdata('success','Mail Send Succesfully.');
		}
		redirect('dashboard');
	}

	public function dropAllTables(){
		$user = DBUSER;
		$pass = DBPASS;
		$host = DBHOST;
		$name = DBNAME;

		$mysqli      = new mysqli($host,$user,$pass,$name);
		$mysqli->query('SET foreign_key_checks = 0');
		if ($result = $mysqli->query("SHOW TABLES"))
		{
			while($row = $result->fetch_array(MYSQLI_NUM))
			{
				$mysqli->query('DROP TABLE IF EXISTS '.$row[0]);
			}
		}
		$mysqli->query('SET foreign_key_checks = 1');
		
		if($mysqli -> error){
			$this->session->set_flashdata('error',$conn -> error);
		}else{
			redirect('import-sql');
		}
		$mysqli->close();
	}
}