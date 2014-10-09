<?php

define('DS', DIRECTORY_SEPARATOR);
define('HOME', dirname(__FILE__));
 
require_once HOME.DS.'config'.DS.'config.php';
require_once HOME.DS.'core'.DS.'router.php';
 
function __autoload($class)
{
    if (file_exists(HOME.DS.'core'.DS.strtolower($class).'.php'))    
        require_once HOME.DS.'core'.DS.strtolower($class).'.php';    
    else if (file_exists(HOME.DS.'models'.DS.strtolower($class).'.php'))
        require_once HOME.DS.'models'.DS.strtolower($class).'.php';    
    else if (file_exists(HOME.DS.'controllers'.DS.strtolower($class).'.php'))    
        require_once HOME.DS.'controllers'.DS.strtolower($class).'.php';
}