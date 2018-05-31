<?php

$page = $url[2];
if (!isset($page) OR empty($page)) {
    if (!$_SESSION['logged_in']) {
        header('Location:' . $domain . '/administration/connexion');
    } else {
        header('Location: ' . $domain . '/administration/afficher');
    }
}

if ($page == 'connexion') {
    include('includes/connexion.php');
}
elseif ($page == 'afficher' OR empty($page)) {
    include('includes/afficher.php');
}
elseif ($page == 'nouveau') {
    include('includes/nouveau.php');
}
elseif ($page == 'delete-post') {
    include('includes/delete-post.php');
}
elseif ($page == 'nouvelle-offre-post') {
    include('includes/nouvelle-offre-post.php');
}
elseif ($page == 'update-offer') {
    include('includes/update-offer.php');
}
elseif ($page == 'update-offer-post') {
    include('includes/update-offer-post.php');
}
else {
    header('Location: ' . $domain . '/notfound');
}

?>