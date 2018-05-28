<?php

$statement = $db->prepare("SELECT * FROM offers WHERE url = ?");
$statement->execute(array($url[2]));

$data = $statement->fetch();

?>


<!DOCTYPE html>
<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
     <link rel="stylesheet" href="/css/offer.css">
     <title>Détails de l'offre</title>
</head>

 <body>
     <section class=details>
         <div class=cat>
             <div class=title>
                 Voici les détails de l'offre :
                 <h1 class=title>
                     <?= $data['title']; ?>
                 </h1>
             </div>
         </div>
         <div class=line></div>
         <div class=cat>
             <div class=type>
                 Type de contrat :
                 <?= $data['contract_type']; ?>
             </div>
         </div>
         <div class=line></div>
         <div class=cat>
             <div class=level>
                 Niveau d'études :
                 <?= $data['education_level']; ?>
             </div>
         </div>
         <div class=line></div>
         <div class=cat>
             <div class=desc>
                 Description du profil :
                 <?= $data['description']; ?>
             </div>
         </div>
         <div class=line></div>
         <div class=cat>
             <div class=period>
                 Durée :
                 #($offres['period'])
             </div>
         </div>
     </section>

     <section class=contactform>

         <div class=form>
             <div class=form-text>Intéressé(e) par cette offre ? Contactez-nous :</div>
             <form method=POST id=contact>
                 <input class="signup-form" type="text" name="name" placeholder="Nom de votre entreprise">
                 <input class="signup-form" type="email" name="email" placeholder="Adresse e-mail">
                 <textarea class="signup-form message-form" form=contact name="name" placeholder="Votre message"><?= email($data['title']); ?></textarea>
                 <div class=button><input class="signup-form submit" type="submit" value="Contacter"></div>
             </form>
         </div>
     </section>
 </body>

 </html>
