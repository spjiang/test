<?php
require_once 'Loader.php';
class MaleUser implements UserStrategy{
    function showAd()
    {
        echo 'IPone6s';
    }
    function showCategory()
    {
        echo '电子产品';
    }
}