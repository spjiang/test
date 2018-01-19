<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/27 16:35
 */

namespace IMooc;

class Db
{
    //  数据库连接实例
    private static $instance = [];
    
    public static function connect($name = false){
        if (!isset(self::$instance[$name])) {
            // 获取db配置
            $options = Config::get('db');
            // 解析连接参数 支持数组和字符串
            if (empty($options['type'])) {
                throw new \InvalidArgumentException('Underfined db type');
            }
            $class = '\IMooc\DataBase\\'.$options['type'];
            
            self::$instance[$name] = $class::getInstance();
        }
        return self::$instance[$name];
    }
    
    // 调用驱动类的方法
    public static function __callStatic($method, $params)
    {
        // 自动初始化数据库
        return call_user_func_array([self::connect(), $method], $params);
    }
}