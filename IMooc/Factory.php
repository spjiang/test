<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/9 11:38
 */
namespace IMooc;
class Factory{
    static function createDatabase(){
        $db = Database::getInstance();
        Register::set('db1',$db);
        return $db;
    }
}