<?php
include 'db.php';
$sel = $mysqli->prepare("INSERT INTO works(title,description,thumb,short,price,hard,time) VALUES(?, ?, ?, ?, ?, ?, ?) ");
$sel->bind_param('sssssss', $_POST['title'], $_POST['description'], $_POST['thumb'], $_POST['short'], $_POST['price'], $_POST['hard'], $_POST['time']);
if ($sel->execute()){
    header('Location: ./admin');
}else{
    die("Ошикба");
}
