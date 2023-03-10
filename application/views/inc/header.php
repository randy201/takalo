<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TAkaLO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo site_url('accueil');?>">Accueil</a></li>
        <li><a href="<?php echo site_url('categorie/getAllObjet');?>">Proposer</a></li>
        <li><a href="<?php echo site_url('echange/acceptation');?>">Propositions</a></li>
      </ul>
      <form class="navbar-form navbar-left" method="post" action="<?php echo site_url('accueil/recherche');?>" role="search">
        <div class="form-group">
          <input type="text" class="form-control" name="mot" placeholder="Search">
        </div>
        <select name="idCategorie" id="">
          <option value="0">Tous</option>
          <?php foreach($categories as $cat) { ?>
            <option value="<?php echo $cat['idCategorie'];?>"><?php echo $cat['nomCategorie'];?></option>
          <?php } ?>
        </select>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url('login/deconnexion');?>">Deconnexion</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
