<?php

namespace IMooc;
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/8 17:26
 */
class Database
{
    protected $db;
    // 防止new对象
    private function __construct(){}
    static function getInstance(){
        if(self::$db){
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