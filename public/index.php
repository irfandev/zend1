<?php
 
//ini_set('error_reporting', E_ALL);
defined('APPLICATION_ENV') ||
        define('APPLICATION_ENV', 'development');

defined('APPLICATION_PATH') ||
        define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

defined('UPLOAD_DIRECTORY') ||
        define('UPLOAD_DIRECTORY', realpath(dirname(__FILE__) . '/upload'));

defined('SITE_URL') ||
        define('SITE_URL', "http://" . $_SERVER['HTTP_HOST']);


set_include_path(implode(
                PATH_SEPARATOR, array(realpath(APPLICATION_PATH . '/../library'),
                APPLICATION_PATH .'/models' ,
                get_include_path())));

 
require_once 'Gwb/App.php';
$application = new Gwb_App(APPLICATION_ENV);
$application->bootstrap()
        ->run();
