<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 20.05.16
 * Time: 14:48
 */
require_once ('functions.php');
session_start();
if(!issetSession()){
    header("Location: /login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<H1> Привет, <?php echo $_SESSION['login']; ?></H1>
<a href="file.php">Файл</a>
<a href="unset.php">Выйти</a>
</body>
</html>
