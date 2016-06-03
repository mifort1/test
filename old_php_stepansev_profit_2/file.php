<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 24.05.16
 * Time: 10:38
 */
echo $_SERVER['SERVER_NAME'];
require_once __DIR__ . '/functions.php';
session_start();
if (!issetSession()) {
    header("Location: /login.php");
    exit;
}
// проверка на размер
function imageSize($imageSize){
   return  $imageSize > ini_get('upload_max_filesize');
}
// проверка на тип файла
function imageType($imageTypeFile){
    $imageType = [
        'jpg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif',
    ];
    return in_array($imageTypeFile, $imageType);
}
if (isset($_POST['submit'])) {
    // проверка наличия файла
    $newName = issetFile($_FILES['image']['name']);
    $error = '';

    if (imageSize($_FILES['image']['size'])) {
        if (imageType($_FILES['image']['type'])) {

            if (is_uploaded_file($_FILES['image']['tmp_name'])) {
                if(!move_uploaded_file($_FILES['image']['tmp_name'], $newName)){
                    $error = 'Не удалось  загрузить файл';
                }
            }
        } else {
            $error = 'Не тот тип файлов';
        }
    } else {
        $error = 'Слишком большой размер';
    }
}
$imgs = array_diff(scandir(__DIR__ . '/file'), ['.'],['..'] );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<ul>
    <?php foreach ($imgs as $img): ?>
        <li><img src="/file/<?php echo $img ?>" width="300px" height="150px"></li>
    <?php endforeach; ?>
</ul>
<strong><?php if (!empty($error)) {
        echo $error;
    } ?> </strong>
<form action="/old_php_stepansev_profit_2/file.php" method="post" enctype="multipart/form-data">
    <label>Загрузите картинку</label>
    <input name="image" type="file">
    <input type="submit" value="Отправить" name="submit">
</form>
</body>
</html>

