<?php
//error_reporting(E_ALL & ~E_NOTICE);
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
//test();
//генератор
function reg(){
    for ($i=0;$i<=20;$i++){
        yield $i;
    }
}
/*foreach (reg() as $k=>$val){
    echo $k.'=>'.$val;
    echo '<br>';
}*/
// функции с переменным количеством параметров ($x - не обязателен)
function sum($x,...$arr){
    return $x+array_sum($arr);
}
//echo sum(1,2,3,4);


function sam(...$a){
    return array_sum($a);
}
$arr = array(10,20,30,40,5);
//echo sam(...$arr);
//$x = null;
$y = 123;
//$v = $x ?: $y; // если $x true
$v = $x ?? $y; // если $x существует
//var_dump($v);
// константы
const TER = 6*2;
const ASSD = TER.'55555';
define("JJJJJ", 'ssss');
var_dump(ASSD);