<?php include "header.php"; ?>

<?php
if ( (isset($_POST['titre'])==true) && 
(isset($_POST['description'])==true) &&
(isset($_POST['prix'])==true)) 
{
 
 
 // Connexion BD
 
 bd();
 // Insertion BD
 
   require_once "Article.php";

   $entry = new Article;
   $entry->titre = $_POST['titre'];
   $entry->description = $_POST['description'];
   $entry->prix =$_POST['prix'];
   $entry->image = "";
   $entry->save();
    

}

?>
<form method="POST" action="ajouter_article.php">
    <input type="text" placeholder="Veuillez entrez Le titre" name="titre" /> <br />
    <input type="text" placeholder="Veuillez entrez La description" name="description" /> <br />
    <input type="text" placeholder="Veuillez entrez le prix" name="prix" /> <br />
    <input type="submit" value="Ajouter article !" />
</form>  

<?php include "footer.php"; ?>
