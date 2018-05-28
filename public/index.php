<?php

/*
function convertToUrl($string) {
    if (!isset($string) or empty($string)) return false;
    $string = mb_strtolower($string);
    $string = str_replace(
        array(
            'à', 'â', 'ä', 'á', 'ã', 'å',
            'î', 'ï', 'ì', 'í',
            'ô', 'ö', 'ò', 'ó', 'õ', 'ø',
            'ù', 'û', 'ü', 'ú',
            'é', 'è', 'ê', 'ë',
            'ç', 'ÿ', 'ñ',
        ),
        array(
            'a', 'a', 'a', 'a', 'a', 'a',
            'i', 'i', 'i', 'i',
            'o', 'o', 'o', 'o', 'o', 'o',
            'u', 'u', 'u', 'u',
            'e', 'e', 'e', 'e',
            'c', 'y', 'n',
        ),
        $string);
    $string = str_replace(' ', '~', $string);
    $string = filter_var($string, FILTER_SANITIZE_EMAIL);
    $forbidden = array('!', '#', '$', '%', '&', '*', '+', '-', '/', '=', '?', '^', '_', '`', '{', '|', '}', '~', '@', '.', '[', ']', '\'', ' ');
    $string = str_replace($forbidden, '-', $string);
    $string = preg_replace('#-+#', '-', $string);
    return trim($string, '-');
}
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
