<?php 
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package        CodeIgniter
 * @author        ExpressionEngine Dev Team
 * @copyright    Copyright (c) 2006, EllisLab, Inc.
 * @license        http://codeigniter.com/user_guide/license.html
 * @link        http://codeigniter.com
 * @since        Version 1.0
 * @filesource
 */
// ------------------------------------------------------------------------
/**
 * MY_Logging Class
 *
 * This library assumes that you have a config item called
 * $config['show_in_log'] = array();
 * you can then create any error level you would like, using the following format
 * $config['show_in_log']= array('DEBUG','ERROR','INFO','SPECIAL','MY_ERROR_GROUP','ETC_GROUP'); 
 * Setting the array to empty will log all error messages. 
 * Deleting this config item entirely will default to the standard
 * error loggin threshold config item. 
 *
 * @package        CodeIgniter
 * @subpackage    Libraries
 * @category    Logging
 * @author        ExpressionEngine Dev Team. Mod by Chris Newton
 */
class MY_Log extends CI_Log {
    /**
	 * Predefined logging levels
	 *
	 * @var array
	 */
	protected $_levels = array('ERROR' => 1, 'DEBUG' => 2, 'INFO' => 3, 'ALL' => 4,'SPECIAL'=>5,'MY_ERROR_GROUP'=>6,'ETC_GROUP'=>7);

	/**
     * Constructor
     */
    public function __construct()
    {
        $config =& get_config();

        $this->_log_path = ($config['log_path'] != '') ? $config['log_path'] : APPPATH.'logs/';

        if ( ! is_dir($this->_log_path) OR ! is_really_writable($this->_log_path))
        {
            $this->_enabled = FALSE;
        }

        if (is_numeric($config['log_threshold']))
		{
			$this->_threshold = (int) $config['log_threshold'];
		}
		elseif (is_array($config['log_threshold']))
		{
			$this->_threshold = 0;
			$this->_threshold_array = array_flip($config['log_threshold']);
		}

        if ($config['log_date_format'] != '')
        {
            $this->_date_fmt = $config['log_date_format'];
        }
    }

    private function isCommandLineInterface()
    {
        return (php_sapi_name() === 'cli');
    }

    // --------------------------------------------------------------------
    /**
     * Write Log File
     *
     * Generally this function will be called using the global log_message() function
     *
     * @access    public
     * @param    string    the error level
     * @param    string    the error message
     * @param    bool    whether the error is a native PHP error
     * @return    bool
     */        
   public function write_log($level = 'error', $msg)
    {


        if ($this->_enabled === FALSE)
        {
            return FALSE;
        }

        $level = strtoupper($level);
        if (( ! isset($this->_levels[$level]) OR ($this->_levels[$level] > $this->_threshold))
			&& ! isset($this->_threshold_array[$this->_levels[$level]]))
		{
			return FALSE;
		}

        $filepath = $this->_log_path.date('Y-m-d/H').'.php';
        $message  = '';
		
		if(!is_dir(dirname($filepath)))
		md(dirname($filepath));//mkdir(dirname($filepath),0777,true);
		
        if ( ! file_exists($filepath))
        {
            $message .= "<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); \n\n";
        }

        if ( ! $fp = @fopen($filepath, FOPEN_WRITE_CREATE))
        {
            return FALSE;
        }

        if ($this->isCommandLineInterface()) {
            $message .= 'CMD ';
        }
$query    = $msg;
		
		$sql    = "";
		$sql .= "\n#Begin*****************************************************************************************************\n";
			$sql .= "#Level : $level #LevelEnd \n";
		if(function_exists('session') && !is_null(session("StaffName")) && session("StaffName") != NULL){
			$sql .= "#Access From : ".ACCESSFROM." #AccessFromEnd \n";
			$sql .= "#Developer : ".session("DevID")." #Developerend \n";
			$sql .= "#Developer ID: ".session("DevUserID")." #DeveloperIDend \n";
			$sql .= "#User ID: ".session("UID")." #UserIDend \n";
			$sql .= "#User ID: ".session("Uname")." #UserIDend \n";
			$sql .= "#User : ".session("StaffName")." #Userend \n";
		}
		if(isset($_REQUEST['html']))
		unset($_REQUEST['html']);
		$sql .= "#Time : ".date('d-m-Y H:i:s')." #Timeend\n";
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
		else
		{
			$a = [];
			$a = explode(' ',trim((is_object($query))?$query->query:$query['query']));
			$sql .= "#Operation : ".$a[0]." #Operationend\n";
			foreach($query as $key => $msg){
				if(is_string($msg)){
					$msg = str_replace("<BR>", "\n",$msg);
					$msg = str_replace("~","\n\n#Stake Trace\n",$msg);
				}
				else
				{
					$msg = json_encode($msg);
				}
				$sql .= "#$key: \n".$msg.";\n";
			}
		}
		/* $sql .= " \n#Execution Time:" . $times[$key]."\n"; */
		$sql .= "#End*******************************************************************************************************\n\n";
		$message.= $sql;
        //$message .= $level.' '.(($level == 'INFO') ? ' -' : '-').' '.date($this->_date_fmt). ' --> '.$msg."\n";

        flock($fp, LOCK_EX);
        fwrite($fp, $message);
        flock($fp, LOCK_UN);
        fclose($fp);

        @chmod($filepath, FILE_WRITE_MODE);
        return TRUE;
    }

}