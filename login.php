<?php
include 'db.php';
include 'header.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if ($_POST['login'] == 'login' && $_POST['password'] == 'password'){
        $_SESSION['IS_ADMIN'] = true;
        header('Location: .');
    } else{
        echo 'Не получилось';
        header('location: .');
    }
}

echo $twig->render('login.html');