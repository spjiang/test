<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

// 注册模式
$db = \IMooc\Register::get('db1');

// 单利模式
/*$db = \IMooc\Database::getInstance();*/

//工厂模式
/*$db =  \IMooc\Factory::createDatabase();*/

// 模式方法
/*$obj = new IMooc\Object();
//$obj->test('spjiang');
//IMooc\Object::test('hello1',1234);
echo $obj('spjiang');*/

// 链式操作
/*$db = new IMooc\Database();
$db->where('id=1')->where("name='spjiang'")->order('id desc')->limit();*/

//---------------- spl 常用的数据结构--------------------------
/*// 固定长度数组
$array = new SplFixedArray(10);
$array[0] = 123;
$array[9] = 1235;
var_dump($array);die;*/
/**
 * E:\spjiang\test\index.php:10:
 * object(SplFixedArray)[1]
 * public 0 => int 123
 * public 1 => null
 * public 2 => null
 * public 3 => null
 * public 4 => null
 * public 5 => null
 * public 6 => null
 * public 7 => null
 * public 8 => null
 * public 9 => int 1235
 */

// 堆（最小堆） 先进先出
/*$heap = new SplMinHeap();
$heap->insert('data1');
$heap->insert('data2');
echo $heap->extract();
echo $heap->extract();*/

// 队列 先进先出
/*$queue = new SplQueue();
$queue->enqueue('data1');
$queue->enqueue('data2');
echo $queue->dequeue(); // data1
echo $queue->dequeue();// data2 */

// 栈 先进后出
/*$stack = new SplStack();
$stack->push('data1');
$stack->push('data2');
echo $stack->pop(); // data2
echo $stack->pop(); // data1*/