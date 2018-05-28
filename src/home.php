<html lang = fr>
<head>
    <title>Ynov Lyon</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/home.css">
    <script src="js/home.js"></script>
</head>

    <body>
    <h1>Trouvez des stagiaires<br> et des alternants</h1>
        <form action="<?php echo $domain ?>/search" method="POST" class="form">
            <select name="thematique" class="thematique" id="them">
                <option value="default" selected>Thématique</option>
                <option value="informatique" id="info">Informatique</option>
                <option value="business">Business</option>
                <option value="arts">Arts</option>
                <option value="gamed">Game design</option>
            </select>
            <select name="contrat" class="contrat">
        <option value="default" selected>Type de contrat</option>
        <option value="stage">Stage</option>
        <option value="alternance">Alternance</option>
        </select>
            <select name="specialite" class="specialite" id="speinfo">
                <option value="default" selected>Spécialité</option>
                <option value="it">IT</option>
                <option value="merde">Réseaux</option>
            </select>


            <select> name="nivetude" class="nivetude">
                <option value="default" selected>Niveau d'étude</option>
                <option value="biun">B1</option>
                <option value="bideux">B2</option>
                <option value="bitrois">B3</option>
                <option value="miun">M1</option>
                <option value="mideux">M2</option>
            </select>
</form>
</body>
</html>

