<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 11.05.16
 * Time: 11:12
 */

namespace App\Controllers;


use App\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }
    public function action($action){
        $this->beforeAction();
        $methodName = 'action'.$action;
        return $this->$methodName();
    }
    protected function beforeAction(){
        $a = 1;
    }
    protected function actionIndex(){
        $this->view->news = \App\Models\Article::findAll();
        $this->view->title = 'Все новости';
        $this->view->display(__DIR__.'/../templates/index.php');
    }

    protected function actionOne(){
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\Article::findById($id);
        $this->view->title = 'Одна новость!';
        $this->view->display(__DIR__.'/../templates/one.php');
    }
}