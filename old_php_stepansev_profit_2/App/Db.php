<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 20.04.2016
 * Time: 11:20
 */
namespace App;

class Db
{
    use Singleton;
    private $dsn = 'mysql:dbname=test;host=127.0.0.1';
    private $user = 'root';
    private $password = '1';
    protected $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO($this->dsn, $this->user, $this->password);
    }
    public function execute($sql, $params = []){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        return $res;
    }
    public function query($sql, $params, $class){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if(false !== $res){
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}