<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Сандер Т.А.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi>
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Вход</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="login.php">
                    <div class="row form_reg"><input class="form" type="text" name="login" placeholder="login"></div>
                    <div class="row form_reg"><input class="form" type="password" name="password" placeholder="password"></div>
                    <button type="submit" class="btn_red btn__reg" name="submit">Зарегестрироваться</button>
                </form>
            </div>
        </div>
    </div> 
</body>
</html>

<?php
if (isset($_COOKIE['User'])) {
    header("Location: profile.php");
}

require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', 'p', 'first');

if (isset($_POST['submit'])) {
    $username = $_POST['login'];
    $password = $_POST['password'];
    
    if (!$username || !$password) die('Пожалуйста введите все значения!');
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    
    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) == 1) {
        setcookie("User", $username, time()+7200);
        header('Location: secret_page.php');
    } else {
        echo "не правильное имя или пароль";
    }
}
?>
