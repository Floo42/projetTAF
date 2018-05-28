<?php

$jsonContent = file_get_contents('../config.json');
$json = $json = json_decode($jsonContent, true);

$domain = $json['url'];
$email = $json['email'];
$mysqlHost = $json['DSN']['host'];
$dbname = $json['DSN']['dbname'];
$mysqlUser = $json['DSN']['username'];
$mysqlPass = $json['DSN']['password'];

#$db = new PDO('mysql:host=' . $mysqlHost . ';dbname=' . $dbname, $mysqlUser, $mysqlPass);

$url = explode("/", $_SERVER['REQUEST_URI']);

$page = $url[1];

function getPage($p) {
    if (empty($p)) {
        return 'home.php';
    }
    elseif ($p == 'search') {
        return 'search.php';
    }
    elseif ($p == 'offer') {
        return 'offer.php';
    }
    else {
        return 'notfound.html';
    }
}

include('../src/' . getPage($page));
