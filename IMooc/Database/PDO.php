<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/12 11:12
 */

namespace IMooc\DataBase;

use IMooc\IDatabase;

class PDO implements IDatabase
{
    protected $conn;
    
    function connect($host, $user, $passwd, $dbname)
    {
        $this->conn = new \PDO("mysql:$host;dbname=$dbname", $user, $passwd);
    }
    
    function query($sql)
    {
        $this->conn->query($sql);
    }
    
    function close()
    {
        unset($this->conn);
    }
}