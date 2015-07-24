<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 17.07.2015
 * Time: 11:11
 */

class NewsController{

    public function actionAll(){
        $db = new DB();
        $res = $db->query(
            'SELECT * FROM news WHERE id = :id',
            [':id'=>3]
        );
        var_dump($res);
        die;
        /*$items = News::getAll();
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