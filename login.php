<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 19.05.16
 * Time: 13:55
 */
require_once ('functions.php');
session_start();
// проверка на наличие в бд
if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['password'])){
    $login = trim(strip_tags($_POST['login']));
    $password = trim(strip_tags($_POST['password']));
    if(issetBd($login, $password)){
        unset($_SESSION['err']);
        // проверка открыта ли сессия
            setSession($login, $password);
            // проверка checkbox
            if (isset($_POST['check'])) {
                // создаем куку
                setCook($login);
            }
    }else{
        $_SESSION['err'] = 'Ошибка авторизации';
    }
}

// проверка наличия сесии или куки
if(getCookOrSession()){
    header("Location: hello.php");
    exit;
}
header("Location: form.php");
exit;

