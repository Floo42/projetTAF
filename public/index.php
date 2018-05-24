<?php

$url = explode("/", $_SERVER['REQUEST_URI']);

$page = $url[1];

function getPage($p) {

    if (empty($p)) {
        return 'home.php';
    }
    elseif ($p == 'search') {
        return 'search.php';
    }
    else {
        return '404.html';
    }

}

include('../src/' . getPage($page));