<?php
require_once('config.php');

echo "Hello " . $_COOKIE['username'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $_COOKIE['username']; ?></title>
</head>
<form method="post" action="#">
<button type="submit" name="log-out">LogOut</button>
</form>
</body>
</html>
<?php
if(isset($_POST['log-out'])){
    setcookie('email', '', time() - 3600 * 24 * 9999, "/");
    setcookie('username', '', time() - 3600 * 24 * 9999, "/");
    header("Location:" . BASE_URL);
}
?>