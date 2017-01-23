<?php
include 'db.php';
if (!IS_ADMIN) die ('У вас нет прав на редактирование контента');
$sel = $mysqli->prepare("UPDATE works SET title = ?, description = ?, thumb = ?, short = ?, price = ?, hard = ?, time = ? WHERE id = ?");
$sel->bind_param('sssssssi', $_POST['title'], $_POST['description'], $_POST['thumb'], $_POST['short'], $_POST['price'], $_POST['hard'], $_POST['time'], $_POST['id']);
if ($sel->execute()){
    header ("Location: ./admin");
}else{
    die("Ошикба");
}

echo $twig->render('edit.html', array('works' => $row));
