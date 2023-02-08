<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/other/style.css');?>">
    <title>allObjet</title>
</head>
<body>
    <div class="container">
        <?php include("application/views/inc/header.php");?>
        <?php for($i=0; $i<count($allType); $i++){?>
            <a class="type" href="<?php echo site_url('Categorie/getAllObjet/'.$allType[$i]['nomCategorie'].'');?>"><?php echo $allType[$i]['nomCategorie'];?></a>
        <?php } ?>        
        <br><br>
        <?php for($i=0; $i<count($allObjet); $i++){?>
            <div class="objet echange">
                <div class="sary"><?php echo $allObjet[$i]['sary'];?></div>
                <p>
                    <span>Categorie:<?php echo $allObjet[$i]['nomCategorie'];?> </span>
                    <span><?php echo $allObjet[$i]['nomObjet'];?> </span>
                    <span>nom: <?php echo $allObjet[$i]['nom'];?> </span>
                    <form action="<?php echo site_url('echange/demande');?>" method="get">
                        <input type="hidden" name="ido2" value="<?php echo $allObjet[$i]['idObjet'];?>">
                        <input type="hidden" name="idU2" value="<?php echo $allObjet[$i]['idUser'];?>">
                        Objet a echange:<select name="ido1" id="">
                            <?php foreach($objetUser AS $obj) { ?>
                                <option value="<?php echo $obj['idObjet'];?>"><?php echo $obj['nomObjet'];?></option>
                            <?php } ?>
                        </select>
                        <input type="submit" value="Echanger">
                    </form>
                </p>
            </div>
        <br>
        <?php } ?>
        <br>
        <?php include("application/views/inc/footer.php");?>
    </div>
</body>
</html>
