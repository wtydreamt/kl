<?php
header('Content-type:text/html;charset=utf-8');
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('APP_DEBUG',true);
define('APP_PATH','./Kunlunadmin/');
define('DEFAULT_MODULE','Home');  
define('DEFAULT_CONTROLLER','Login');
define('DEFAULT_ACTION','index'); 
require './ThinkPHP/ThinkPHP.php';

