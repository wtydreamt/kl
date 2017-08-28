<?php
header('Content-type:text/html;charset=utf-8');
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('APP_DEBUG',true);
define('APP_PATH','./Kunlunadmin/');
$SERVER_NAME=$_SERVER['SERVER_NAME'];
if($SERVER_NAME=="klcf.ffcka.com"){
define('DEFAULT_MODULE','Web');  
define('DEFAULT_CONTROLLER','Index'); 
define('DEFAULT_ACTION','index');
define('COOKIT_PATH',substr($_SERVER['PHP_SELF'],0,strpos($_SERVER['PHP_SELF'],"/index.php"."/Web")));	
}else{
define('DEFAULT_MODULE','Home');  
define('DEFAULT_CONTROLLER','Login');
define('DEFAULT_ACTION','index');
define('COOKIT_PATH',substr($_SERVER['PHP_SELF'],0,strpos($_SERVER['PHP_SELF'],"/index.php"."/Home")));	
}
print_r($_SERVER);die;
echo COOKIT_PATH;die;
require './ThinkPHP/ThinkPHP.php';

