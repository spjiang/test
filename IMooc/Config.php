<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/27 17:12
 */

namespace IMooc;

class Config
{
    // 配置参数
    private static $config = [];
    
    public static function get($name = null)
    {
        return self::$config[$name];
    }
    
    public static function set($config)
    {
        self::$config = $config;
    }
}