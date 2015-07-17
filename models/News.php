
<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 27.06.2015
 * Time: 10:35
 */
class News {
    public  $id;
    public $title;
    public $text;
    public $date;

    public static function getAll(){
        $db = new DB();
        $sql = "SELECT * FROM news ORDER BY date DESC";
        return $db->queryAll($sql, 'News');

    }
    public static function getOne($id){
        $db = new DB();
        $sql = 'SELECT * FROM news WHERE id = '.$id;
        return $db->queryOne($sql, 'News');
    }

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