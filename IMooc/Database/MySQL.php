<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/12 11:12
 */

namespace IMooc\DataBase;

use IMooc\IDatabase;
use IMooc\Database;

class MySQL implements IDatabase
{
    protected $conn;
    
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host, $user, $passwd);
        $this->conn = mysql_select_db($dbname, $conn);
    }
    
    function query($sql)
    {
        return mysql_query($sql, $this->conn);
    }
    
    function close()
    {
        mysql_close($this->conn);
    }
}