<?php

$url = explode("/", $_SERVER['REQUEST_URI']);


$jsonContent = file_get_contents('../config.json');
$json = json_decode($jsonContent, true);

$host = $json['DSN']['host'];
$dbname = $json['DSN']['dbname'];
$username = $json['DSN']['username'];
$password = $json['DSN']['password'];
$domain = $json['url'];

$db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);
$db->query("SET CHARACTER SET utf8");

$statement = $db->prepare("SELECT title FROM offers WHERE url = ?");
$statement->execute([$url[2]]);
$data = $statement->fetch(PDO::FETCH_ASSOC);


$companyName = $_POST['company_name'];
$email = $_POST['email'];
$message = $_POST['message'];


$title = $data['title'];
$subject = 'Quelqu\'un est intéressé par l\'offre "' . $title . '"';
$body ='Quelqu\'un est intéressé par l\'offre  "<a href="' . $domain . '/offer/' . $url[2] . '">' . $title . '</a>".<br />
Entreprise : ' . $companyName . '<br />
Adresse email : ' . $email . '
<br />
---------------------------------------
<br />
' . $message;



$host = $json['mail_server']['host'];
$port = $json['mail_server']['port'];
$security = $json['mail_server']['security'];
$username = $json['mail_server']['username'];
$password = $json['mail_server']['password'];
$receiver = $json['mail_server']['receiver'];


require_once "../vendor/autoload.php";

$transport = \Swift_SmtpTransport::newInstance($host, $port,$security)->setUsername($username)->setPassword($password);
$mailer = \Swift_Mailer::newInstance($transport);

$message = \Swift_Message::newInstance($subject)
    ->setFrom(array($email => $companyName))
    ->setTo(array($receiver))
    ->setBody($body, 'text/html');

$result = $mailer->send($message);

header('Location: ' . $domain . '/offer/' . $url[2] . '/success');

?>