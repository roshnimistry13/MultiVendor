<?php
/**
* Session
*/
class DDSession
{

    /**
    * Db Object
    */
    private $db;
    public function __construct()
    {
        // Instantiate new Database object
        $this->db = new DB();

        // Set handler to overide SESSION
        session_set_save_handler(
            array($this,"_open"),
            array($this,"_close"),
            array($this,"_read"),
            array($this,"_write"),
            array($this,"_destroy"),
            array($this,"_gc")
        );

		session_name('OIMSSession');

		session_set_cookie_params((24*60*60));
        // Start the session
        session_start();
    }
    /**
    * Open
    */
    public function _open()
    {
        // If successful
        if ($this->db) {
            // Return True
            return true;
        }
        // Return False
        return false;
    }
    /**
    * Close
    */
    public function _close()
    {
        // Close the database connection
        // If successful
        if ($this->db->close()) {
            // Return True
            return true;
        }
        // Return False
        return false;
    }
    /**
    * Read
    */
    public function _read($id)
    {
        // Set query

        $sessionData = $this->db->select('ci_sessions',['select'=>'data','where'=>['id'=>$id]]);

        // Attempt execution
        // If successful
        if ($sessionData->status != 'error') {
            // Save returned row
            $row = $sessionData->row;
            // Return the data
            return $row->data;
        }else {
            // Return an empty string
            return '';
        }
    }
    /**
    * Write
    */
    public function _write($id, $data)
    {
        // Create time stamp
        $access      = time();

        // Set query
        $sessionData = $this->db->save('ci_sessions',['data'=>$data,'timestamp'=>$access,'id'=>$id],['id'=>$id]);

        // Attempt Execution
        // If successful
        if ($sessionData->status != 'error') {
            /*$s = base64_encode(serialize($_SESSION));
            ddCurl(oimsV2URL,['token'=>$s]);*/
            return true;
        }

        // Return False
        return false;
    }
    /**
    * Destroy
    */
    public function _destroy($id)
    {
        // Set query
        $sessionData = $this->db->delete('ci_sessions', ['id'=>$id]);

        // Attempt Execution
        // If successful
        if ($sessionData->status != 'error') {
            return true;
        }

        // Return False
        return false;
    }
    /**
    * Garbage Collection
    */
    public function _gc($max)
    {
        // Calculate what is to be deemed old
        $old = time() - $max;

        // Set query
        $this->db->execQuery("DELETE * FROM ci_sessions WHERE timestamp < '$old'");

        // Attempt Execution
        // If successful
        if ($sessionData->status != 'error') {
            return true;
        }

        // Return False
        return false;
    }
}
?>