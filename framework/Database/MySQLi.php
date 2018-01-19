<?php

namespace framework\Database;

use framework\IDatabase;

class MySQLi implements IDatabase
{
    protected $conn;
    
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd);
        mysqli_select_db($dbname, $conn);
        $this->conn;
    }
    
    function query($sql)
    {
        return mysqli_query($sql, $this->conn);
    }
    
    function close()
    {
        mysqli_close($this->conn);
    }
}