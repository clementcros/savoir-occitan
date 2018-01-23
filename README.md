# savoir-occitan
projet de colaboration


##routes :

/ -> accueil du site 

/index.php/search -> module de recherche asyncrone de la liste des villes disponible

/index.php/$id -> correspond a l'id de la ville selectionné affiche les éléments associer (SQL)
Si l'id de la ville ne propose pas de produits alors le controller vas redirigé vers la page nothing.php


/index.php/product_$id -> correspond au descriptif d'un produit 


## Foncitonnement logique

### traitement SQL :
    
les données ne seront uniquement lue par le visiteur dans un premier temps puis a terme pouront interargir avec un produit
pour le commenter.

### Controller + Model

Chaque controllers disposent de sont propre Model pour la récupération et le traitement des données
