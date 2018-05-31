<?php

echo $url[3];

$statement = $db->prepare('DELETE FROM offers WHERE url = ?');
$statement->execute(array($url[3]));

header('Location: ' . $domain . '/administration');