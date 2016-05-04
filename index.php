<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 20.04.2016
 * Time: 11:05
 */
require_once __DIR__.'/autoload.php';

$user = \App\Models\User::findAll();
var_dump($user);