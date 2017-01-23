<?php
include 'db.php';
if (!IS_ADMIN) die ('У вас нет прав на редактирование контента');
$id = intval($_GET['id']);
$mysqli->query("DELETE FROM works WHERE id = $id");
header('Location: ./admin');