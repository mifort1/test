<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 20.04.2016
 * Time: 11:05
 */
require_once __DIR__.'/autoload.php';
require_once __DIR__.'/test.php';

$user = new \App\Models\User();
$user->name = 'Vasya';
$user->email = 'Vasya@ukr.net';
//$user->insert();
