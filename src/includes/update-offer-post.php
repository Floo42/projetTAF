<?php

echo $url[3];

$statement = $db->prepare('UPDATE offers SET title = ?, description = ?, course = ?, education_level = ?, speciality = ?, contract_type = ?');
$statement->execute(array($_POST['title'], $_POST['description'], $_POST['course'], $_POST['education_level'], $_POST['speciality'], $_POST['contract_type']));

header('Location: ' . $domain . '/administration');