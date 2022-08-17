<?php
class Common_m extends MY_Model
{
	/**
	* 
	* @param $table = table name
	* @param $select_column = column name for show in datatable
	* @param $order_column = column name for ordering 
	* @param $join_column = multiple table join condition
	* @param $where = where condition
	* @param $search_column = search table column
	* @param $order_by = order by field name
	* 
	* @return Datatable records
	*/
	function makeDataTables($table, $select_column, $order_column, $join_column = NULL, $where = NULL, $search_column = NULL, $order_by, $group_by = NULL)
	{
		$this->makeDataTableQuery($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
		if($_POST["length"] != - 1){
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}
	
	/**
	* 
	* @param $table = table name
	* @param $select_column = column name for show in datatable
	* @param $order_column = column name for ordering 
	* @param $join_column = multiple table join condition
	* @param $where = where condition
	* @param $search_column = search table column
	* @param $order_by = order by field name
	* 
	* @return Number of rows
	*/
	function getFilteredData($table, $select_column, $order_column, $join_column = NULL, $where = NULL, $search_column = NULL, $order_by, $group_by = NULL)
	{
		$this->makeDataTableQuery($table, $select_column, $order_column, $join_column, $where, $search_column, $order_by, $group_by);
		$query = $this->db->get();
		return $query->num_rows();
	}
	
}

?>