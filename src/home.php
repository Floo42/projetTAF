<html lang = fr>
<head>
    <title>Ynov Lyon</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/home.css">
</head>

    <body>
        <form action="<?php echo $domain ?>/search" method="POST">
            <select name="thematique">
                <option value="default" selected>Thématique</option>
                <option value="informatique">Informatique</option>
                <option value="business">Business</option>
            </select>
            <select name="contrat">
        <option value="default" selected>Type de contrat</option>
        <option value="stage">Stage</option>
        <option value="alternance">Alternance</option>
        </select>
</form>
</body>
</html>

