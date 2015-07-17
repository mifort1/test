<?php

/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 13.07.2015
 * Time: 18:07
 */
abstract class Article
{
    private  $db;
    protected function  __construct(){
        $this->db = new DB();
    }
    public  function sqlQuery(){

    }
}