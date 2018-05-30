<?php

$statement = $db->prepare("SELECT * FROM offers WHERE url = ?");
$statement->execute(array($url[2]));

$data = $statement->fetch();

$Parsedown = new Parsedown();

?>

<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/offer.css">
        <title>Détails de l'offre</title>
    </head>

     <body>
         <section class=details>
             <div class="menu">
                 <a href="<?= $domain; ?>" class="return_link"><i class="fas fa-arrow-left"></i> Découvrez d'autres profils d'étudiants</a>
                 <a href="https://www.ynov.com/" class="logo"><img src="https://brand.ynov.com/img/logos/ynov_campus/logo_ynov_campus_rvb_couleur.png" alt="logo Ynov" /></a>
             </div>
             <?php
                if (isset($url[3]) AND $url[3] == 'success') {
             ?>
                    <h3 class="success">Le mail a bien été envoyé. Vous recevrez une réponse sous peu.</h3>
             <?php
                }
             ?>
             <div class=cat>
                 <div class=title>
                     <h1 class=title>
                         <?= $data['title']; ?>
                     </h1>
                 </div>
             </div>
             <div class=cat>
                 <strong><?= ucfirst($data['contract_type']); ?></strong> •
                 <span class="small">Classes concernées</span>
                 <?php
                    for ($i = $data['education_level']; $i <= 5; $i++) {
                        if ($i == 1) { echo "<span class=\"year\">B1</span> / "; }
                        if ($i == 2) { echo "<span class=\"year\">B2</span> / "; }
                        if ($i == 3) { echo "<span class=\"year\">B3</span> / "; }
                        if ($i == 4) { echo "<span class=\"year\">M1</span> / "; }
                        if ($i == 5) { echo "<span class=\"year\">M2</span>"; }
                    }
                 ?>
                 •
                 Du <strong><?= date("d/m/Y", $data['start']); ?></strong> au <strong><?= date("d/m/Y", $data['end']); ?></strong>
             </div>
             <div class=line></div>
             <div class=cat>
                 <div class=desc>
                     <?= $Parsedown->text($data['description']); ?>
                 </div>
             </div>
         </section>

         <section class=contactform>

             <div class=form>
                 <div class=form-text>Intéressé(e) par ce profil ? Contactez-nous :</div>
                 <form method=POST id=contact action="<?= $domain; ?>/send-mail/<?= $url[2]; ?>">
                     <input class="signup-form" type="text" name="company_name" placeholder="Nom de votre entreprise" required>
                     <input class="signup-form" type="email" name="email" placeholder="Adresse e-mail" required>
                     <div class="message">Bonjour,<br /><br />Je suis intéressé par votre offre "<?= $data['title'] ?>".</div>
                     <textarea class="signup-form message-form" form=contact name="message" placeholder="Présentez brièvement votre entreprise ou posez vos questions à propos de cette offre"></textarea>
                     <div class=button><input class="signup-form submit" type="submit" value="Contacter"></div>
                 </form>
             </div>
         </section>
     </body>

 </html>
