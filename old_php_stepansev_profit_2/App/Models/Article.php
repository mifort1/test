<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 10.05.16
 * Time: 14:56
 */

namespace App\Models;


use App\Model;

/**
 * LASY LOAD (ленивая загрузка)
 * @property =\App\Models\Author $author
 */

class Article extends Model
{

    const TABLE = 'news';
    public $title;
    public $lead;
    public $author_id;



    public function __get($k)
    {
        // TODO: Implement __get() method.
        switch ($k) {
            case 'author':
                return Author::findById($this->author_id);
            break;
            default:
                return $k;
        }
    }
    public function __isset($k)
    {
        switch ($k) {
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;
        }

    }
}