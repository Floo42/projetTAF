<?php

$statement = $db->prepare("
SELECT * FROM offers ORDER BY id DESC LIMIT 3
");
$statement->execute();
$data = $statement->fetchAll();
$Parsedown = new Parsedown();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Ynov Lyon</title>
    <link rel="stylesheet" href="/css/homes.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="js/home.js"></script>
    <style type="text/css" media="screen" title="Style1">
         select{
            font-size: 2.5em;
        }
        input{
            padding: 1em;
            margin-left: 2em;
            margin-right: 2em;
            border-radius: 1.5em;
        }
         h1{
             font-size: 4.5em;
             margin-left: 2em;
             color: #23b2a4;
         }
    </style>
</head>

    <body>

        <section class=details>
            <div class="menu">
                <a href="https://www.ynov.com/" class="logo"><img src="https://brand.ynov.com/img/logos/ynov_campus/logo_ynov_campus_rvb_couleur.png" alt="logo Ynov" /></a>
            </div>

    <div class="main">
    <h1 class="title">Trouvez des stagiaires<br> et des alternants</h1>

<div class="form-container">
        <form action="<?php echo $domain ?>/search" method="POST" class="form" id="form_un">
            <div class="container-fluid">
            <div class="row my-5">
                <div class="col-3"></div>
                <div class="col-2 my-2">
            <select name="course"  id="them">
                <option value="default" selected>Thématique</option>
                <option value="informatique" id="info">Informatique</option>
                <option value="business" id="market">Business</option>
                <option value="arts" id="arts">Arts</option>
                <option value="gamed" id="gamed">Game design</option>
            </select>
                </div>
                <div class="col-1"></div>
                <div class="col-2 my-2">
                <select name="educationLevel">
                    <option value="default" selected>Niveau d'étude</option>
                    <option value="1">B1</option>
                    <option value="2">B2</option>
                    <option value="3">B3</option>
                    <option value="4">M1</option>
                    <option value="5">M2</option>
                </select>

            </div>
            </div>
            <div class="row my-3">
                <div class="col-3"></div>
                <div class="col-2">
            <select name="contract" class="contrat">
                <option value="default" selected>Type de contrat</option>
                <option value="stage">Stage</option>
                <option value="alternance">Alternance</option>
            </select>
            </div>
                <div class="col-1"></div>
                <div class="col-2">
             <select name="speciality" id="disable" disabled>
                 <option value="default" selected>Spécialité</option>

             </select>
            <select name="speciality" id="speinfo" class="specialite">
                <option value="default" selected>Spécialité</option>
                <option value="it">IT</option>
                <option value="merde">Réseaux</option>
            </select>

            <select name="speciality" id="spemarket" class="specialite">
                <option value="default" selected>Spécialité</option>
                <option value="speun">Spé 1</option>
                <option value="spedeux">Spé 2 </option>
            </select>

            <select name="speciality" id="spearts" class="specialite">
                <option value="default" selected>Spécialité</option>
                <option value="speun">Spé 1</option>
                <option value="spedeux">Spé 2 </option>
            </select>

            <select name="speciality" class="specialite" id="spegamed" class="specialite">
                <option value="default" selected>Spécialité</option>
                <option value="speun">Spé 1</option>
                <option value="spedeux">Spé 2 </option>
            </select>
                </div>
            </div>
                <div class="row p-4">
                <div class="col-5"></div>
                <div class="col-2">
            <input class="submit-button" type="submit" value="Rechercher">
                </div>
                </div>
            </div>
        </form>
</div>
    </div>

<div>
    <h2 class="offers">Découvrez nos dernières offres :</h2>
    <?php
    $number=0;
    print("
                <div class=\"results_wrapper\">
    ");
    $total = count($data);
    if($total>3){
        $loopNumber =3;
    }
    else{
        $loopNumber=$total;
    }
    for($i =0; $i<$loopNumber;$i++){
        if($data[$number]['title']!= null){
    print("
               <div class=\"search_result\">
                <a href=". $domain . '/offer/' . $data[$number]['url'] . " class=\"result_link\" target=\"_blank\"><h2 class=\"result_title\">". $data[$number]['title'] ."</h2></a>
                <p class=\"result_description\">". strip_tags(truncateString($Parsedown->text($data[$number]['description']), 200))."</p>
            </div>
            ");
                $number++;
        }
    }
        print("
    </div>
        ");

    ?>
</div>

    </body>
</html>
