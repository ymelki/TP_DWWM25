<?php include "header.php"; ?>

<?php
// Connecter à la BD

bd();
require_once "Article.php";
?>
<h1>Liste des articles </h1>
<?php
// recuperer l ensemble des données des utilisateurs
$entry = Article::all();

foreach($entry as $monarticle){
    echo "<a href='unarticle.php?id=".$monarticle->id."'> $monarticle->titre $monarticle->description </a>
    
    
    
  -   <a href='modifier.php?id=".$monarticle->id."'>Modifier</a>-
    
    
    <a href='supprimer.php?id=".$monarticle->id."'>Supprimer</a><hr>";
    
    
    //<a href='unutilisateur.php?id=".$monarticle->id."'>$monarticle->prenom."  ".$monarticle->nom."</a> <hr>";
}

// Recuperer l'ensemble des donnes de la tables utilisateurs
?>
<?php include "footer.php"; ?>

