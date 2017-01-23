<?php
include 'db.php';
include 'header.php';

$works = $mysqli->query("SELECT * FROM works ORDER BY id DESC");


echo $twig->render('index.html', array('works' => $works));