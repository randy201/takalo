<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/other/style.css');?>">
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <?php include("application/views/inc/header.php");?>
        <h1 class="row">Resultat du recherche</h1>
        <?php foreach($objets as $objet) { ?>
        <div class="col-md-3 objet">
            <ul class="media-list">
                <li class="media">
                    <div class="media-left">
                        <img class="media-object" width="100px" height="100px" src="<?php echo $objet['sary'];?>" alt="...">
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $objet['nomObjet'];?></h4>
                        <h5><?php echo $objet['description'];?></h5>
                        <p>Type:<?php echo $objet['nomCategorie'];?></p>
                        <p>Prix:<?php echo $objet['valeur'];?></p>
                    </div>
                </li>
            </ul>
        </div>
        <?php } ?>
        <?php include("application/views/inc/footer.php");?>
    </div>
</body>
</html>
