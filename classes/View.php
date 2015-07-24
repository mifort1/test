<?php

/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 17.07.2015
 * Time: 15:49
 */
class View
    implements Iterator
{
    const PATH = __DIR__.'/../views/';
    protected $data = [];

    public  function __set($k,$v){
        $this->data[$k] = $v;
    }

    public  function __get($k){
        return $this->data[$k];
    }

    public function display($template){
        foreach($this->data as $key => $value){
            $$key = $value;
        }
        include  self::PATH.$template;

    }

    public function current()
    {
    }

    public function next()
    {
    }

    public function key()
    {
    }

    public function valid()
    {
    }


    public function rewind()
    {
    }
}