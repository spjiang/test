<?php
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/12 16:55
 */
namespace IMooc;
class MaleUserStrategy implements UserStrategy{
    function showAd(){
        echo 'IPhone6';
    }
    function showCategory()
    {
        echo '电子产品';
    }
}