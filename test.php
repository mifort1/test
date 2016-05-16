<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 05.05.16
 * Time: 10:18
 */
use \App\Singleton;

$f = function($k){
    switch ($k){
        case 'name':
            return function($v){
                return $v*3;
            };
        break;
        case 'val':
            return function($j){
                return $j*4;
            };
        break;
    }
};

$cv = function(){
    $h = [];
    $h[] = 'vvv';
  return $h;
};
$d = function(){
    return [
      'a'=>function($v){
              return $v*2;
      },
        'b'=>function($v){
              return $v*3;
      }
    ];
};
//var_dump($d());
echo $d()['b'](8);


/*$obj = Singleton::instance();
var_dump($obj);*/
