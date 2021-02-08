<?php
 require "./Habitation.php";
 require "./Maison.php";
 require "./Appartement.php";
/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

// Partie 4

$maison1 = new Maison("France", "Fourmies", 59222, 3, 5, true, 2, true);
$maison2 = new Maison("France", "Maubeuge", 59440, 2, 4, true, 2, true);

echo $maison1->getPays()." " .$maison1->getVille(). " ".$maison1->getCodePostal().", ". $maison1->getChambres(). " chambres, ".$maison1->getPieces(). " pièces, jardin : ". $maison1->isJardin(). ", ".$maison1->getEtages()." étages, garage :". $maison1->isGarage()."<br>";
echo $maison2->getPays()." " .$maison2->getVille(). " ".$maison2->getCodePostal().", ". $maison2->getChambres(). " chambres, ".$maison2->getPieces(). " pièces, jardin : ". $maison2->isJardin(). ", ".$maison2->getEtages()." étages, garage :". $maison2->isGarage()."<br>";

// partie 5

$appart = new Appartement("France", "Solre-le-chateau", 59740, 5, 8, true);

echo $appart->getPays()." " .$appart->getVille(). " ".$appart->getCodePostal().", ". $appart->getChambres(). " chambres, ".$appart->getPieces(). " pièces, garage : ". $appart->isGarage();