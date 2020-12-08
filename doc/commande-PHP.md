# Les commandes PHP et Composer à connaître Cheat Sheet

```bash

########################
# Les commandes de PHP #
########################

# Permet de savoir où se trouvent les fichiers INI (confi­gur­ations de PHP)
php --ini

# Permet d'afficher le résultat de phpinfo()
php -i

# Permet de lancer le serveur interne sur le <ho­st> et le <po­rt>
php -S <ho­st>­:<p­ort>


# Permet de lancer le serveur interne en précisant le dossier racine de l'appl­ication
php -S <ho­st>­:<p­ost> -t <do­ssi­er>



#########################################
# Les commandes princi­pales de Composer #
#########################################

# Permet de lister toutes les commandes de Composer avec une descri­ption
composer list

# Permet d'init­ialiser Composer en créant un fichier compos­er.json dans le dossier actuel
composer init

# Permet d'init­ialiser Composer en passant toutes les questions
composer init -n

# Permet d'inst­aller un package composer dans le dossier courant
composer require <au­tho­r>/­<pa­cka­ge>

# Permet d'inst­aller un package composer qui ne sera utile que lors du dévelo­ppement
composer require <au­tho­r>/­<pa­cka­ge> --dev

#Permet de supprimer un package composer
composer remove <au­tho­r>/­<pa­cka­ge>

# Permet de mettre à jour toutes les dépend­ances du projet
composer update

# Permet de regénérer le fichier vendor­/au­tol­oad.php
composer dump-a­utoload

# Permet d'inst­aller tous les packages d'un projet à partir du fichier compos­er.json
composer install

```
