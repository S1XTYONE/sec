<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'portfolio');

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('template');
$twig = new Twig_Environment($loader);

define('IS_ADMIN', isset($_SESSION['IS_ADMIN']));