<?php
include 'db.php';
include 'header.php';

if (!isset($_GET['id'])) die ('Работа на найдена');

$id = intval($_GET['id']);

$works = $mysqli->query("SELECT * FROM works WHERE id = $id");

if(!$works) die('Нет такой работы');

echo $twig->render('work.html', array('works' => $works));