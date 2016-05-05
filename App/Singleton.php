<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 05.05.16
 * Time: 10:16
 */

namespace App;


trait Singleton
{
    protected static $instance;

    protected function __construct()
    {
        
    }
    public static function instance(){
        if(null === static::$instance){
            static::$instance = new static;
        }
        return static::$instance;
    }
}