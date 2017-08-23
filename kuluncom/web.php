<?php
header('Content-type:text/html;charset=utf-8');
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('APP_DEBUG',true);
define('APP_PATH','./Web/');
define('DEFAULT_MODULE','Web');  
define('DEFAULT_CONTROLLER','Index'); 
define('DEFAULT_ACTION','index');
define('COOKIT_PATH',substr($_SERVER['PHP_SELF'],0,strpos($_SERVER['PHP_SELF'],"/web.php")));
require './ThinkPHP/ThinkPHP.php';