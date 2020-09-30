<?php require 'header.inc.php';?>
<?php require 'listeProduits.php';?>

<h2>Ceci est la page d'accueil</h2>

<h4>Liste des produits</h4>
<ul>

<?php foreach ($produits as $produit) {?>

        <li><a href="product.php"><?=$produit['nom']?></a></li>

<?php }?>

</ul>
<?php require 'footer.inc.php';?>