<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 27.06.2015
 * Time: 11:26
 */
class DB {
    private $dbh;
    public function __construct(){
        $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root','');
    }
    public function query($sql, $params = []){
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_OBJ);

    }
}

