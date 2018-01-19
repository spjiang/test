<?php

namespace framework\Database;

use framework\IDatabase;

class PDO implements IDatabase
{
    protected $conn;
    
    function connect($host, $user, $passwd, $dbname)
    {
        $this->conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
    }
    
    function query($sql)
    {
        return $this->conn->query($sql);
    }
    
    function close()
    {
        unset($this->conn);
    }
}