<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 27.06.2015
 * Time: 11:26
 */
class DB {
    public function __construct(){
        mysql_connect('localhost', 'root', '');
        mysql_select_db('test');
    }
    public  function  queryAll($sql, $class = 'stdClass'){
        $res =  mysql_query($sql);
        if(false === $res){
            return false;
        }
        $arr = [];
        while($row = mysql_fetch_object($res, $class)){
            $arr[] = $row;
        }
        return $arr;
    }
    public function queryOne($sql, $class = 'stdClass'){
        return $this->queryAll($sql, $class = 'stdClass')[0];
    }
    /*public function sql_exec($sql){
        if(mysql_query($sql))
            return true;
        else
            return false;
    }*/
}

