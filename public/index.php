<?php
session_start();
require_once('../functions.php');
require_once('../vendor/autoload.php');


$jsonContent = file_get_contents('../config.json');
$json = json_decode($jsonContent, true);

$domain = $json['url'];
$mysqlHost = $json['DSN']['host'];
$dbname = $json['DSN']['dbname'];
$mysqlUser = $json['DSN']['username'];
$mysqlPass = $json['DSN']['password'];

$db = new PDO('mysql:host=' . $mysqlHost . ';dbname=' . $dbname, $mysqlUser, $mysqlPass);
$db->query("SET CHARACTER SET utf8");

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
    elseif ($p == 'administration') {
        return 'administration.php';
    }
    elseif ($p == 'send-mail') {
        return 'send_mail.php';
    }
    elseif ($p == 'connexion-admin') {
        return 'connexion_admin.php';
    }
    else {
        return 'notfound.html';
    }
}

include('../src/' . getPage($page));
