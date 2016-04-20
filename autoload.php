<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 20.04.2016
 * Time: 11:05
 */
/*
 * App\db => App/db
 */
function __autoload($class){
   require  __DIR__.'/'. str_replace('\\', '/', $class).'.php';
}