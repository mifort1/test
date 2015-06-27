<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 27.06.2015
 * Time: 13:22
 */
include __DIR__.'/models/News.php';
if(!empty($_POST)){
    $data= [];
    if(!empty($_POST['title']))
        $data['title'] = $_POST['title'];
    if(!empty($_POST['text']))
        $data['text'] = $_POST['text'];
    $data['date'] = date("Y-m-d H:i:s");
    if(isset($data['title']) && isset($data['text'])){
        New_insert($data);
        header('Location: /');
        die;
     }

}
include __DIR__.'/views/add.php';