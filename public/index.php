<?php

$url = explode("/", $_SERVER['REQUEST_URI']);

$page = $url[1];
$pages = [
    '',
    'home',
    'search',
    'offers'
];

var_dump($url[1]);

switch ($page) {
    case '' :
        include('../src/home.php');
}