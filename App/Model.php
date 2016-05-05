<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 04.05.16
 * Time: 16:03
 */

namespace App;

abstract class Model
{
    const TABLE = '';
    public static function findAll(){
        $db = new Db();
        return $db->query('SELECT * FROM '.static::TABLE, static::class);
    }
}const TABLE = 'users';