<?php

function __autoload($classname){
    include_once("controler/$classname.php");
}

$action = 'action_';
$action .= (isset($_GET['act'])) ? $_GET['act'] : 'index';

switch ($_GET['c'])
{
    case 'articles':
        $controller = new C_Page();
        break;
    default:
        $controller = new C_Page();
}

$controller->Request($action);