
<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 27.06.2015
 * Time: 10:35
 */
require_once __DIR__.'/../classes/DB.php';
class News {
    public  $id;
    public $title;
    public $text;
    public $date;
    static public function GetAll(){
        $db = new DB();
        $sql = "SELECT * FROM news ORDER BY date DESC";
        return $db->query($sql);

    }
}

/*
function New_insert($data){
    // build query...
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