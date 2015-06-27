<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости</title>
</head>
<body>
    <table border="1px solid black">
        <tr>
            <th>Название статьи</th>
        </tr>
        <?php foreach($news as $new):?>
        <tr>
            <td><a href="new.php?id=<?=$new['id']?>"><?=$new['title']?></a></td>
        </tr>
        <?php endforeach;?>
    </table>
   <a href="add.php">Добавить новость</a>
</body>
</html>