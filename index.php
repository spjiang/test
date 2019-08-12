<?php

define('BASEDIR', __DIR__);
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');
$config = array(
    'db' => array(
        'host' => '127.0.0.1',
        'user' => 'root',
        'passwd' => '',
        'dbname' => 'test',
        'port' => '3306',
        'type'=>'MySQLi',
    ),
);
if(1==1){
    echo "ccc";
    echo "ccc";
    echo "ccc";
}

\IMooc\Config::set($config);
\IMooc\Db::name('test');


/*$db = new \IMooc\Database\MySQLi();
$db->connect('127.0.0.1', 'root', '', 'test');
$rs = $db->query('show databases;');
$db->close();*/
// 策略模式
/*class Page
{
    protected $strategey;
    
    function index()
    {
        echo 'AD';
        $this->strategey->showAd();
        echo '<BR />';
        echo 'Category';
        $this->strategey->showCategory();
    }
    
    function setStrategy(\IMooc\UserStrategy $strategy)
    {
        $this->strategey = $strategy;
    }
}

$page = new Page();
if (isset($_GET['female'])) {
    $strategy = new \IMooc\FemaleUserStrategy();
} else {
    $strategy = new \IMooc\MaleUserStrategy();
}
$page->setStrategy($strategy);
$page->index();*/


/*function printer() {
    $i = 0;
    while(true) {
        echo 'this is the yield ' . (yield $i) . "\n";
        $i++;
    }
}

$printer = printer();
var_dump($printer->send('first'));
var_dump($printer->send('second'));*/


/*function xrange($start, $limit, $step = 1) {
    for ($i = $start, $j = 0; $i <= $limit; $i += $step, $j++) {
        // 给予键值
        yield $j => $i;
    }
}
$xrange = xrange(1, 10, 2);
foreach ($xrange as $key => $value) {
    echo $key . ' => ' . $value . "\n";
}*/


// 遍历对象，迭代器
/*class MyIterator implements Iterator {
    private $position = 0;
    private $arr = [
        'first', 'second', 'third',
    ];
    
    public function __construct() {
        $this->position = 0;
    }
    
    public function rewind() {
        var_dump(__METHOD__);
        $this->position = 0;
    }
    
    public function current() {
        var_dump(__METHOD__);
        return $this->arr[$this->position];
    }
    
    public function key() {
        var_dump(__METHOD__);
        return $this->position;
    }
    
    public function next() {
        var_dump(__METHOD__);
        ++$this->position;
    }
    
    public function valid() {
        var_dump(__METHOD__);
        return isset($this->arr[$this->position]);
    }
    
}

$it = new MyIterator();

foreach($it as $key => $value) {
    echo "\n";
    var_dump($key, $value);
}*/


// 电话号码中间4位
/*echo substr_replace('18580119882','****',3,4);*/

// 判断字符串长度
/*$foo = 'abcde';
var_dump($foo{0});
die;
if (strlen($foo) < 5) { echo "Foo is too short"; }
if (!isset($foo{5})) { echo "Foo is too short"; }
die();*/

/**
 * 策略模式
 * 1、策略模式，将一组特定的行为和算法封装成类，以适应某些特定的上下文环境，这种模式就是策略模式
 * 2、实际应用举例，假如一个电商网站系统，针对男性女性用户要各自跳转到不同的商品类目，并且所有广告位展示不同的广告
 *
 */

// 适配器模式
/*$db = new IMooc\Database\MySQL();
$db->connect('127.0.0.1','root','','test');
$db->query('show databases;');
$db->close;
*/

// 注册模式
/*$db = \IMooc\Register::get('db1');*/

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