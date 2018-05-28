<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/search.css">
        <title>Résultats de recherche</title>
    </head>

    <body>


<?php

$course = $_POST['course'];
$contract = $_POST['contract'];
$speciality = $_POST['speciality'];
$educationLevel = $_POST['educationLevel'];

$authorisedCourses = ['informatique', 'business'];
$authorisedContracts = ['stage', 'alternance'];
$authorisedSpeciality = ['IT', 'reseaux', 'SEO'];
$authorisedEducationLevel = [1, 2, 3, 4, 5];


// /!\ vérifier si $thematique est juste /!\

$query = 'SELECT * FROM offers WHERE course = "' . $course . '"';

if (in_array($contract, $authorisedContracts)) {
    $query .= ' AND contract_type = ' . $contract;
}
if (in_array($speciality, $authorisedSpeciality)) {
    $query .= ' AND speciality = ' . $speciality;
}
if (in_array($educationLevel, $authorisedEducationLevel)) {
    $query .= ' AND education_level >= ' . $educationLevel;
}

$statement = $db->prepare($query);
$statement->execute();

var_dump($statement);

while ($data = $statement->fetch()) {
    ?>

        <div class="search_result">
            <h2 class="result_title"><?= utf8_encode($data['title']); ?></h2>
            <p class="result_description"><?= utf8_encode($data['description']); ?></p>
            <a href="#" class="result_link">En savoir plus</a>
        </div>

    <?php
}
?>

    </body>
</html>
