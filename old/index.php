<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 26.06.2015
 * Time: 15:21
 */
require_once __DIR__ . '/autoload.php';
$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $ctrl.'Controller';


$controller = new $controllerClassName;
$method = 'action'.$act;
$controller->$method();


