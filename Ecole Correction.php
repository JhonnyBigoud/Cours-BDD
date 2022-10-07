<?php

/**
 * Par convention, le nom du fichier est identique à celui de la classe.
 * Egalement, une classe s'écrit toujours en UpperCamelCase.
 * ----------------------------------------------------------
 * Une classe est une entité regroupant par thème des variables
 * appelées "propriétés" et des fonctions appelées "méthodes".
 */

 class Ecole
 {
    /**
     * Déclaration des propriétés de notre classe.
     * "private" nous permet d'interdire l'accès
     * direct aux propriétés par les objets. En
     * "private" les propriétés sont accessibles
     * UNIQUEMENT depuis l'intérieur de la classe.
     */
    private $nom;
    private $nbMax;
    private $adresse;
    private $directeur;

    /**
     * Alors, pour permettre l'attribution
     * de valeurs à mes propriétés, je vais
     * mettre en place un CONSTRUCTEUR.
     * ---------------------------------
     * L'objectif du constructeur c'est
     * de remplir / d'initialiser / hydrater
     * les propriétés de la classe avec des valeurs.
     * IL DOIT ETRE ACCESSIBLE PUBLIQUEMENT !!!
     * ---------------------------------
     * Cette fonction est executée AUTOMATIQUEMENT
     * par PHP au moment de l'instanciation de la classe.
     */
   # public function __construct($nom, $adresse) {
      /*
         * La propriété "nom" de classe ( $this->nom )
         * prend comme valeur, la valeur de la variable ( $nom )
         * passé en paramètre au moment de l'instanciation.
         * ------------------------------------------------
         * $this se réfère à votre objet
         */
   #   $this->nom = $nom;
   #   $this->adresse = $adresse;
   # }

   /*  -- ~ ° ~ --| Setters |-- ~ ° ~ -- */
   
   public function setNom($nom) {
      $this->nom = $nom;
      
      return $this;
   }

   public function setNbMax($nbMax) {
      $this->nbMax = $nbMax;
      
      return $this;
   }

   public function setAdresse($adresse) {
      $this->adresse = $adresse;

      return $this;
   }

   public function setDirecteur($directeur) {
      $this->directeur = $directeur;

      return $this;
   }

   /*  -- ~ ° ~ --| Getters |-- ~ ° ~ -- */

   public function getNom() {
      return $this->nom;
   }

   public function getNbMax() {
      return $this->nbMax;
   }

   public function getAdresse() {
      return $this->adresse;
   }

   public function getDirecteur() {
      return $this->directeur;
   }

 }