<div class="row">
    <h1>Ajouter Objet</h1>
    <form action="<?php echo site_url('accueil/ajouterObjet');?>" method="post">
        <p>Nom:<input type="text" name="nomObjet"></p>
        <p>Categorie:
            <select name="idCategorie" id="">
                <?php foreach($categories as $cat) { ?>
                    <option value="<?php echo $cat['idCategorie'];?>"><?php echo $cat['nomCategorie'];?></option>
                <?php } ?>
            </select>
        </p>
        <p>Photo:<input type="text" name="sary"></p>
        <p>Description:<input type="text" name="descri"></p>
        <p><input type="submit" value="Ajouter"></p>
    </form>
    <h3><?php echo $error;?></h3>
</div>