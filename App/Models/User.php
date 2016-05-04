<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 04.05.16
 * Time: 14:34
 */

namespace App\Models;


use App\Db;

class User
{
    public $user;
    public $email;
    public static function findAll(){
        $db = new Db();
        return $db->query('SELECT * FROM users', 'App\Models\User');
    }
}