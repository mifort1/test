
<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 27.06.2015
 * Time: 10:35
 */
class News extends AbstractModel{
    public  $id;
    public $title;
    public $text;
    public $date;

    protected static $table = 'news';
    protected static $class = 'News';

}

/*
function New_insert($data){
    // build queryAll...
    $sql  = "INSERT INTO news";

    // implode keys of $array...
    $sql .= " (`".implode("`, `", array_keys($data))."`)";

    // implode values of $array...
    $sql .= " VALUES ('".implode("', '", $data)."') ";
    return sql_exec($sql);
}
function Select_NewByPk($id){
    $sql = "SELECT * FROM news WHERE id = ".$id;
    return sql_query($sql);
}*/