<DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Сандер Т.А.</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="row">
                <div class="col-3 nav_logo"></div>
                <div class="col-9">
                    <div class="nav text">подпивасный сайт</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h1>
                    web
                </h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>
                    Сандер Тимур Веберович
                </h2>
            </div>
            <div class="col-12">
                    <div class="row my_photo"></div>
                    <div class="row"><p class="title_photo">абоба</p></div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <p>
                    Вам что-нибудь говорит это имя? Конечно, вы правы: это сильнейший веб пентестер во всей России, с которым способны потягаться лишь полный состав PT SWARM(и то не факт)!
                </p>
            </div>
	
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div button-js col-12>
                <button id="my_button">кликни здесь за пару сек, если ты не гамасек</button>
                <p id="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
	<div class="row">
	    <div class="col-12">
		<h1 class="hello"> Привет, <?php echo $_COOKIE['User']; ?></h1>
	    </div>
	   <div class="col-12">
		<form method="POST" action="secret_page.php" enctype="multipart/form-data" name="upload">
		    <div class="col-12">
		        <input class="form" type="text" name="title" placeholder="Заголовок статьи">
		    </div>
		    <div class="col-12">
			<textarea name="text" cols="30" rows="10" placeholder="Введите текст статьи"></textarea>
			<input type="file" name="file">
		    </div>
		    <div class="col-12">
			<button type="submit" class="btn_red" name="submit">Сохранить статью!</button>
		    </div>
		</form>
            </div>
	<div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>
</body>
<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', 'p', 'first');
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $main_text = $_POST['text'];
    if (!$title || !$main_text) die("Заполните все поля!");
    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";
    if (!mysqli_query($link, $sql)) die("Не удалось добавить пост");
}
if(!empty($_FILES['file'])) {
    if (((@$_FILES['file']['type'] == "image/gif") || (@$_FILES['file']['type'] == "image/jpeg") || (@$_FILES['file']['type'] == "image/jpg") || (@$_FILES['file']['type'] == "image/pjpeg") || (@$_FILES['file']['type'] == "image/x-png") || (@$_FILES['file']['type'] == "image/png"))) {
        move_uploaded_file($_FILES['file']['tmp_name'], "uploads/" . $_FILES['file']['name']);
        echo "Load in:  " . "uploads/" . $_FILES['file']['name'];
    } else {
         echo "upload failed!";
    }
}
?>
