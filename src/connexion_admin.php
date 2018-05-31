<?php

if ($_POST['id'] == $json['id_admin'] AND sha1($_POST['pass']) == $json['pass_admin']) {
    $_SESSION['logged_in'] = true;
}

header('Location: ' . $domain . '/administration');