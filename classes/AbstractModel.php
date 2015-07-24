<?php

/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 17.07.2015
 * Time: 15:04
 */
abstract class AbstractModel
{
    protected static  $table;


    public static function findAll(){
        $class = get_called_class();
        $sql= 'SELECT * FROM '.static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }
    public static function   findOneByPk($id){
        $sql= 'SELECT * FROM '.static::$table. ' WHERE id = :id';
        $db = new DB();
        return $db->query($sql,[':id'=>$id]);
    }
}