<?php

# Importation de notre classe Ecole
require_once 'Models/Ecole.php';

/**
 * Création d'une instance de la classe Ecole.
 * Notre variable $ecole devient un objet de cette classe.
 * L'objet à accès à l'ensemble des propriétés et méthodes qui la compose.
 */
# $ecole = new Ecole();
# $ecole->nom = "Webforce3 Lille";
# $ecole->nbMax = "13";
# $ecole->directeur = "Martine";
# $ecole->adresse = "105 Avenue de la République, La Madeleine 59110 Lille";

# $ecole2 = new Ecole();
# $ecole2->nom = "Webforce3 Paris";

# echo '<pre>';
# print_r( $ecole );
# print_r( $ecole2 );
# echo '</pre>';

# Exemple avec le constructeur
# $ecole = new Ecole('WF3 Lille', '105 Avenue de la République');
# $ecole2 = new Ecole('WF3 Paris', 'Paris 4');

# Exemple avec les (fluent) setters
$ecole = new Ecole();
$ecole2 = new Ecole();

$ecole->setNom('Webforce3 Lille')       
      ->setNbMax('13')
      ->setAdresse('105 Avenue de la République')
      ->setDirecteur('Martine')
;

echo '<pre>';
print_r( $ecole );
print_r( $ecole2 );
echo '</pre>';

# Fermeture de la balise PHP. ?>

<!-- Retour au HTML -->
<h1><?php echo $ecole->getNom(); ?></h1>

<?php

# -- Retour dans PHP

/* --
    CONSIGNE : 
    -------------------------------------
    1. En vous appuyant sur notre travail
    avec la classe Ecole ; créez maintenant les
    classes "Classe" et "Eleve" dans des fichiers
    séparés. Classe.php et Eleve.php : Propriétés,
    Constructeur, Getters & Setters.
    -------------------------------------
    2. Créez 4 Eleves
    3. Créez 3 Classe

    BONUS I : Vous devez affecter des élèves aux
    classes, et des classes aux écoles.

    BONUS II : En partant de l'objet $ecole ;
    affichez la liste ol, ul, li des classes et 
    pour chaque classe les étudiants.

-- */
