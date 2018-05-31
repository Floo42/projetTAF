<?php


$contract_type = $_POST['contract_type'];
$description = $_POST['description'];
$title = $_POST['title'];
$course = $_POST['course'];
$education_level = $_POST['education_level'];
$speciality = $_POST['speciality'];
$url = convertToUrl($_POST['title']) . '-' . uniqid();



$statement = $db->prepare("INSERT INTO offers (contract_type, description, title, course, end, start, education_level, speciality, url) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
#$statement->bindParam(':contract_type', $contract_type);
#$statement->bindParam(':description', $description);
#$statement->bindParam(':title', $title);
#$statement->bindParam(':course', $course);
#$statement->bindParam(':education_level', $education_level);
#$statement->bindParam(':speciality', $speciality);
#$statement->bindParam(':url', $url);

$statement->execute(array($contract_type, $description, $title, $course, time(), time()+7000000, $education_level, $speciality, $url));


header('Location: ' . $domain . '/administration');
