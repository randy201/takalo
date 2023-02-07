<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allObjet</title>
</head>
<body>
    <?php for($i=0; $i<count($allType); $i++){?>
        <a href="<?php echo site_url('Categorie/getAllObjet/'.$allType[$i]['nomCategorie'].'');?>"><?php echo $allType[$i]['nomCategorie'];?></a>
    <?php } ?>

    <br><br>
    <?php for($i=0; $i<count($allObjet); $i++){?>
        <div class="objet">
            <div class="sary"><?php echo $allObjet[$i]['sary'];?> </div>
            <span>nom_categorie:<?php echo $allObjet[$i]['nomCategorie'];?> </span>
            <span>nom_Objet: <?php echo $allObjet[$i]['nomObjet'];?> </span>
            <span>nom: <?php echo $allObjet[$i]['nom'];?> </span>
            <span>objet:<?php echo $allObjet[$i]['idObjet'];?> </span>
            <span><a href="<?php echo site_url('Echange/demande/'.$allObjet[$i]['idObjet'].'')?> " > <button>echanger</button></a></span>

        </div>
        <br>
    <?php } ?>
        <br>
</body>
</html>