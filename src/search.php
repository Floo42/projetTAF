<?php

$course = $_POST['course'];
$contract = $_POST['contract'];
$speciality = $_POST['speciality'];
$educationLevel = $_POST['educationLevel'];

$authorisedCourses = ['informatique', 'business', 'arts', 'gamed'];
$authorisedContracts = ['stage', 'alternance'];
$authorisedSpeciality = ['IT', 'reseaux', 'SEO'];
$authorisedEducationLevel = [1, 2, 3, 4, 5];


// /!\ vérifier si $thematique est juste /!\

$query = 'SELECT * FROM offers WHERE course = "' . $course . '"';

if (in_array($contract, $authorisedContracts)) {
    $query .= ' AND contract_type = "' . $contract .'"';
}
if (in_array($speciality, $authorisedSpeciality)) {
    $query .= ' AND speciality = "' . $speciality . '"';
}
if (in_array($educationLevel, $authorisedEducationLevel)) {
    $query .= ' AND education_level >= ' . $educationLevel;
}

$statement = $db->prepare($query);
$statement->execute();

$Parsedown = new Parsedown();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="/css/search.css">
        <title>Résultats de recherche</title>
    </head>

    <body>

                <section class=details>
                    <div class="menu">
                        <a href="https://www.ynov.com/" class="logo"><img src="https://brand.ynov.com/img/logos/ynov_campus/logo_ynov_campus_rvb_couleur.png" alt="logo Ynov" /></a>
                    </div>
                    
        <div class="main_wrapper">
            <a class="new" href="<?= $domain; ?>">Effecuter une nouvelle recherche</a>
            <h1>Résultats de recherche :</h1>
            <div class="results_wrapper">
                <?php
                    while ($data = $statement->fetch()) {
                ?>

                        <div class="search_result">
                            <a href="<?= $domain . '/offer/' . $data['url']; ?>" class="result_link" target="_blank"><h2 class="result_title"><?= $data['title']; ?></h2></a>
                            <p class="result_description"><?= strip_tags(truncateString($Parsedown->text($data['description']), 200)); ?></p>
                        </div>

                <?php
                    }
                ?>
            </div>
        </div>

    </body>
</html>
