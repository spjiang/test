<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/12 11:12
 */

namespace IMooc\DataBase;

use IMooc\IDatabase;
use IMooc\Database;

class MySQLi implements IDatabase
{
    protected $conn;
    
    function connect($host, $user, $passwd, $dbname)
    {
        $this->conn = mysqli_connect($host, $user, $passwd, $dbname);
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