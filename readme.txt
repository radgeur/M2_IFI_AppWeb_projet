Commandes pour installer Symfony (3+) sur Linux (marche au M5) :

$ curl -LsS https://symfony.com/installer -o symfony
$ chmod a+x symfony

On a ensuite un fichier symfony à la racine qui nous permet d'utiliser Symfony.
Pour créer notre projet :

$ ./symfony new tvseries


Commande généré BDD avec Doctrine : bin\console doctrine:schema:create