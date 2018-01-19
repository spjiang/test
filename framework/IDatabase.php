<?php
 namespace framework;
 interface IDatabase
 {
     function connect($host,$user,$passwd,$dbname);
     function query($sql);
     function close();
 }
 
 