<?php

/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 17.07.2015
 * Time: 18:10
 */
interface IModel
{
    public static function getAll();
    public static function getOne($id);
}