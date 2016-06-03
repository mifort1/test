<?php

/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 20.05.16
 * Time: 15:43
 */
function issetBd($login, $password){
    $bd = ['pupkin'=>'123', 'sas'=>'145632'];
    return isset($bd[$login]) && $password == $bd[$login];
}
// установка сессии
function setSession($login, $password){
    $_SESSION['login'] = $login;
}
//  функция  создания куки
function setCook($login){
    setcookie('auth', $login, time() + 86700);
}
// удаление куки
function unsetCook($login){
    setcookie('auth', $login, time() - 86700);
}
// функция проверки наличия куки
function getCook(){
    return isset($_COOKIE['auth']);
}
// проверка открыта ли сессия
function issetSession(){
    return isset($_SESSION['login']);
}
function getCookOrSession(){
    switch (true){
        case issetSession():
            return true;
        case getCook():
            $_SESSION['login']  = $_COOKIE['auth'];
            return true;
        default:
            return false;
    }
}
// проверка наличия файла
function issetFile($name)
{
    $uploadName = 'file/';
    while (is_file($uploadName . $name)) {
        $i = (int)$name;
        $k = $i + 1;
        if (0 == $i) {
            $name = $k . '_' . $name;
        } else {
            $name = str_replace($i, $k, $name);
        }
    }
    return $uploadName . $name;
}