<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/7 14:46
 */
require_once 'Loader.php';
class FemaleUser implements UserStrategy{
    function showAd()
    {
        echo '2016冬季女装';
    }
    function showCategory()
    {
        echo '女装';
    }
}