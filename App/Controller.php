<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 12.05.16
 * Time: 10:15
 */

namespace App;


abstract class Controller
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
    protected function beforeAction(){}


    protected function actionIndex(){
        $this->view->news = \App\Models\Article::findAll();
        $this->view->display(__DIR__.'/templates/index.php');
    }

    protected function actionOne(){
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\Article::findById($id);
        $this->view->display(__DIR__.'/templates/one.php');
    }
}