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
    <?php ?>
     <div class="container">
         <?php include("application/views/inc/header.php");?>
        <div class="col-md-4 col-md-offset-4 login">
            <h1>Ajouter Objet</h1>
            <form action="<?php echo site_url('accueil/ajouterObjet');?>" method="post">
                <p><input type="text" name="nomObjet" placeholder="Nom:"></p>
                <p>Categorie:
                    <select name="idCategorie" id="">
                        <?php foreach($categories as $cat) { ?>
                            <option value="<?php echo $cat['idCategorie'];?>"><?php echo $cat['nomCategorie'];?></option>
                        <?php } ?>
                    </select>
                </p>
                <p><input type="text" name="sary" placeholder="Photo:"></p>
                <p><input type="text" name="descri" placeholder="Description:"></p> 
                <p><input type="text" name="valeur" placeholder="Price:"></p>
                <p><input type="submit" value="Ajouter"></p>
            </form>
            <h3><?php echo $error;?></h3>
        </div>
        <?php include("application/views/inc/footer.php");?>
    </div>
</body>
</html>