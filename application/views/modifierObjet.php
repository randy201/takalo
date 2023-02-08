<div class="row">
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
        <p><input type="submit" value="Modifier"></p>
    </form>
    <h3><?php echo $error;?></h3>
</div>