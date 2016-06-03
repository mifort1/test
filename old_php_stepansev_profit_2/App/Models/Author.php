<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 10.05.16
 * Time: 14:54
 */

namespace App\Models;


use App\Model;

class Author extends Model
{
    const TABLE = 'authors';
    public $name;
}