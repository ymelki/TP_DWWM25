<?php include "header.php"; ?>

<?php
// Connecter à la BD

bd();
require_once "Article.php";
?>
<h1>Liste des articles Favoris</h1>
<?php
// recuperer l ensemble des données des utilisateurs


foreach($_SESSION["favoris"] as $monarticle){
    $entry = Article::retrieveByPK($monarticle);
 
    echo $entry->titre. " ";

    echo $monarticle . "<hr> ";
    
}

// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>

