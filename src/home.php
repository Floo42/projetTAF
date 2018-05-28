<!DOCTYPE html>
<html>
<head>
    <title>Ynov Lyon</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/home.js"></script>
</head>

    <body>
        <h1>Trouvez des stagiaires et des alternants</h1>

        <form action="<?php echo $domain ?>/search" method="POST" class="form">

            <select name="course" class="thematique" id="them">
                <option value="default" selected>Thématique</option>
                <option value="informatique" id="info">Informatique</option>
                <option value="business">Business</option>
            </select>

            <select name="contract" class="contrat">
                <option value="default" selected>Type de contrat</option>
                <option value="stage">Stage</option>
                <option value="alternance">Alternance</option>
            </select>

            <select name="speciality" class="specialite" id="speinfo">
                <option value="default" selected>Spécialité</option>
                <option value="IT">IT</option>
                <option value="reseaux">Réseaux</option>
                <option value="SEO">SEO</option>
            </select>

            <select name="educationLevel" class="nivetude">
                <option value="default" selected>Niveau d'étude</option>
                <option value="1">B1</option>
                <option value="2">B2</option>
                <option value="3">B3</option>
                <option value="4">M1</option>
                <option value="5">M2</option>
            </select>

            <input type="submit" value="Chercher">

        </form>
    </body>
</html>