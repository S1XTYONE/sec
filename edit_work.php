<?php
include 'db.php';
include 'header.php';
$id = intval($_GET['id']);
$row = $mysqli->query("SELECT * FROM works WHERE id = $id");
echo $twig->render('edit_work.html', array('works' => $row));