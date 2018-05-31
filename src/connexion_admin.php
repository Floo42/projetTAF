<?php

if (sha1($_POST['pass']) == $json['pass_admin']) {
    $_SESSION['logged_in'] = true;
}

header('Location: ' . $domain . '/administration');