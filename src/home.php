<!DOCTYPE html>
<html>
<head>
    <title>Ynov Lyon</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/home.css">
    <script src="js/home.js"></script>
</head>

    <body>
        <nav></nav>
    <h1 id="hhome">Trouvez des stagiaires<br> et des alternants</h1>


        <form action="<?php echo $domain ?>/search" method="POST" class="form" id="form_un">
            <div class="flex_deux">
            <div class="flex_un">
            <select name="course" class="thematique" id="them">
                <option value="default" selected>Thématique</option>
                <option value="informatique" id="info">Informatique</option>
                <option value="business" id="market">Business</option>
                <option value="arts" id="arts">Arts</option>
                <option value="gamed" id="gamed">Game design</option>
            </select>



            <select name="contract" class="contrat">
                <option value="default" selected>Type de contrat</option>
                <option value="stage">Stage</option>
                <option value="alternance">Alternance</option>
            </select>
            </div>
            <div class="flex_un">

                <select name="educationLevel" class="nivetude">
                    <option value="default" selected>Niveau d'étude</option>
                    <option value="1">B1</option>
                    <option value="2">B2</option>
                    <option value="3">B3</option>
                    <option value="4">M1</option>
                    <option value="5">M2</option>
                </select>

            <select name="speciality" class="specialite" id="speinfo">
                <option value="default" selected>Spécialité</option>
                <option value="it">IT</option>
                <option value="merde">Réseaux</option>
            </select>

            <select name="speciality" class="specialite" id="spemarket">
                <option value="default" selected>Spécialité</option>
                <option value="speun">Spé 1</option>
                <option value="spedeux">Spé 2 </option>
            </select>

            <select name="speciality" class="specialite" id="spearts">
                <option value="default" selected>Spécialité</option>
                <option value="speun">Spé 1</option>
                <option value="spedeux">Spé 2 </option>
            </select>

            <select name="speciality" class="specialite" id="spegamed">
                <option value="default" selected>Spécialité</option>
                <option value="speun">Spé 1</option>
                <option value="spedeux">Spé 2 </option>
            </select>
            </div>
            </div>
            <input type="submit" value="Chercher" id="btn_un">

        </form>
    </body>
</html>