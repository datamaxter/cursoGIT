<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));

include ROOT.DS.'src'.DS.'core.php';
include ROOT.DS.'src'.DS.'view.php';

print_r('<pre> DS='.DS.' ROOT='.ROOT.'</pre>');
 
 ?>