<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 04.05.16
 * Time: 14:34
 */

namespace App\Models;


use App\Model;

class User extends Model
{
    const TABLE = 'users';
    public $user;
    public $email;

}