<?php include "header.php"; ?>
  
<?php
bd();
require_once "Article.php";
// Variables GET
$id=$_GET['id'];

$entry = Article::retrieveByPK($id);

$entry->delete();

echo "l'article a été supprimé :)";
?>
<?php include "footer.php"; ?>




 