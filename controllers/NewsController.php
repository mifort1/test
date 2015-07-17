<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 17.07.2015
 * Time: 11:11
 */

class NewsController{

    public function actionAll(){
        $items = News::getAll();
        include __DIR__.'/../views/news/all.php';
    }

    public function actionOne(){
        $id = $_GET['id'];
        $items = News::getOne($id);
        include __DIR__.'/../views/news/one.php';
    }
}