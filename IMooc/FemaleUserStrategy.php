<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/12 16:55
 */
namespace IMooc;
class FemaleUserStrategy implements UserStrategy{
    function showAd(){
        echo '2014新款女装';
    }
    function showCategory()
    {
        echo '女装';
    }
}