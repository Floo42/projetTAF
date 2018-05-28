<?php

function getData(){

    $jsonContent = file_get_contents('../config.json');
    $json = json_decode($jsonContent, true);

    $domain = $json['url'];
    $email = $json['email'];
    $mysqlHost = $json['DSN']['host'];
    $dbname = $json['DSN']['dbname'];
    $mysqlUser = $json['DSN']['username'];
    $mysqlPass = $json['DSN']['password'];

#$db = new PDO('mysql:host=' . $mysqlHost . ';dbname=' . $dbname, $mysqlUser, $mysqlPass, array('charset'=>'utf8'));
#$db->query("SET CHARACTER SET utf8");
$statement = $db->prepare("SELECT * FROM offers WHERE url = ?");
$statement->execute();
return $offres = $statement->fetchAll();
}

?>
