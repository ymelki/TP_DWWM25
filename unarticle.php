<?php include "header.php"; ?>

<?php
// Connecter à la base d

bd(); 
require_once "Article.php";

// recuperer l ensemble des données des utilisateurs
$entry = Article::retrieveByPK($_GET['id']);
 
echo $entry->titre;
// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>

