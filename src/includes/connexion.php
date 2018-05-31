<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Espace administration</title>
        <link rel="stylesheet" href="/css/connexion.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>

    <body>

        <form method="post" action="<?= $domain ?>/connexion-admin">
            <h1>Connexion à l'espace administration</h1>
            <div class="form-group">
                <label for="exampleInputPassword1">Identifiant</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Identifiant" name="id" />
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" name="pass" />
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>

    </body>
</html>