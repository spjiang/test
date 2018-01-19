<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/11 17:01
 */

namespace IMooc;
class  Register
{
    protected static $object;
    
    static function set($alias, $object)
    {
        self::$object[$alias] = $object;
    }
    
    static function get($name)
    {
        return self::$object[$name];
    }
    
    function _unset($alias)
    {
        unset(self::$object[$alias]);
    }
}