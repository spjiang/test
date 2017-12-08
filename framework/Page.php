<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/7 14:51
 */
require_once 'Loader.php';

class Page
{
    protected $strategy;
    
    function index()
    {
        echo "AD";
        $this->strategy->showAd();
        echo "<br>";
        echo "Category";
        $this->strategy->showCategory();
        echo "<br>";
    }
    
    function setStrategy(UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page();
if (isset($_GET['male'])) {
    $strategy = new MaleUser();
} else {
    $strategy = new FemaleUser();
}
$page->setStrategy($strategy);
$page->index();