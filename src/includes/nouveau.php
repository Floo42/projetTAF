<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8" />
        <title>Nouvelle offre</title>
        <link rel="stylesheet" href="/css/nouveau.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>

    <body>

        <div class="main_wrapper">
            <a class="btn btn-primary" href="<?= $domain ?>" role="button">Accueil</a>
            <a class="btn btn-primary" href="<?= $domain ?>/administration/" role="button">Retour</a>

            <h1 class="form_title">Nouvelle offre</h1>
            <form method="POST" action="<?= $domain ?>/administration/nouvelle-offre-post">
                <div class="form-group">
                    <label for="title">Titre de l'offre</label>
                    <input type="text" class="form-control" id="title" placeholder="Développeur Symfony" name="title" required>
                </div>
                <div class="form-group">
                    <label for="description">Description de l'offre</label>
                    <small>Format Markdown</small>
                    <textarea class="form-control" id="description" rows="7" name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="course">Formation</label>
                    <select class="form-control" id="course" name="course" required>
                        <option value="">Choisir</option>
                        <option value="informatique">Informatique</option>
                        <option value="business">Business</option>
                        <option value="art">Art</option>
                        <option value="game_design">Game design</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="education_level">Niveau de formation minimum</label>
                    <select class="form-control" id="education_level" name="education_level" required>
                        <option value="">Choisir</option>
                        <option value="1">B1</option>
                        <option value="2">B2</option>
                        <option value="3">B3</option>
                        <option value="4">M1</option>
                        <option value="5">M2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="speciality">Spécialité</label>
                    <select class="form-control" id="speciality" name="speciality" required>
                        <option value="">Choisir</option>
                        <option value="IT">IT</option>
                        <option value="reseaux">Réseaux</option>
                        <option value="spe1">Spé1</option>
                        <option value="spe2">Spé2</option>
                        <option value="spe3">Spé3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contract_type">Type de contrat</label>
                    <select class="form-control" id="contract_type" name="contract_type" required>
                        <option value="">Choisir</option>
                        <option value="stage">Stage</option>
                        <option stage="alternance">Alternance</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>

        </div>

    </body>

</html>