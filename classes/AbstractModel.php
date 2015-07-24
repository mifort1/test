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
    protected $data = [];


    public function __set($k, $v){
        $this->data[$k]=$v;
    }

    public function __get($k){
        return $this->data[$k];
    }
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

    public  function insert(){
        $cols = array_keys($this->data);
        $data = [];
        foreach($cols as $col){
            $data[':'.$col] = $this->data[$col];
        }
        $sql = '
            INSERT INTO '.static::$table. '
            (' .implode(', ', $cols). ')
            VALUES
            (' .implode(', ', array_keys($data)). ')
            ';
        $db = new DB();
        $db->execute($sql,$data);
    }
}




















