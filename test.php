<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 05.05.16
 * Time: 10:18
 */
use \App\Singleton;


// анонимные функции
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
//echo $f('name')(8); // вывод 24
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
//echo $d()['b'](9); //вывод 27





// замыкание
$param = 5;
$o = function($n) use ($param){
    return $n*$param;
};
//echo $o(40); //вывод 200

// глобальные переменные
$a = 3;
$b = 5;
$c = function(){
    global $a, $b;
    $a= 6;
    $b= 7;
    return $a*$b;
};
//echo $c();

//Статические переменные и рекурсивные функции
function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
}
test();