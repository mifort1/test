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
$f = function ($k) {
    switch ($k) {
        case 'name':
            return function ($v) {
                return $v * 3;
            };
            break;
        case 'val':
            return function ($j) {
                return $j * 4;
            };
            break;
    }
};
//echo $f('name')(8); // вывод 24
$cv = function () {
    $h = [];
    $h[] = 'vvv';
    return $h;
};
$d = function () {
    return [
        'a' => function ($v) {
            return $v * 2;
        },
        'b' => function ($v) {
            return $v * 3;
        }
    ];
};
//echo $d()['b'](9); //вывод 27


// замыкание
$param = 5;
$o = function ($n) use ($param) {
    return $n * $param;
};
//echo $o(40); //вывод 200

// глобальные переменные
$a = 3;
$b = 5;
$c = function () {
    global $a, $b;
    $a = 6;
    $b = 7;
    return $a * $b;
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
function reg()
{
    for ($i = 0; $i <= 20; $i++) {
        yield $i;
    }
}

/*foreach (reg() as $k=>$val){
    echo $k.'=>'.$val;
    echo '<br>';
}*/
// функции с переменным количеством параметров ($x - не обязателен)
function sum($x, ...$arr)
{
    return $x + array_sum($arr);
}

//echo sum(1,2,3,4);


function sam(...$a)
{
    return array_sum($a);
}

$arr = array(10, 20, 30, 40, 5);
//echo sam(...$arr);
//$x = null;
$y = 123;
//$v = $x ?: $y; // если $x true
$v = $x ?? $y; // если $x существует
//var_dump($v);
// константы
const TER = 6 * 2;
const ASSD = TER . '55555';
define("JJJJJ", 'ssss');
//var_dump(ASSD);


if (isset($_COOKIE['count'])) {
    $counter = ++$_COOKIE['count'];
} else {
    $counter = 1;
}
//setcookie('count', $counter, time()+3600);
//echo $counter;
//session_start();


/*if(!empty($_POST['name'])) {
    if (!isset($_SESSION['name'])) {
        session_start();
        $_SESSION['name'] = trim(strip_tags($_POST['name']));
        $_SESSION['lastname'] = trim(strip_tags($_POST['lastname']));
        echo 555;
    }
}else{
    */ ?><!--
    <form method="post" name="my">
        <label>Name</label>
        <input name="name" type="text">
        <br>
        <label>LastName</label>
        <input name="lastname" type="text">
        <input type="submit" value="нажать!">
    </form>
    --><?php
/*}*/

//var_dump($_SESSION);
function sss($n)
{
    $arr = [];
    for ($i = 0; $i < $n; $i++) {
        $arr[] = mt_rand();
    }
    rsort($arr);
    return $arr;
}

//var_dump(sss(25));
$a = [1, 2, 3, 4];

$u = [
    'Алтай' => ['Москва', 'Питер', 'Гомель'],
    'Дальний' => ['1Москва', '1Питер', '1Гомель'],
];
/*echo '<ul>';
foreach ($u as $k=>$v){
    echo '<li>'.$k;
    echo '<ul>';
    foreach ($v as $y){
        echo '<li>'.$y.'</li>';
    }
    echo '</ul>';
    echo '</li>';
}
echo '</ul>';*/
//var_dump(implode(',   ',$a));

// xor
$a = true;
$b = true;
//var_dump($a xor $b); die;

$operators = ['+', '-', '*', '/'];
$operatorPost = '';
if (isset($_POST['submit'])) {
    $first = (float)$_POST['first'];
    $second = (float)$_POST['second'];
    $operatorPost = $_POST['sel'];
    if (in_array($operatorPost, $operators)) {
        switch ($operatorPost) {
            case '+':
                $val = $first + $second;
                break;
            case '-':
                $val = $first - $second;
                break;
            case '*':
                $val = $first * $second;
                break;
            case '/':
                if (0 != $second) {
                    $val = $first / $second;
                } else {
                    $val = 'Делить на ноль нельзя!';
                }
                break;
        }
    }
}
?>
<form name="myform" method="post">
    <input name="first" type="text" value="<?php echo isset($first) ? $first : ''; ?>">
    <select name="sel">
        <?php foreach ($operators as $operator): ?>
            <option <?php if($operator == $operatorPost){echo 'selected';}?> value="<?php echo $operator; ?>"><?php echo $operator; ?></option>
        <?php endforeach; ?>
    </select>
    <input name="second" type="text" value="<?php echo isset($second) ? $second : ''; ?>"> =
    <?php echo $val ?? ''; ?>
    <br>
    <input type="submit" name="submit" value="Посчитать">
</form>
