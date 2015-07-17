<?php

/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 17.07.2015
 * Time: 15:04
 */
abstract class AbstractModel
{
    protected static $table;
    protected static $class;

    public static function getAll(){
        $db = new DB();
        $sql = 'SELECT * FROM '.static::$table.' ORDER BY date DESC';
        return $db->queryAll($sql, static::$class);

    }

    public static function getOne($id){
        $db = new DB();
        $sql = 'SELECT * FROM '.static::$table.' WHERE id = '.$id;
        return $db->queryOne($sql, static::$class);
    }


}