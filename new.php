<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 27.06.2015
 * Time: 11:48
 */
include __DIR__.'/models/News.php';
if(isset($_GET['id']) and !empty($_GET['id'])){
    $id = (int)$_GET['id'];
    $new = Select_NewByPk($id);
    include __DIR__.'/views/new.php';
}