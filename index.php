<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 20.04.2016
 * Time: 11:05
 */
require_once __DIR__.'/autoload.php';

$obg = new \App\View();
$obg->users = \App\Models\User::findAll();
$obg->display(__DIR__.'/App/templates/index.php');



/*$user = new \App\Models\User();
$user->name = 'Vasya';
$user->email = 'Vasya@ukr.net';
var_dump($user->findAll());
die;*/