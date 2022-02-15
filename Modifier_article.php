<?php include "header.php"; ?>
<?php
// 1 recuperation des variables 

$titre=$_POST['titre'];
$description=$_POST['description'];
$prix=$_POST['prix'];
$id=$_POST['id'];
// 2 Travail en BD (Modification)

bd(); //connexion
require_once "Article.php"; // la classe correspondant à ma table 
$entry = Article::retrieveByPK($_POST['id']); // recuperation de la ligne qui m'interesse
  

$entry->titre=$titre;
$entry->description=$description;
$entry->prix = $prix;
$entry->save();
