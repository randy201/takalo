<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo site_url('assets/css/style.css') ?>" rel="stylesheet">

    
    <title>allCategorie</title>
</head>
<body>

    <p>
        Le nombre d'utilisateur est: <?php echo count($allUser); ?>
    </p><br>
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
    <section class="services">
        <div class="container">
            <div class="row">
                <?php foreach($allObjet as $object){?>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <span class="card-img" >
                                <img src="<?php echo site_url('assets/img') ?>/original.jpeg" alt="">
                            </span>
                            <div class="card-body" >
                                <h5 class="card-title">nom_Objet: <?php echo $object['nomObjet'];?> </h5>
                                <p class="card-text">nom: <?php echo $object['nom'];?> </p>
                                <div class="read-more">objet:<?php echo $object['idObjet'];?> </div>
                            </div>
                        </div>
                    </div>
                    <br>
                <?php } ?>
            </div>
        </div>
    </section>
</body>
</html>
