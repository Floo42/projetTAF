<html lang = fr>
<head>
    <title>Ynov Lyon</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/home.js"></script>
</head>

    <body>
    <h1>Trouvez des stagiaires et des alternants</h1>
        <form action="<?php echo $domain ?>/search" method="POST" class="form">
            <select name="thematique" class="thematique" id="them">
                <option value="default" selected>Thématique</option>
                <option value="informatique" id="info">Informatique</option>
                <option value="business">Business</option>
            </select>
            <select name="contrat" class="contrat">
        <option value="default" selected>Type de contrat</option>
        <option value="stage">Stage</option>
        <option value="alternance">Alternance</option>
        </select>
            <select name="specialite" class="specialite" id="speinfo">
                <option value="default" selected>Spécialité</option>
                <option value="stage">IT</option>
                <option value="alternance">Réseaux</option>
            </select>
            <select name="nivetude" class="nivetude">
                <option value="default" selected>Niveau d'étude</option>
                <option value="bun">B1</option>
                <option value="bdeux">B2</option>
            </select>
</form>
</body>
</html>

