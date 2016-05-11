<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 20.04.2016
 * Time: 11:05
 */
//error_reporting(E_ALL & ~E_NOTICE);
require_once __DIR__.'/autoload.php';

$obg = new \App\View();
$obg->news = \App\Models\Article::findAll();
$obg->title = 'Все новости';
echo $obg->render(__DIR__.'/App/templates/index.php');



