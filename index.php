<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 20.04.2016
 * Time: 11:05
 */
require_once __DIR__.'/autoload.php';

$obj = new \App\Db();
$res = $obj->query('SELECT * FROM foo');
var_dump($res);