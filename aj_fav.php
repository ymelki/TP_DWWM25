<?php include "header.php"; ?>

Vous avez ajouté le favoris correpondant à l'identifiant : <?= $_GET['id']; ?>

<?php


// SOIT LA SESSION N EXISTE PAS
if ($_SESSION['favoris']==false){
    $tab_fav[]=$_GET['id'];
    $_SESSION['favoris']=$tab_fav;
}
// SOIT LA SESSION EXISTE 
if ($_SESSION['favoris']==true){

    // si l'identifant est get est deja dans mon tableau alors je ne l'insere pas dans la 
    // session

    // recuperer le tableau existant
    $tab_fav=$_SESSION['favoris'];

    // on ajoute cet ID uniquement dans le cas ou l'ID n'est pas enregistré
    if (in_array($_GET['id'], $tab_fav)==false){

        // Rajouter au tableau le nouvelle identifiant sur lequel on a cliqué
         $tab_fav[]=$_GET['id'];

         // Nouveau tableau complet vient s'enregistrer dans le tableau de session
         $_SESSION['favoris']=$tab_fav;


    }
   
}
    
 
var_dump($_SESSION);
?><?php include "footer.php"; ?>