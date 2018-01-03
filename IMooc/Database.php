<?php

namespace IMooc;

class Database
{
    protected $db;
    
    // 防止new对象
    private function __construct()
    {
    
    }
    
    static function getInstance()
    {
        if (self::$db) {
            return self::$db;
        }
        return self::$db = new self();
    }
    
    function where($where)
    {
        return $this;
    }
    
    function order($order)
    {
        return $this;
    }
    
    function limit($limit)
    {
        return $this;
    }
}