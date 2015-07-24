<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 17.07.2015
 * Time: 11:11
 */

class NewsController{

    public function actionAll(){

        $article= new NewsModel();
        $article->title = 'привет4';
        $article->text = 'привет привет4';
        $article->date = date("Y-m-d H:i:s");
        $article->insert();


        die;
        /*$items = News::findAll();
        $view = new View();
        $view->items = $items;
        $view->display('news/all.php');*/
    }

    public function actionOne(){
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->item = $item;
        $view->display('news/one.php');
    }
}