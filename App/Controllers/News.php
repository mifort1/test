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
        $this->view->title = 'Все новости';
        parent::actionIndex();
    }

    protected function actionOne(){
        $this->view->title = 'Одна новость!';
        parent::actionOne();
    }
}