<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allCategorie</title>
</head>
<body>
    <?php foreach($allType as $type){?>
        <a href="<?php echo site_url('Categorie/getAllCategorie/'.$type['nomCategorie'].'');?>"><?php echo $type['nomCategorie'];?></a> <br>
        <span><a href="<?php echo site_url('Categorie/supprimer/'.$type['idCategorie'].'');?>"> <button>supprimer</button> </a></span> <br>

    <?php } ?>
    <br>
    <form action="<?php echo site_url('Categorie/ajouter') ?>" method="get">
        <div>
            <input type="text" name="newCategorie">
            <input type="submit" value="ajouter">
        </div>
    </form>
    <br><br>
    <?php foreach($allObjet as $object){?>
        <div class="objet">
            <div class="sary"><?php echo $object['sary'];?> </div>
            <span>nom_categorie:<?php echo $aobject['nomCategorie'];?> </span>
            <span>nom_Objet: <?php echo $object['nomObjet'];?> </span>
            <span>nom: <?php echo $object['nom'];?> </span>
            <span>objet:<?php echo $object['idObjet'];?> </span>
            
        </div>
        <br>
    <?php } ?>
</body>
</html>