<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 26.06.2015
 * Time: 15:21
 */
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl.'Controller';

require_once __DIR__.'/controllers/'.$controllerClassName.'.php';

$controller = new $controllerClassName;
$method = 'action'.$act;
$controller->$method();


