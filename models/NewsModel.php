<?php

/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 24.07.2015
 * Time: 14:34
 */
class NewsModel
    extends AbstractModel
{
    protected static $table = 'news';
    public $id;
    public $title;
    public $text;
    public $date;
}