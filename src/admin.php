<?php
if(isset($_GET['delete_id']) && $_GET['delete_id']!= null){
$statement = $db->prepare("
    DELETE FROM offers WHERE id=".$_GET['delete_id'].";
");
$statement->execute();
unset($_GET['delete_id']);
}

if(isset($_GET['edit_id']) && $_GET['edit_id']!= null){
$statement = $db->prepare("
    SELECT * FROM offers WHERE id=".$_GET['edit_id'].";
");
$statement->execute();
$values = $statement->fetch();
}

if(isset($_POST['title']) && $_POST['title']!= null){

$statement = $db->prepare("
INSERT INTO offers (id, title, description, education_level, contract_type, course, start, end, speciality, url)
VALUES
        (:id, :title, :description, :education_level, :contract_type, :course, :start, :end, :speciality, :url)
        ;
");
$statement->bindValue(':id', null);
$statement->bindValue(':title', $_POST['title']);
$statement->bindValue(':description', $_POST['description']);
$statement->bindValue(':education_level', $_POST['educationLevel']);
$statement->bindValue(':contract_type', $_POST['contract']);
$statement->bindValue(':course', $_POST['course']);
$statement->bindValue(':start', 0);
$statement->bindValue(':end',0);
$statement->bindValue(':speciality', "dfdf");
$statement->bindValue(':url', "yolo");
$statement->execute();
header("Refresh:0");
}

if(isset($_POST['title-edit']) && $_POST['title-edit']!= null){
$statement = $db->prepare("
UPDATE offers
SET title=:title, description = :description WHERE id=".$_GET['edit_id'].";
        ;
");
$statement->bindValue(':description', $_POST['description-edit']);
$statement->bindValue(':title', $_POST['title-edit']);
$statement->execute();
unset($_GET['edit_id']);
header("admin:0");

}
?>
<!DOCTYPE html>
<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
     <link rel="stylesheet" href="css/admin.css">
     <title>Administration</title>
</head>

<body>

<h1>Espace Administration</h1>

<section class="add-offer">
    <div class="title">
<div class=add-title>Ajouter une nouvelle offre :</div>
</div>

<form method="POST" class="form" id="add">
    <select class=form-input name="contract" class="contrat">
        <option value="default" selected>Type de contrat</option>
        <option value="stage">Stage</option>
        <option value="alternance">Alternance</option>
    </select>

    <input name="title" class=form-input type=text placeholder="Titre de l'offre">
    <textarea name="description" class="form-input textarea"form="add" placeholder="Description"></textarea>

    <select class="form-input" name="educationLevel" class="nivetude">
        <option value="default" selected>Niveau d'étude</option>
        <option value="1">1ère année</option>
        <option value="2">2ème année</option>
        <option value="3">3ème année</option>
        <option value="4">4ème année</option>
        <option value="5">5ème année</option>
    </select>

    <select name="course" class="form-input" id="them">
        <option value="default" selected>Thématique</option>
        <option value="informatique" id="info">Informatique</option>
        <option value="business">Business</option>
        <option value="arts">Arts</option>
        <option value="gamed">Game design</option>
    </select>

<input class="form-input" type="submit" value="Envoyer le formulaire">

</form>

</section>

<?php
if(isset($values['title'])){
    $title=$values['title'];
}



if(isset($_GET['edit_id'])){
    print("
<section class=\"add-offer\" ID=\"edit\">
    <div class=\"title\">Modifier une offre :</div>

    <form method=\"POST\" class=\"form\" id=\"edit\">

        <input name=\"title-edit\" class=form-input type=text placeholder=\"Titre de l'offre\" ". "value=" . $title .">
        <textarea name=\"description-edit\" class=\"form-input textarea\" placeholder=\"Description\">".$values['description'] ."</textarea>

    <input class=\"form-input\" type=\"submit\" value=\"Modifier l'offre\">

</form>

</section>
");
}

?>

<section class="gestion">
    <div class="title">
    Gestion des offres actives :
</div>
<?php

$statement = $db->prepare("SELECT * FROM offers");
$statement->execute();

$data = $statement->fetchAll();
    print("<div class=\"offer-container\">");
for($i = 0;$i<count($data);$i++){
    print("
    <div class=\"offer\">
<a href=?edit_id=". $data[$i]['id']."><button class=\"offer-button\" type=\"button\">Modifier</button></a>
<a href=?delete_id=". $data[$i]['id']."><button class=\"offer-button\" type=\"button\">Supprimer</button></a>
        <div class=\"offer-title\">Titre : ".
            $data[$i]["title"]."
        </div>
        <div class=\"offer-type\">Type : ".
            $data[$i]["contract_type"]."
        </div>

        <div class=\"offer-desc\"> Description : ".
            substr($data[$i]["description"],0,100)."...
        </div>
        <div class=\"offer-level\">Niveau : ".
            $data[$i]["education_level"]."
        </div>
    </div>
    ");

}
    print("</div>");
?>
</section>


 </body>

 </html>
