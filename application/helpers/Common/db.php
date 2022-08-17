<?php

/*
* DB Class
* This class is used for database related (connect, insert, update, and delete) operations
* with PHP Data Objects (PDO)
* @author    Jagdish Patel
* @Date   01-09-2016
*/
class DB{
	private $dbHost = DBHOST;
	private $dbUsername = DBUSER;
	private $dbPassword = DBPASS;
	private $dbName = DBNAME;

	public function __construct(){
		if(!isset($this->db)){
			// Connect to the database
			try{
				$conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName.";charset=utf8", $this->dbUsername, $this->dbPassword);
				$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->db = $conn;
			}catch(PDOException $e){
				die("Failed to connect with MySQL: " . $e->getMessage());
			}
		}
	}

	/*
	* Returns rows from the database based on the conditions
	* @param string $table name of the table
	* @param array $conditions select, where, orderBy, limit and return_type conditions
	*/
	public function select($table,$conditions = array()){
		try{
			$sql = 'SELECT ';
			$sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
			$sql .= ' FROM '.$table;
			if(array_key_exists("where",$conditions)){
				$sql .= ' WHERE ';
				$i = 0;
				if(isset($conditions['where']['type']) && $conditions['where']['type'] == 'String'){
					$sql .= " ". $conditions['where']['query'];
				}
				else{
					foreach($conditions['where'] as $key => $value){
						$pre = ($i > 0)?' AND ':'';
						if($key=='where'){
							$sql .= "$pre $value";
						}
						else if(is_array($value)){
							$o = $value['op'];
							if(isset($conditions['wrapVal']) && !$conditions['wrapVal'])
							$q = "";
							else
							$q = "'";
							$v = "$q".$value['val']."$q";

							$p = strpos($o,'in');
							if($p === false){
								$sql .= "$pre $key $o $v";
							}
							else{
								$p = strpos($o,'not');
								if($p === false){
									$sql .= "$pre find_in_set($key , $v)";
								}
								else{
									$sql .= "$pre not find_in_set($key , $v)";
								}
							}
						}
						else{
							$o = '=';
							$v = "'$value'";
							$sql .= "$pre $key $o $v";
						}
						$i++;
					}
				}
			}

			if(array_key_exists("orderBy",$conditions)){
				$sql .= ' ORDER BY '.$conditions['orderBy'];
			}

			if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
				$sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit'];
			}
			elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
				$sql .= ' LIMIT '.$conditions['limit'];
			}

			$query = $this->db->prepare($sql);
			$query->execute();
			$data  = new stdClass;
			if((array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all') ||
				array_key_exists("return",$conditions) && $conditions['return'] != 'all'){
				if(isset($conditions['return_type']))
				$conditions['return'] = $conditions['return_type'];
				switch($conditions['return']){
					case 'count':
					//$data->res = $query->rowCount();
					$data->count = $query->rowCount();
					break;
					case 'single':
					if(array_key_exists("assoc",$conditions) && $conditions['assoc'])
					$data = (object)$query->fetch(PDO::FETCH_ASSOC);
					else
					$data = (object)$query->fetch();
					$data->count = $query->rowCount();
					break;
					default:
					$data->message = 'No return type specified';
					$data->status = 'warning';
					$data->count = - 1;
				}
			}
			else{
				if($query->rowCount() > 0){
					$data->count = $query->rowCount();
					if(array_key_exists("assoc",$conditions) && $conditions['assoc'])
					$assoc = PDO::FETCH_ASSOC;
					else
					$assoc = $assoc = PDO::FETCH_BOTH;

					if($data->count == 1){
						$data->rows = (array) $query->fetchAll($assoc);
						$data->row = (object) $data->rows[0];
					}
					else{
						$data->rows = $query->fetchAll($assoc);
						$data->row = (object)$data->rows[0];
					}

				}
				else
				$data->count = 0;
			}
			if(!isset($data->count))
			$data->count = 0;

			if(array_key_exists("return_type",$conditions) && $conditions['return_type'] == 'count'){
				$data->status = 'success';
				//$data->message = 'No records fetched';
			}
			else
			if($data->count == 0 ){
				$data->status = 'success';
				$data->message = 'No records fetched';
			}
			elseif($data->count == 1 ){
				$data->message = '1 record fetched';
				$data->status = 'success';
			}
			elseif($data->count > 1 ){
				$data->message = $data->count. ' records fetched';
				$data->status = 'success';
			}

			$data->query = $sql;
		}
		catch(Exception $e){
			$data  = new stdClass;
			$data->status = "error";
			$data->message = DEBUGGING?'Select Failed: '.$e->getMessage():'Something went wrong in application. Please send screenshot to developer';
			$data->trace = $e->getMessage();
			$data->query = $sql;
			$data->count = 0;
		}
		//$data = (object)$data;
		return !empty($data)?$data:false;
	}

	/*
	* Insert data into the database
	* @param string name of the table
	* @param array the data for inserting into the table
	* @param array $requiredColumnsArray columns name which is required
	* */
	public function insert($table, $columnsArray, $requiredColumnsArray = array()){
		if(!empty($table) && !empty($columnsArray) && is_array($columnsArray)){
			if(!empty($requiredColumnsArray))
			$this->verifyRequiredParams($columnsArray, $requiredColumnsArray);
			$params = array();
			$query = "";
			try{
				$c = "";
				$v = "";
				foreach($columnsArray as $key => $value){
					$c .= "`$key`, ";
					$v .= ":i".$key. ", ";
					$params[":i".$key] = $value;
				}
				$c     = rtrim($c,', ');
				$v     = rtrim($v,', ');
				$query = "INSERT INTO $table($c) VALUES($v)";
				$stmt  = $this->db->prepare($query);
				$insert= $stmt->execute($params);
				if($insert){
					$affected_rows = $stmt->rowCount();
					$response["status"] = "success";
					$response["message"] = $affected_rows." row inserted into database";
					$response["id"] = $this->db->lastInsertId();
					$response["query"] = $this->sql_debug($query,$params);
				}
				else{
					$response["status"] = "error";
					$response["message"] = 'Error inserting data';
					$response["query"] = $this->sql_debug($query,$params);
					$response["code"] = $stmt->errorCode();
				}
			}catch(PDOException $e){
				$response["status"] = "error";
				$response["message"] = DEBUGGING?'Insert Failed: '.$e->getMessage():'Something went wrong in application. Please send screenshot to developer';
				$response["trace"] = $e->getMessage();
				$response["query"] = $this->sql_debug($query,$params);
			}
		}
		else{
			$response["status"] = "error";
			$response["message"] = 'Please enter some data to insert';
		}
		return (object)$response;
	}

	/*
	* Update data into the database
	* @param string name of the table
	* @param array the data for updating into the table
	* @param array where condition on updating data
	* @param array $requiredColumnsArray columns name which is required
	* */
	public function update($table, $columnsArray, $where, $requiredColumnsArray = array()){
		if(!empty($table) && !empty($columnsArray) && is_array($columnsArray)){
			if(!empty($requiredColumnsArray))
			$this->verifyRequiredParams($columnsArray, $requiredColumnsArray);
			$params = array();
			$query = "";
			try{

				$w = "";
				$c = "";
				foreach($where as $key => $value){
					/*if(is_array($value)){
					$o = $value['op'];
					$p = strpos($o,'in');
					if($p === false)
					$q = "'";
					else
					$q = "";
					$v = "$q".$value['val']."$q";
					}
					else{
					$o = '=';
					$v = "'$value'";
					}
					*/
					$o = '=';
					$v = $value;
					$w .= " and " .$key. " $o :w".stripify($key);
					$params[":w".stripify($key)] = $v;
				}
				foreach($columnsArray as $key => $value){
					$c .= "`$key`". " = :u".$key.", ";
					$params[":u".$key] = $value;
				}
				$c             = rtrim($c,", ");
				$query         = "UPDATE $table SET $c WHERE 1=1 ".$w;
				$stmt          = $this->db->prepare($query);
				$stmt->execute($params);
				$affected_rows = $stmt->rowCount();
				
				if($affected_rows <= 0){
					$response["status"] = "warning";
					$response["message"] = "No row updated";
					$response["query"] = $this->sql_debug($query,$params);
				}
				else{
					$response["status"] = "success";
					$response["message"] = $affected_rows." row(s) updated in database";
					$response["query"] = $this->sql_debug($query,$params);
				}
			}
			catch(PDOException $e){
				$response["status"] = "error";
				$response["message"] = DEBUGGING?'Update Failed: '.$e->getMessage():'Something went wrong in application. Please send screenshot to developer';
				$response["trace"] = $e->getMessage();
				$response["query"] = $this->sql_debug($query,$params);
			}
		}
		else{
			$response["status"] = "error";
			$response["message"] = 'Please enter some data to update';
		}
		return (object)$response;
	}

	/*
	* Delete data from the database
	* @param string name of the table
	* @param array where condition on deleting data
	*/
	public function delete($table, $where){
		if(count($where) <= 0){
			$response["status"] = "warning";
			$response["message"] = "Delete Failed: At least one condition is required";
		}
		elseif(empty($table)){
			$response["status"] = "warning";
			$response["message"] = "Delete Failed: Table name is required";
		}
		else{
			$params = array();
			$query = "";
			try{
				$w = "";
				foreach($where as $key => $value){
					$w .= " and " .$key. " = :w".stripify($key);
					$params[":w".stripify($key)] = $value;
				}
				$query         = "DELETE FROM $table WHERE 1=1 ".$w;
				$stmt          = $this->db->prepare($query);
				$stmt->execute($params);
				$affected_rows = $stmt->rowCount();
				if($affected_rows <= 0){
					$response["status"] = "warning";
					$response["message"] = "No row deleted";
					$response["query"] = $this->sql_debug($query,$params);
				}
				else{
					$response["status"] = "success";
					$response["message"] = $affected_rows." row(s) deleted from database";
					$response["query"] = $this->sql_debug($query,$params);
				}
			}catch(PDOException $e){
				$response["status"] = "error";
				$response["message"] = DEBUGGING?'Delete Failed: '.$e->getMessage():'Something went wrong in application. Please send screenshot to developer';
				$response["trace"] = $e->getMessage();
				$response["query"] = $this->sql_debug($query,$params);
			}
		}
		return (object)$response;
	}

	/**
	* Saves data into the database, if data exists already then updates it else inserts new record.
	* @param string $table Name of the table
	* @param array $columnsArray the data to insert/update the table
	* @param array $where condition to update the table if record exists
	* @param array $requiredColumnsArray columns name which is required
	*
	* @return stdClass object (status: {success,error, warning},count: affected Rows, message: message to display, query: Sql query for debugging,id : lastInsertID)
	*/
	public function save($table, $columnsArray, $where, $requiredColumnsArray = array()){
		if(!empty($table) && !empty($columnsArray) && is_array($columnsArray)){
			$select['where'] = $where;
			$select['return_type'] = 'count';

			if($this->select($table,$select)->count > 0){
				$response = $this->update($table,$columnsArray,$where,$requiredColumnsArray);
			}
			else{
				$response = $this->insert($table,$columnsArray,$requiredColumnsArray);
			}
		}
		else{
			$response->status = "error";
			$response->message = 'Please enter some data to update';
		}
		return $response;
	}

	/*
	* Executes Specified Query to Database
	* @param string name of the table
	* @param array the data for inserting into the table
	* @param array $requiredColumnsArray columns name which is required
	* */
	public function execQuery($query){
		if(!empty($query)){
			try{
				$stmt = $this->db->prepare($query);
				$res  = $stmt->execute($params);
				if($res){
					$affected_rows = $stmt->rowCount();
					$response["status"] = "success";
					$response["message"] = $affected_rows." row inserted into database";
					if(startsWith(strtolower(trim($query)),'insert'))
					$response["id"] = $this->db->lastInsertId();
					else
					$response["affected_rows"] = $affected_rows;

					$response["query"] = $query;
				}
				else{
					$response["status"] = "error";
					$response["message"] = 'Error';
					$response["query"] = $query;
					$response["code"] = $stmt->errorCode();
				}
			}catch(PDOException $e){
				$response["status"] = "error";
				$response["message"] = DEBUGGING?'Query Failed: ' .$e->getMessage():'Something went wrong in application. Please send screenshot to developer';
				$response["trace"] = $e->getMessage();
				$response["query"] = $query;
				$response["code"] = $e->getCode();
                
			}
		}
		else{
			$response["status"] = "error";
			$response["message"] = 'Please enter any query';
		}
		return (object)$response;
	}

	/**
	* Returns single column value from the database based on the conditions
	* @param string $query Sql String
	* @param return value
	*/
	public function execScalar($sql){
		try{
			$data = new stdClass;
			$query= $this->db->prepare($sql);
			$query->execute();

			$res  = $query->fetch();
			$data = (object)$res;
			$data->value = $res[0];
			$data->count = $query->rowCount();
			$data->status = 'success';
			$data->query = $sql;
		}
		catch(Exception $e){
			$data->status = 'error';
			$data->code = 185;
			$data->query = $sql;
			$response["trace"] = $e->getMessage();
			$data->message = DEBUGGING?$e->getMessage():'Something went wrong in application. Please send screenshot to developer';
		}
		return $data;
	}

	/**
	* Fetches records from db using sql string
	* @param String $query sql string for fetching records
	* @param boolean $onlyAssoc boolean to specify if required only associative array
	*
	* @return array
	*/
	function fetchRowsOld($query,$onlyAssoc = false){
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		if($stmt->rowCount() > 0){
			$data->count = $stmt->rowCount();
			if($onlyAssoc)
			$assoc = PDO::FETCH_ASSOC;
			else
			$assoc = $assoc = PDO::FETCH_BOTH;

			if($data->count == 1)
			$data->rows = (object) $stmt->fetchAll($assoc)[0];
			else
			$data->rows = $stmt->fetchAll($assoc);

		}

		if($data->count == 0 ){
			$data->status = 'success';
			$data->message = 'No record fetched';
		}
		elseif($data->count == 1 ){
			$data->message = '1 record fetched';
			$data->status = 'success';
		}
		elseif($data->count > 1 ){
			$data->message = $data->count. ' records fetched';
			$data->status = 'success';
		}

		$data->query = $query;
		//$data = (object)$data;
		return !empty($data)?$data:false;

	}
	function fetchRows($query,$onlyAssoc = false){
		try{
			$stmt = $this->db->prepare($query);
			$stmt->execute();
			$data = new stdClass;
			if($stmt->rowCount() > 0){
				$data->count = $stmt->rowCount();
				if($onlyAssoc)
				$assoc = PDO::FETCH_ASSOC;
				else
				$assoc = $assoc = PDO::FETCH_BOTH;

				$data->rows = $stmt->fetchAll($assoc);
				$data->row = (object) $data->rows[0];

			}

			if($data->count == 0 ){
				$data->status = 'success';
				$data->message = 'No record fetched';
			}
			elseif($data->count == 1 ){
				$data->message = '1 record fetched';
				$data->status = 'success';
			}
			elseif($data->count > 1 ){
				$data->message = $data->count. ' records fetched';
				$data->status = 'success';
			}

			$data->query = $query;
		}
		catch(Exception $e){
			$data->status = 'error';
			$data->code = 185;
			$data->query = $query;
			$data->trace = $e->getMessage();
			$data->message = DEBUGGING?$e->getMessage():'Something went wrong in application. Please send screenshot to developer';
		}
		return !empty($data)?$data:false;

	}
	/**
	* Function To create datatable
	* @param string $table : name of table
	* @param string $index_column : name of primary key column
	* @param string[] $columns : array of columns
	* @param string[] $format : array of columns with options to format
	*
	* @return
	*/
	public function getDt($table, $index_column, $columns, $format){
		// Paging
		$sLimit = "";
		if( isset( $_GET['start'] ) && $_GET['length'] != '-1' ){
			$sLimit = "LIMIT ".intval( $_GET['start'] ).", ".intval( $_GET['length'] );
		}

		// Ordering
		$sOrder = "";
		if( isset( $_GET['order'][0]['column'] ) && $_GET['columns'][$_GET['order'][0]['column']]['orderable'] == "true" ){
			$sOrder = "ORDER BY `".$columns[$_GET['order'][0]['column']]."` ".$_GET['order'][0]['dir'];
		}

		/*
		* Filtering
		* NOTE this does not match the built-in DataTables filtering which does it
		* word by word on any field. It's possible to do here, but concerned about efficiency
		* on very large tables, and MySQL's regex functionality is very limited
		*/
		$sWhere = "";
		if( isset($_GET['search']['value']) && $_GET['search']['value'] != "" ){
			$sWhere = "WHERE (";
			for( $i = 0 ; $i < count($columns) ; $i++ ){
				if( isset($_GET['columns'][$i]['searchable']) && $_GET['columns'][$i]['searchable'] == "true" ){
					$sWhere .= "`".$columns[$i]."` LIKE :search OR ";
				}
			}
			$sWhere = substr_replace( $sWhere, "", - 3 ); //deletes the last OR
			$sWhere .= ')';
		}

		// Individual column filtering
		for( $i = 0 ; $i < count($columns) ; $i++ ){
			if( isset($_GET['columns'][$i]['searchable']) && $_GET['columns'][$i]['searchable'] == "true" && $_GET['columns'][$i]['search']['value'] != '' ){
				if( $sWhere == "" ){
					$sWhere = "WHERE ";
				}
				else{
					$sWhere .= " AND ";
				}
				$sWhere .= "`".$columns[$i]."` LIKE :search".$i." ";
			}
		}

		// SQL queries get data to display
		$sQuery    = "SELECT SQL_CALC_FOUND_ROWS `".
		str_replace(" , ", " ", implode("`, `", $columns)).
		"` FROM `".
		$table.
		"` ".
		$sWhere.
		" ".
		$sOrder.
		" ".
		$sLimit;

		$statement = $this->db->prepare($sQuery);

		// Bind parameters
		if( isset($_GET['search']['value']) && $_GET['search']['value'] != "" ){
			$statement->bindValue(':search', '%'.$_GET['search']['value'].'%', \PDO::PARAM_STR);
		}
		for( $i = 0 ; $i < count($columns) ; $i++ ){
			if( isset($_GET['columns'][$i]['searchable']) && $_GET['columns'][$i]['searchable'] == "true" && $_GET['columns'][$i]['search']['value']['value'] != '' ){
				$statement->bindValue(':search'.$i, '%'.$_GET['columns'][$i]['search']['value'].'%', \PDO::PARAM_STR);
			}
		}
		$statement->execute();
		$rResult        = $statement->fetchAll();

		$iFilteredTotal = current($this->db->query('SELECT FOUND_ROWS()')->fetch());

		// Get total number of rows in table
		$sQuery         = "SELECT COUNT(`".$index_column."`) FROM `".$table."`";
		$iTotal         = current($this->db->query($sQuery)->fetch());

		// Output
		$output         = array(
			"draw"           => intval($_GET['draw']),
			"recordsTotal"   => $iTotal,
			"recordsFiltered"=> $iFilteredTotal,
			//"query" => $statement,        //add for debugging
			"data" => array()
		);

		// Return array of values
		foreach($rResult as $aRow){
			$row = array();
			for( $i = 0; $i < count($columns); $i++ ){
				if( $columns[$i] == "version" ){
					// Special output formatting for 'version' column
					$row[] = ($aRow[ $columns[$i] ] == "0") ? '-' : $aRow[ $columns[$i] ];
				}
				else
				if( $columns[$i] != ' ' ){
					$row[] = $aRow[ $columns[$i] ];
				}
			}
			$output['data'][] = $row;
		}

		return json_encode( utf8ize($output) );
	}
	/**
	* Validates parameters specified in arrays
	* @param array $inArray list of all columns with values
	* @param undefined $requiredColumns list of columns to be validated
	*
	* @return
	*/
	public function verifyRequiredParams($inArray, $requiredColumns){
		$error = false;
		$errorColumns = "";
		foreach($requiredColumns as $field){
			if(!isset($inArray[$field]) || strlen(trim($inArray[$field])) <= 0){
				$error = true;
				$errorColumns .= $field . ', ';
			}
		}

		if($error){
			$response = array();
			$response["status"] = "error";
			$response["message"] = 'Required field(s) ' . rtrim($errorColumns, ', ') . ' is missing or empty';
			print_r($response);
			exit;
		}
	}

	/**
	* Converts parameterised sql query to simple querystring with values
	* @param string $sql_string parameterised sql query
	* @param array $params array of parameters
	*
	* @return string $sql_string simple querystring with values
	*/
	public function sql_debug($sql_string, array $params = null){
		if(!empty($params)){
			$indexed = $params == array_values($params);
			foreach($params as $k=>$v){
				if(is_object($v)){
					if($v instanceof \DateTime) $v = $v->format('Y-m-d H:i:s');
					else continue;
				}
				elseif(is_string($v)) $v = "'$v'";
				elseif($v === null) $v = 'NULL';
				elseif(is_array($v)) $v = implode(',', $v);

				if($indexed){
					$sql_string = preg_replace('/\?/', $v, $sql_string, 1);
				}
				else{
					if($k[0] != ':') $k          = ':'.$k; //add leading colon if it was left out
					$sql_string = str_replace($k,$v,$sql_string);
				}
			}
		}
		return $sql_string;
	}
	public function getDt1($table, $index_column, $columns,$format,$escape = true,$whereIncluded = false){
		$c      = 0;
		//if($format['srno'])
		//    $c = 1;
		// Paging
		$sLimit = "";
		$srno   = 0;
		if( isset( $_REQUEST['start'] ) && $_REQUEST['length'] != '-1' ){
			$sLimit = "LIMIT ".intval( $_REQUEST['start'] ).", ".intval( $_REQUEST['length'] );
			$srno   = intval( $_REQUEST['start'] );
		}

		// Ordering
		$sOrder = "";
		if( isset( $_REQUEST['order'][0]['column'] ) && $_REQUEST['columns'][$_REQUEST['order'][0]['column']]['orderable'] == "true" ){
			$sOrder = "ORDER BY `".$columns[$_REQUEST['order'][0]['column'] - $c]."` ".$_REQUEST['order'][0]['dir'];
		}

		/*
		* Filtering
		* NOTE this does not match the built-in DataTables filtering which does it
		* word by word on any field. It's possible to do here, but concerned about efficiency
		* on very large tables, and MySQL's regex functionality is very limited
		*/
		$sWhere = "";
		if( isset($_REQUEST['search']['value']) && $_REQUEST['search']['value'] != "" ){
			if(!$whereIncluded)
			$sWhere = " WHERE (";
			else
			$sWhere = " AND (";
			for( $i = 0 ; $i < count($columns) ; $i++ ){
				if( isset($_REQUEST['columns'][$i]['searchable']) && $_REQUEST['columns'][$i]['searchable'] == "true" ){
					$sWhere .= "`".str_replace("~", ",",$columns[$i])."` LIKE :search OR ";
				}
			}
			$sWhere = substr_replace( $sWhere, "", - 3 ); //deletes the last OR
			$sWhere .= ')';
		}

		// Individual column filtering
		for( $i = 0 ; $i < count($columns) ; $i++ ){
			if( isset($_REQUEST['columns'][$i]['searchable']) && $_REQUEST['columns'][$i]['searchable'] == "true" && $_REQUEST['columns'][$i]['search']['value'] != '' ){
				if( $sWhere == "" && !$whereIncluded){
					$sWhere = "WHERE ";
				}
				else{
					$sWhere .= " AND ";
				}
				$sWhere .= "`".$columns[$i]."` LIKE :search".$i." ";
			}
		}

		// SQL queries get data to display
		$sQuery = "SELECT SQL_CALC_FOUND_ROWS `".
		str_replace("~", ",",str_replace(" , ", " ", implode("`, `", $columns))).
		"` FROM `".
		$table.
		"` ".
		$sWhere.
		" ".
		$sOrder.
		" ".
		$sLimit;

		$debug['fetch'] = $sQuery    = (!$escape)?str_replace('`','',$sQuery):$sQuery;

		$statement = $this->db->prepare($sQuery);

		// Bind parameters
		if( isset($_REQUEST['search']['value']) && $_REQUEST['search']['value'] != "" ){
			$statement->bindValue(':search', '%'.$_REQUEST['search']['value'].'%', \PDO::PARAM_STR);
		}
		for( $i = 0 ; $i < count($columns) ; $i++ ){
			if( isset($_REQUEST['columns'][$i]['searchable']) && $_REQUEST['columns'][$i]['searchable'] == "true" && $_REQUEST['columns'][$i]['search']['value']['value'] != '' ){
				$statement->bindValue(':search'.$i, '%'.$_REQUEST['columns'][$i]['search']['value'].'%', \PDO::PARAM_STR);
			}
		}
		$statement->execute();
		$rResult        = $statement->fetchAll();

		$iFilteredTotal = current($this->db->query('SELECT FOUND_ROWS()')->fetch());

		// Get total number of rows in table
		$sQuery         = "SELECT COUNT(`".$index_column."`) FROM `".$table."`";
		$debug['totalRecords'] = $sQuery = (!$escape)?str_replace('`','',$sQuery):$sQuery;

		$iTotal = current($this->db->query($sQuery)->fetch());

		// Output
		$output = array(
			"draw"           => intval($_REQUEST['draw']),
			"recordsTotal"   => $iTotal,
			"recordsFiltered"=> $iFilteredTotal,
			//"query" => $statement,        //add for debugging
			"data" => array()
		);
		if(DEBUGGING || $_SESSION["debugging"])
		$output['queries'] = $debug;

		// Return array of values
		foreach($rResult as $aRow){
			$row = array();
			// if(isset($format['srno']) && $format['srno'])
			//     $row[] = ++$srno;
			for( $i = 0; $i < count($columns); $i++ ){
				$row[] = $this->getFormats($columns[$i],$format[0][$columns[$i]],$aRow,$i);
			}
			$ic = $index_column;
			if(strpos($index_column,".")>-1)
			$ic = explode(".",$index_column)[1];
			$row['DT_RowId'] = $aRow[$ic];
			$output['data'][] = $row;
		}
		$json = json_encode( utf8ize($output ));
		return $json;
	}
	public function toDataTable($table, $index_column, $columns,$format,$options = []){
		$c             = 0;
		$whereIncluded = false;
		if(isset($options["hasWhere"]) && $options["hasWhere"])
		$whereIncluded = true;

		$escape = true;
		if(isset($options["escape"]) && !$options["escape"])
		$escape = false;

		$distinct = "";
		if(isset($options["distinct"]) && $options["distinct"])
		$distinct = " distinct ";

		$groupBy  = "";
		if(isset($options["groupBy"]) && $options["groupBy"])
		$groupBy = " group By ".$options["groupBy"];

		//if($format['srno'])
		//    $c = 1;
		// Paging
		$sLimit  = "";
		$srno    = 0;
		if( isset( $_REQUEST['start'] ) && $_REQUEST['length'] != '-1' ){
			$sLimit = "LIMIT ".intval( $_REQUEST['start'] ).", ".intval( $_REQUEST['length'] );
			$srno   = intval( $_REQUEST['start'] );
		}

		// Ordering
		$sOrder = "";
		if( isset( $_REQUEST['order'][0]['column'] ) && $_REQUEST['columns'][$_REQUEST['order'][0]['column']]['orderable'] == "true" ){

			// $sOrder = "ORDER BY `".$columns[$_REQUEST['order'][0]['column'] - $c]."` ".$_REQUEST['order'][0]['dir'];
			$sOrder = "ORDER BY ".($_REQUEST['order'][0]['column'] + 1)." ".$_REQUEST['order'][0]['dir'];
		}

		/*
		* Filtering
		* NOTE this does not match the built-in DataTables filtering which does it
		* word by word on any field. It's possible to do here, but concerned about efficiency
		* on very large tables, and MySQL's regex functionality is very limited
		*/
		$sWhere = "";
		if( isset($_REQUEST['search']['value']) && $_REQUEST['search']['value'] != "" ){
			// $sWhere = "WHERE (";
			if( $sWhere == "" && !$whereIncluded){
				$sWhere = " WHERE (";
			}
			else{
				$sWhere = " AND (";
			}

			for( $i = 0 ; $i < count($columns) ; $i++ ){
				if( isset($_REQUEST['columns'][$i]['searchable']) && $_REQUEST['columns'][$i]['searchable'] == "true" ){
					$search = $columns[$i];
					if(contains(strtolower($search),' as '))
					$search = explode(' as ',$search)[0];
					$sWhere .= "".$search." LIKE :search OR ";
				}
			}
			$sWhere = substr_replace( $sWhere, "", - 3 ); //deletes the last OR
			$sWhere .= ')';
		}

		// Individual column filtering
		/*
		for ( $i = 0 ; $i < count($columns) ; $i++ ) {
		if ( isset($_REQUEST['columns'][$i]['searchable']) && $_REQUEST['columns'][$i]['searchable'] == "true" && $_REQUEST['columns'][$i]['search']['value'] != '' ) {
		if ( $sWhere == "" && !$whereIncluded) {
		$sWhere = "WHERE ";
		}
		else {
		$sWhere .= " AND ";
		}
		$sWhere .= "`".$columns[$i]."` LIKE :search".$i." ";
		}
		}
		*/
		// SQL queries get data to display
		$sQuery = "SELECT SQL_CALC_FOUND_ROWS $distinct `".
		str_replace("~", ",",str_replace(" , ", " ", implode("`, `", $columns))).
		"` FROM `".
		$table.
		"` ".
		str_replace("~", ",",str_replace(" , ", " ", $sWhere)).
		" ".
		$groupBy.
		" ".
		$sOrder.
		" ".
		$sLimit;

		$debug['fetch'] = $sQuery    = (!$escape)?str_replace('`','',$sQuery):$sQuery;

		$statement = $this->db->prepare($sQuery);

		// Bind parameters
		if( isset($_REQUEST['search']['value']) && $_REQUEST['search']['value'] != "" ){
			$statement->bindValue(':search', '%'.$_REQUEST['search']['value'].'%', \PDO::PARAM_STR);
		}
		for( $i = 0 ; $i < count($columns) ; $i++ ){
			if( isset($_REQUEST['columns'][$i]['searchable']) && $_REQUEST['columns'][$i]['searchable'] == "true" && $_REQUEST['columns'][$i]['search']['value']['value'] != '' ){
				$statement->bindValue(':search'.$i, '%'.$_REQUEST['columns'][$i]['search']['value'].'%', \PDO::PARAM_STR);
			}
		}
		$statement->execute();
		$rResult        = $statement->fetchAll();

		$iFilteredTotal = current($this->db->query('SELECT FOUND_ROWS()')->fetch());

		// Get total number of rows in table
		$sQuery         = "SELECT COUNT(`".$index_column."`) FROM `".$table."`";
		$debug['totalRecords'] = $sQuery = (!$escape)?str_replace('`','',$sQuery):$sQuery;

		$iTotal = current($this->db->query($sQuery)->fetch());

		// Output
		$output = array(
			"draw"           => intval($_REQUEST['draw']),
			"recordsTotal"   => $iTotal,
			"recordsFiltered"=> $iFilteredTotal,
			//"query" => $statement,        //add for debugging
			"data" => array()
		);
		if(DEBUGGING || isset($_REQUEST['debug']))
		$output['queries'] = $debug;

		// Return array of values
		foreach($rResult as $aRow){
			$row = array();
			// if(isset($format['srno']) && $format['srno'])
			//     $row[] = ++$srno;
			for( $i = 0; $i < count($columns); $i++ ){
				$row[] = $this->getFormats($columns[$i],$format[0][$columns[$i]],$aRow,$i);
			}
			$ic = $index_column;
			if(strpos($index_column,".")>-1)
			$ic = explode(".",$index_column)[1];
			$row['DT_RowId'] = $aRow[$ic];
			$output['data'][] = $row;
		}
		$json = json_encode( utf8ize($output ));
		return $json;
	}
	function getFormats($column,$format,$aRow,$index){
		$path = ASSETSURL;
		if(isset($format["condition"])? $this->cond($format["condition"],$format["conditionType"],$aRow):true){

			if(isset($format) && $format['type'] == 'button')
			return "<button {$this->parse_parameters($format['attr'])}{$this->getAttr($column,$format,$aRow)}>{$format['name']}</button>";
			else
			if(isset($format) && $format['type'] == 'link')
			return "<a {$this->getAttr($column,$format,$aRow)}>
			<img align=left BorderColor=transparent border=0
			width='25px' class='loading' src='".$path."Images/Buttons/{$format['image']}.png' /></a>";
			else
			if(isset($format) && $format['type'] == 'input'){
				if(isset($format['value']['col']))
				$val = $aRow[$format['value']['col']];
				else
				if($format['value'])
				$val = $format['value'];
				else
				$val = '';
				return "<input {$this->parse_parameters($format['attr'])} value='$val' title='$val'></input>";

			}
			else
			if(isset($format) && $format['type'] == 'span'){
				if(isset($format['value']['col']))
				$val = $aRow[$format['value']['col']];
				else
				if($format['value'])
				$val = $format['value'];
				else
				$val = '';
				return "<span {$this->parse_parameters($format['attr'])} title='$val'>$val</span>";

			}
			else
			if(isset($format) && $format['type'] == 'expand'){
				if(isset($format['value']['col']))
				$val = $aRow[$format['value']['col']];
				else
				if($format['value'])
				$val = $format['value'];
				else
				$val = '';
				return "
				<img align=left BorderColor=transparent border=0  {$this->getAttr($column,$format,$aRow)}
				width='25px' class='loading' src='".$path."Images/Buttons/{$format['image']}.png' />";

			}
			else
			if(isset($format) && $format['type'] == 'srno'){
				$val = $aRow[$index];
				return "<span {$this->parse_parameters($format['attr'])} title='$val' class='dt-srno'></span>
				<input type='hidden' value='$val'></input>";

			}
			else
			if(isset($format) && $format['type'] == 'date'){
				if(isValidDate($aRow[$index]))
				$val = get_date("0 day",$aRow[$index],$format['format']);
				else
				if(isset($format['invalidVal']['col']))
				$val = $aRow[$format['invalidVal']['col']];
				else
				if(isset($format['invalidVal']))
				$val = $format['invalidVal'];
				else
				$val = '';
				return "<span {$this->parse_parameters($format['attr'])} title='$val'>$val</span>";

			}
			else
			if(isset($format) && $format['type'] == 'bool'){
				$res = isset($format["cond"])? $this->cond($format["cond"],$format["conditionType"],$aRow):true;

				if(isset($format['value']['col']))
				$val = $aRow[$format['value']['col']];
				else
				if($res && isset($format['value']['true']))
				$val = $format['value']['true'];
				else
				if(!$res && isset($format['value']['false']))
				$val = $format['value']['false'];
				else
				if($format['value'])
				$val = $format['value'];
				else
				$val   = '';

				$class = $res?' green round m-span':' red round m-span';
				if(isset($format['attr']['class']))
				$format['attr']['class'] .= $class;
				else $format['attr']['class'] = $class;

				return "<span {$this->parse_parameters($format['attr'])} title='$val'>$val</span>";

			}


			else
			if( $column == "version" ){
				// Special output formatting for 'version' column
				return ($aRow[ $column ] == "0") ? '-' : $aRow[$column];
			}
			else
			if( $column != ' ' ){
				return $aRow[ $index ];
			}
		}
		else{
			return null;
		}


	}
	private function getAttr($column,$format,$row){

		if(isset($format['attr']['onclick'])){
			$args = $this->toArgs($format['args'],$row);
			$attr = 'onclick="'.$format['attr']['onclick'] .= "($args)\"";
		}
		else
		if(isset($format['attr']['href']) || isset($format['attr']['url']) ) {
			if(isset($format['attr']['href']) && isset($format['target']) && !isset($format['oimsv2'])){
				// print_r($row[$format['target']]);
				$val = rawurlencode($row[$format['target']]);
				$attr= 'href='.$format['attr']['href'] = oimsURL."?".$format['attr']['href']. "=$val";
			}elseif(isset($format['attr']['href']) && isset($format['oimsv2'])){
				$path = oimsV2URL;
				$val  = $row[$format['target']];
				$attr = 'href='.$path.$format['attr']['href'].'/'."$val";
			}elseif(isset($format['attr']['url']) && isset($format['oimsv2'])){
				$path = oimsV2URL;
				$val  = $row[$format['target']];
				$attr = 'href='.$path.$format['attr']['url']."$val";
			}
			else{
				$attr = 'href='.$format['attr']['href'] = oimsURL."?".$format['attr']['href'];
			}
		}
		if(isset($format['class'])){
			$attr .= ' class='.$format['class'];
		}


		return $attr;

	}
	private function toArgs($args,$tr){
		$a = array();
		foreach($args['col'] as $col){
			$a[] = is_numeric($tr[$col])?$tr[$col]:"'".addslashes($tr[$col])."'";
		}

		foreach($args['val'] as $val){
			$a[] = is_numeric($val)?$val:"'".addslashes($val)."'";
		}
		foreach($args['control'] as $val){
			$a[] = $val;
		}
		foreach($args['obj'] as $val){
			$a[] = $val;
		}

		$b = implode(",",$a);
		return $b;
	}
	private function cond($conditions,$type,$tr){
		$totalConditions = count($conditions);
		$matched         = 0;

		foreach($conditions as $c){
			extract($c);
			if(isset($var1["col"])){
				$var_1 = $tr[$var1["col"]];
			}
			else
			if(isset($var1["val"])){
				$var_1 = $var1["val"];
			}

			if(isset($var2["col"])){
				$var_2 = $tr[$var2["col"]];
			}
			else
			if(isset($var2["val"])){
				$var_2 = $var2["val"];
			}

			if(!isset($var_1) && !isset($var_2))
			return false;

			/* define new condition below when required */

			$map = array(
				">"       => $var_1 > $var_2,
				"<"       => $var_1 < $var_2,
				"=="      => $var_1 == $var_2,
				"!="      => $var_1 != $var_2,
				">="      => $var_1 >= $var_2,
				"<="      => $var_1 <= $var_2,
				"like"    => strstr($var_1 , $var_2),
				"not like"=> !strstr($var_1 , $var_2)
			);

			if($map[$opr]){
				$matched++;
			}
		}

		return     ($type == "or"?($matched > 0):($matched == $totalConditions));
	}
	private function parse_parameters ($data){
		$str = "";
		if(is_array ($data)){
			foreach($data as $key=>$value){
				$str .= ' '.trim ($key).'="'.trim ($value).'"';
			}
			return $str;
		}
		else{
			return $data;
		}
	}

	public function close(){
		$this->db = null;
		unset($this->db);
		return true;
	}
}