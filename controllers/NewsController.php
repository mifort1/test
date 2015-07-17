<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 17.07.2015
 * Time: 11:11
 */
require __DIR__.'/../models/News.php';

class NewsController{

    public function actionAll(){
        $items = News::GetAll();
        include __DIR__.'/../views/news/all.php';
    }

    public function actionOne(){
        echo 'action One'; die;
        $id = $_GET['id'];
        $items = News::getOne($id);
        include __DIR__.'/../views/news/one.php';
    }
}