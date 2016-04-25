Shop
=============

----------
DESCRIPTION
-------

Mini e-commerce avec catalogue produits, recherche, inscription/connexion, panier, et plus si affinités... :)

----------
CONSEILS
-------

- ``Tous les templates html sont fournis``
- ``Penser à la balise container lors de la découpe``
- ``Penser à réduire les balises dans l'éditeur de texte pour visualiser rapidement les blocs (flèches dans la colonne de gauche sur chaque parent)``
- ``Au besoin commenter les fermetures de balise sur les gros blocs``

----------
CONSIGNES
-------

 1. Faire la découpe des templates HTML
> **CONSEIL** : Pour chaque page, commencer par renommer le .html en .php et déplacer le .html dans un dossier html

 2. Créer et inclure les fichiers config.php / db.php / func.php
> **CONSEIL** : Au besoin reprendre les fichiers d'un projet précédent en veillant à les adapter. Les inclure à un seul endroit central

 3. Gérer la navigation en affichant la page active et afficher l'année courante dans le footer

 4. Créer une base de données ``shop``
	> **CONSEIL** : Penser à l'encodage utf8_general_ci
	Créer une table ``products`` avec les colonnes :
	- id
	- category INT(3) NULL DEFAULT 0
	- name
	- description
	- price DECIMAL(11,2)
	- picture
	- rating DECIMAL(2,1)
	- date

 5. Insérer du contenu dans la table ``products``
	> **CONSEIL** :
	> Pour les images, dans le champ picture, insérer le nom de l'image avec son extension (ex: product.png)
	> Le champ category peut être ignoré ou rempli aléatoirement
	>
	> **BONUS** : Adapter un script *_generator.php pour automatiser l'insertion du contenu

 6. Sur la page d'accueil afficher les 6 produits les plus récents
	> **BONUS** : Afficher 2 produits aléatoires parmi les mieux notés dans la sidebar

 7. Dans les listes de produits (home, search, sidebar...etc) :
	- N'afficher qu'un extrait de la description du produit (c.f. function cutString)
	- Utiliser le bouton ``View`` pour faire un lien vers la page product.php en passant l'identifiant de produit en paramètre

	> **BONUS** : Faire une fonction et/ou un include pour rassembler à un endroit le code HTML des blocs de produits, communs aux différentes pages``

 8. Dans product.php, afficher 1 produit par rapport à son identifiant passé en paramètre
	> **BONUS** : Afficher 3 produits associés dans la sidebar

 9. Dans search.php :
	- Réceptionner et contrôler les données du formulaire de recherche rapide en méthode GET
	- Faire la requête qui va chercher les produits correspondants à la recherche

 10. À partir du template ``form.html`` :
 	- Créer une page ET une table ``contact`` avec les champs/colonnes ``name``, ``email``, ``message``
 	- Réceptionner, contrôler et insérer les données du formulaire de contact en méthode POST

----------
BONUS
-------

 1. Gérer l'affichage du slider sur la page d'accueil
 	> **CONSEIL** : Utiliser la fonction glob(), les images sont situées dans le répertoire ``img/slider/``

 2. Recherche avancée
	> **CONSEIL** :
	> Le champ price renvoie une valeur du type "25:50" correspondant à prix_min:prix_max

 3. Gestion des catégories de produits :
	- Création de table ``product_category`` avec les colonnes ``id`` et  ``name``
	- Insérer quelques catégories, et y rattacher des produits via le champ ``category`` de la table product
	- Afficher la liste des catégories dans la sidebar à gauche
	- Renvoyer chaque catégorie sur le moteur de recherche avancée pour filtrer sur une catégorie de produit

----------
POUR LE FUN :gift:
-------

Adapter la css du site avec les thèmes de couleur fournis