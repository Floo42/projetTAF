# projetTAF

-> Pour en savoir plus sur [le design](https://github.com/Floo42/projetTAF/blob/master/design.md)

# Fichier de configuration

Les données de configurations se trouvent dans le fichier *config.json*

# Configuration mail

```json
"mail_server": {
    "host": "smtp.gmail.com",
    "port": "465",
    "security": "ssl",
    "username": "jeankevin69127@gmail.com",
    "password": "QE9tx2q7W43Vq",
    "receiver": "thomas.flitterman@ynov.com"
  }
```
Lors de la mise en ligne du site, les données de configuration du serveur mail changeront probablement. Il suffira donc de préciser les nouveaux identifiants dans le JSON

# Configuration base de données

Les identifiants de connexion à la base de donnée en local sont les suivants :
```json
"DSN": {
    "host": "localhost",
    "dbname": "ynov-taf",
    "username": "root",
    "password": "root"
  }
```
La base de donnée au format SQL se trouve dans ce dépôt Git.

# Composer

Entrer la commande `composer install` dans ce dossier pour installer toutes les dépendances (Swiftmailer et Parsdown)


# Base de données

Importer dans une base "ynov-taf" (ou bien changer le nom de votre base dans *config.json*) le fichier *database.sql*
