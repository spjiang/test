<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/12 11:12
 */

namespace IMooc\DataBase;

use IMooc\IDatabase;

class MySQLi implements IDatabase
{
    static $db;
    
    static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        }
        return self::$db = new self();
    }
    function connect($host, $user, $passwd, $dbname)
    {
        $this->conn = mysqli_connect($host, $user, $passwd, $dbname);
    }
    
    function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }
    
    function close()
    {
        mysqli_close($this->conn);
    }
    
    
}