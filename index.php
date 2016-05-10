<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 20.04.2016
 * Time: 11:05
 */
require_once __DIR__.'/autoload.php';

$obg = new \App\View();
$authors = \App\Models\Article::findAll();
var_dump($authors[4]->author);



