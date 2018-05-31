# projetTAF

# Fichier de configuration

Les différentes configurations possibles se trouvent dans le fichier *config.json*

# Configuration mail

*"mail_server": {

  "host": "smtp.gmail.com",* a changer en fonction du service mail utilisé (ici gmail)

  *"port": "465",* le port a changer si besoin

  *"security": "ssl",* sécurisation via ssl

  *"username":* l'adresse du compte expediteur

  *"password":* le mot de passe du compte expediteur

  *"receiver":* l'adresse du receveur

*},*


# Configuration base de données

*"DSN": {

  "host":* adresse de la base

  *"dbname":* nom de la base

  *"username":* nom d'utilisateur de la base

  *"password":* mot de passe de la base

*}*

# Composer

Dans le dossier du projet, entrez la commande *composer install*


# Base de données

Importer dans une base "ynov-taf" (ou bien changer le nom de votre base dans *config.json*) le fichier *database.sql*
