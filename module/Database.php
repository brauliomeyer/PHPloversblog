<?php
        
class Database
{
    
    /*
    *   Properties of Database class
    */        
    //DATABASE credentials
    public $host = DB_HOST;
    public $username = DB_USER;
    public $password = DB_PASS;
    public $db_name = DB_NAME;
    
    //LINK represents mysqli object
    public $link;
    
    //ERROR for errors
    public $error;
        
    /*
    *   Methods of Database class
    *   Method Constructor
    */
    //CONSTRUCTOR of Database class
    public function __construct()
    {
        //call Connect function
        $this->connect();
    }  
       
    /*
    *   Method Connect - Connector
    */
    function connect()
    {
$this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name);
            
        if( ! $this->link) 
        {
            $this->error = "Connection failed: => ".$this->link->connect_error;
            return false;
        }   
    }
    
    /*
    *   Method Select - selects items from db 
    */
    public function select($query)
    {
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
                
        if($result->num_rows > 0)
        {
            return $result;
        }   else
            {
            return false;
            }        
    }
    
    /*
    *   Method Insert - insert items into db 
    */
    public function insert($query)
    {   
        //Insert into db
        $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
        
        //Validate insert
        if($insert_row) 
        {
            //Redirect if the items are inserted into $insert_row
            header("Location: index.php?msg=".urlencode('Record Added')); 
            exit();
        }   else
            {
                die('Error: => ('. $this->link->errno .') ' .$this->link->error);
            }
    }
    
    /*
    *   Method Update - update items in the db 
    */
    public function update($query)
    {   
        //Insert into db
        $update_row = $this->link->query($query) or die($this->link->error.__LINE__);
        
        //Validate insert
        if($update_row) 
        {
            //Redirect if the items are inserted into $insert_row
            header("Location: index.php?msg=".urlencode('Record Updated')); 
            exit();
        }   else
            {
                die('Error: => ('. $this->link->errno .') ' .$this->link->error);
            }
    }

    /*
    *   Method Delete - delete items in the db 
    */
    public function delete($query)
    {   
        //Insert into db
        $delete_row = $this->link->query($query) or die($this->link->error.__LINE__);
        
        //Validate insert
        if($delete_row) 
        {
            //Redirect if the items are inserted into $insert_row
            header("Location: index.php?msg=".urlencode('Record Deleted')); 
            exit();
        }   else
            {
                die('Error: => ('. $this->link->errno .') ' .$this->link->error);
            }
    }

}

