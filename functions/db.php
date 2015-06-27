<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 27.06.2015
 * Time: 11:26
 */
function db_connect(){
    mysql_connect('localhost', 'root', '');
    mysql_select_db('test');
}
function sql_query($sql){
    db_connect();
    $res =  mysql_query($sql);
    $arr = [];
    while(false !== $row = mysql_fetch_assoc($res)){
        $arr[] = $row;
    }
    return $arr;
}
function sql_exec($sql){
    db_connect();
    if(mysql_query($sql))
        return true;
    else
        return false;
}