# savoir-occitan
projet de colaboration

#Listes des bugs :

- grocerycrud n'upload pas les images
- les chemins relatifs doivent être dynamiques


#configuration :

## config
pour faire fonctionner en local le projet in faut paramètrer plusieur fichier 
- database.php

Renseignner les différents paramètre lié a votre bdd en local

- Config.php

$config['base_url'] = 'la route de votre virtual host';
 

    

##routes :

/ -> accueil du site 

/index.php/search -> module de recherche asyncrone de la liste des villes disponible

/index.php/$id -> correspond a l'id de la ville selectionné affiche les éléments associer (SQL)
Si l'id de la ville ne propose pas de produits alors le controller vas redirigé vers la page nothing.php


/index.php/product_$id -> correspond au descriptif d'un produit 

toutes les routes sont disponible dans le fichier config/routes.php

## Foncitonnement logique

### traitement SQL :
    
les données ne seront uniquement lue par le visiteur dans un premier temps puis a terme pouront interargir avec un produit
pour le commenter.

### Controller + Model

Chaque controllers disposent de sont propre Model pour la récupération et le traitement des données

## Gestion du contenue 

### CRUD Admin :

Le module grocery crud a été intégrer pour facilité la gestion du contenue de la base de données, Ce dernier servira au producteurs pour pouvroir
 mettrent a jour facilement le contenue tous comme générer facilement un accés super-admin pour modérer le contenus.
