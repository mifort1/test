<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 06.05.16
 * Time: 15:21
 */

namespace App;


class View
{
    protected $data = [];
    public function __set($k, $v)
    {
        $this->data[$k] = $v;

    }
    public function __get($k)
    {
        return $this->data[$k];
    }

    public function display($template){
        include $template;
    }
}