<?php


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

<section class="add-offer">
    <div>
<div class=add-title>Ajouter une nouvelle offre :</div>
</div>

<form class="form" id="add">
    <select class=form-input name="contract" class="contrat">
        <option value="default" selected>Type de contrat</option>
        <option value="stage">Stage</option>
        <option value="alternance">Alternance</option>
    </select>

    <input class=form-input type=text placeholder="Titre de l'offre">
    <textarea class="form-input textarea"form="add" placeholder="Description"></textarea>

    <select class="form-input" name="educationLevel" class="nivetude">
        <option value="default" selected>Niveau d'étude</option>
        <option value="1">1ère année</option>
        <option value="2">2ème année</option>
        <option value="3">3ème année</option>
        <option value="4">4ème année</option>
        <option value="5">5ème année</option>
    </select>



</form>

</section>


<section class="gestion">
    <div>
    Gestion des offres actives :
</div>
</section>

 </body>

 </html>
