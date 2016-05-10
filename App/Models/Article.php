<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 10.05.16
 * Time: 14:56
 */

namespace App\Models;


use App\Model;

class Article extends Model
{
    const TABLE = 'news';
    public $title;
    public $lead;
    public $author_id;
}