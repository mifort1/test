<?php session_start();
require_once('functions.php'); 
if (issetSession()) {
header("Location: /hello.php");
exit;
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo $_SESSION['err'] ?? ''; unset($_SESSION['err']);?>
<form action="/login.php" method="post">
    <label>Login</label>
    <input type="text" name="login">
    <br>
    <label>Password</label>
    <input type="password" name="password">
    <br>
    <input type="checkbox" checked="checked" name="check">
    <input type="submit" value="Отправить!" name="submit">
</form>
</body>
</html>