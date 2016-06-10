<?php
/**
 * Created by PhpStorm.
 * User: mifort
 * Date: 03.06.16
 * Time: 10:54
 */
phpinfo();
$con = require __DIR__ . '/config/config.php';
require __DIR__.'/vendor/autoload.php';
/*$obj = new \T4\Core\Std(['foo'=>5]);
echo $obj->foo;*/
?>
<H1>Добро пожаловать на <?php echo $con['domainName'];?></H1>
