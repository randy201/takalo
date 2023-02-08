<h1 class="row">Mes objets <a href="<?php echo site_url('accueil/ajoutPage');?>">Ajouter</a></h1>
<div class="row">
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
                    <a href="<?php echo site_url('accueil/supprimer/?idObjet='.$objet['idObjet']);?>">Supprimer</a>
                    <a href="<?php echo site_url('accueil/modifPage/?idObjet='.$objet['idObjet']);?>">Modifier</a>
                </div>
                <div class="btn" style="margin-left: 5%;" >
                    <a href="<?php echo site_url('Prix/getPrix_10/'.$objet['idObjet']);?>" style="margin-left: 10%;" >+/-10%</a>
                    <a href="<?php echo site_url('Prix/getPrix_20/'.$objet['idObjet']);?>" style="margin-left: 70%;" >+/-20%</a>
                </div>
            </li>
        </ul>
    </div>
    <?php } ?>
</div>