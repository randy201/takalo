<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/other/style.css');?>">
    <title>Ajouter</title>
</head>
<body>
    <div class="container">
        <?php include("application/views/inc/header.php");?>
        <div class="col-md-4 col-md-offset-4 login">
            <h1>Modifier Objet</h1>
            <form action="<?php echo site_url('accueil/modifier');?>" method="post">
                <p><input type="hidden" name="idObjet" value="<?php echo $objets[0]['idObjet'];?>"></p>
                <p><input type="text" name="nomObjet" value="<?php echo $objets[0]['nomObjet'];?>" placeholder="Nom"></p>
                <p>Categorie:
                    <select name="idCategorie" id="">
                        <?php foreach($categories as $cat) { ?>
                            <option value="<?php echo $cat['idCategorie'];?>" <?php if($cat['idCategorie'] == $objets[0]['idCategorie'])echo 'selected';?>><?php echo $cat['nomCategorie'];?></option>
                            <?php } ?>
                        </select>
                    </p>
                    <p><input type="text" name="sary" value="<?php echo $objets[0]['sary'];?>" placeholder="Photo"></p>
                    <p><input type="text" name="descri" value="<?php echo $objets[0]['description'];?>" placeholder="Description"></p>
                    <p><input type="text" name="valeur" value="<?php echo $objets[0]['valeur'];?>" placeholder="Description"></p>
                    <p><input type="submit" value="Modifier"></p>
            </form>
            <h3><?php echo $error;?></h3>
        </div>
        <?php include("application/views/inc/footer.php");?>
    </div>
</body>
</html>