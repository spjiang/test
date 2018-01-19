<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/8 16:21
 */

namespace IMooc;

class Object
{
    protected $array = array();
   /* static function test()
    {
        echo __METHOD__;
    }*/
    function __set($name, $value)
    {
        $this->array[$name] = $value;
    }
    function __get($name)
    {
        return $this->array[$name];
    }
    function __call($name, $arguments)
    {
        var_dump($name,$arguments);
    }
    static function __callStatic($name, $arguments)
    {
        var_dump($name,$arguments);
    }
    
    // 打印对象运行的魔术方法（把对象当成字符串打印）
    function __toString()
    {
        return __CLASS__;
    }
    // 将对象当成一个函数进行使用
    function __invoke($param)
    {
        echo $param;
        return __CLASS__.'function';
    }
}