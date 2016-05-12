<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 11.05.16
 * Time: 11:12
 */

namespace App\Controllers;



use App\Controller;

class News extends Controller
{
   
    protected function actionIndex(){
        parent::actionIndex();
        $this->view->title = 'Все новости';
        $this->view->display(__DIR__.'/../templates/index.php');
    }

    protected function actionOne(){
        parent::actionOne();
        $this->view->title = 'Одна новость!';
        $this->view->display(__DIR__.'/../templates/one.php');
    }
}