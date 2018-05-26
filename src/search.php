<?php
var_dump($_POST);
$course = $_POST['thematique'];
$contract = $_POST['contrat'];
$speciality = $_POST['speciality'];

$authorisedCourses = ['informatique', 'business'];
$authorisedContracts = ['stage', 'alternance'];
$authorisedSpeciality = ['webdev'];


// /!\ vérifier si $thematique est juste

$query = 'SELECT * FROM offers WHERE course = ' . $course;

if (in_array($contract, $authorisedContracts)) {
    $query .= ' AND contract_type = ' . $contract;
}
if (in_array()) {
    //
}
?>