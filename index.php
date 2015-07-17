<?php
/**
 * Created by PhpStorm.
 * User: Mifort
 * Date: 26.06.2015
 * Time: 15:21
 */
require __DIR__.'/models/News.php';

$items = News::GetAll();


include __DIR__.'/views/index.php';