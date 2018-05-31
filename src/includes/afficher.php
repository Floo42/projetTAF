<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="/css/afficher.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <title>Administration</title>
    </head>

    <body>
        <a class="btn btn-primary" href="<?= $domain ?>" role="button">Accueil</a>
        <a class="btn btn-primary" href="<?= $domain ?>/administration/nouveau" role="button">Nouvelle offre</a>

        <div class="offers_list">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nom offre</th>
                        <th scope="col">Formation</th>
                        <th scope="col">Contrat</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $statement = $db->prepare('SELECT * FROM offers');
                        $statement->execute();

                        while ($data = $statement->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                            <tr>
                                <td><?= $data['title']; ?></td>
                                <td><?= ucfirst($data['course']); ?></td>
                                <td><?= ucfirst($data['contract_type']); ?></td>
                                <td><a href="<?= $domain ?>/administration/update-offer/<?= $data['url']; ?>" class="badge badge-secondary">Modifier</a></td>
                                <td><a href="<?= $domain ?>/administration/delete-post/<?= $data['url']; ?>" class="badge badge-danger">Supprimer</a></td>
                            </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>

</html>
