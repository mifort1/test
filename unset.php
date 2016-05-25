<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 20.05.16
 * Time: 15:15
 */
require_once ('functions.php');
session_start();
if(!issetSession()){
    header("Location: form.php");
    exit;
}
if ( session_id() ) {
    // Если есть активная сессия, удаляем куки сессии,
    setcookie(session_name(), session_id(), time()-60*60*24);
    // и уничтожаем сессию
    session_unset();
    session_destroy();
    if(getCook()){
        unsetCook();
    }
}
header("Location: /login.php");
exit;