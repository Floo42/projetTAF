<?php
$statement = $db->prepare('SELECT * FROM offers WHERE url = ?');
$statement->execute(array($url[3]));
$data = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Modifier une offre</title>
    <link rel="stylesheet" href="/css/nouveau.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>

<body>

<div class="main_wrapper">
    <a class="btn btn-primary" href="<?= $domain ?>" role="button">Accueil</a>
    <a class="btn btn-primary" href="<?= $domain ?>/administration/" role="button">Retour</a>

    <h1 class="form_title">Nouvelle offre</h1>
    <form method="POST" action="<?= $domain ?>/administration/update-offer-post/<?= $url[3] ?>">
        <div class="form-group">
            <label for="title">Titre de l'offre</label>
            <input type="text" class="form-control" id="title" placeholder="Développeur Symfony" name="title" value="<?= $data['title']; ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description de l'offre</label>
            <small>Format Markdown</small>
            <textarea class="form-control" id="description" rows="7" name="description" required><?= $data['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="course">Formation</label>
            <select class="form-control" id="course" name="course" required>
                <option value="">Choisir</option>
                <option value="informatique" <?= $data['course'] == 'informatique' ? 'selected' : '' ?>>Informatique</option>
                <option value="business" <?= $data['course'] == 'business' ? 'selected' : '' ?>>Business</option>
                <option value="art" <?= $data['course'] == 'art' ? 'selected' : '' ?>>Art</option>
                <option value="game_design" <?= $data['course'] == 'game_design' ? 'selected' : '' ?>>Game design</option>
            </select>
        </div>
        <div class="form-group">
            <label for="education_level">Niveau de formation minimum</label>
            <select class="form-control" id="education_level" name="education_level" required>
                <option value="">Choisir</option>
                <option value="1" <?= $data['education_level'] == '1' ? 'selected' : '' ?>>B1</option>
                <option value="2" <?= $data['education_level'] == '2' ? 'selected' : '' ?>>B2</option>
                <option value="3" <?= $data['education_level'] == '3' ? 'selected' : '' ?>>B3</option>
                <option value="4" <?= $data['education_level'] == '4' ? 'selected' : '' ?>>M1</option>
                <option value="5" <?= $data['education_level'] == '5' ? 'selected' : '' ?>>M2</option>
            </select>
        </div>
        <div class="form-group">
            <label for="speciality">Spécialité</label>
            <select class="form-control" id="speciality" name="speciality" required>
                <option value="">Choisir</option>
                <option value="IT" <?= $data['speciality'] == 'IT' ? 'selected' : '' ?>>IT</option>
                <option value="reseaux" <?= $data['speciality'] == 'reseaux' ? 'selected' : '' ?>>Réseaux</option>
                <option value="spe1" <?= $data['speciality'] == 'spe1' ? 'selected' : '' ?>>Spé1</option>
                <option value="spe2" <?= $data['speciality'] == 'spe2' ? 'selected' : '' ?>>Spé2</option>
                <option value="spe3" <?= $data['speciality'] == 'spe3' ? 'selected' : '' ?>>Spé3</option>
            </select>
        </div>
        <div class="form-group">
            <label for="contract_type">Type de contrat</label>
            <select class="form-control" id="contract_type" name="contract_type" required>
                <option value="">Choisir</option>
                <option value="stage" <?= $data['contract_type'] == 'stage' ? 'selected' : '' ?>>Stage</option>
                <option value="alternance" <?= $data['contract_type'] == 'alternance' ? 'selected' : '' ?>>Alternance</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

</div>

</body>

</html>