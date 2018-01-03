<?php

namespace IMooc;
/**
 * @author: Spjiang<jiangshengping@outlook.com>
 * @time: 2017/12/8 17:26
 */

interface IDatabase
{
    function connect($host, $user, $passwd, $dbname);
    
    function query($sql);
    
    function close();
}