<?php
include 'formulaire.php';
$form = new Formulaire("testformulaire.php","post");
echo "Votre nom : ";
$form->ajouterZoneTexte("nom");
echo '<br>';
echo "Votre code : ";
$form->ajouterZoneTexte("code");
echo '<br>';
$form->ajouterBouton();