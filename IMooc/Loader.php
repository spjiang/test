<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/8 16:51
 */
namespace IMooc;
class Loader{
    static function autoload($class){
        require_once BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}