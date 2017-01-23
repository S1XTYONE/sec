<?php
include 'db.php';
include 'header.php'; 
if (!IS_ADMIN) die ('У вас нет прав на редактирование контента');

$works = $mysqli->query("SELECT * FROM works ORDER BY id DESC");
echo $twig->render('admin.html', array('works' => $works));