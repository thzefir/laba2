<?php
$link = mysqli_connect('127.0.0.1', 'root', 'p');
if (!$link) {
	die('Error: ' . mysqli_error());
}
echo 'Это была проверка и ты её прошел';
mysqli_close($link)
?>
