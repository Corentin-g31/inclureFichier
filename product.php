<?php require('header.inc.php'); ?>
<?php require 'listeProduits.php';?>

<h2>Ceci est la page product</h2>

<ul>
    <?php foreach($produits as $produit) { ?>
        <li><?=$produit['nom']?>(<?=$produit['id']?>) : <i> <?=$produit['description']?></i> <b><?=$produit['prix'] ?>€</b></li>
    <?php } ?>
</ul>

<?php require('footer.inc.php'); ?>