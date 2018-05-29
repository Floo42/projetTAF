<?php

require_once('../functions.php');
require_once('../vendor/autoload.php');

/*
$transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')->setUsername('jeankevin69127@gmail.com')->setPassword('QE9tx2q7W43Vq');
$mailer = \Swift_Mailer::newInstance($transport);

$message = \Swift_Message::newInstance('Our Code World Newsletter')
    ->setFrom(array('jeankevin69127@gmail.com' => 'Jean Kev'))
    ->setTo(array("tom.flitterman@hotmail.fr"))
    ->setBody("Salut ça va ??", 'text/html');

$result = $mailer->send($message);
*/


$jsonContent = file_get_contents('../config.json');
$json = json_decode($jsonContent, true);

$domain = $json['url'];
$email = $json['email'];
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
    else if (strpos($p, "admin") === 0) {
        return 'admin.php';
    }
    else {
        return 'notfound.html';
    }
}

include('../src/' . getPage($page));
