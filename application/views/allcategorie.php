<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo site_url('assets/css/style.css') ?>" rel="stylesheet">

    <link href="<?php echo site_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendor/quill/quill.snow.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendor/quill/quill.bubble.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
    <link href="<?php echo site_url('assets/vendor/simple-datatables/style.css')?>" rel="stylesheet">

    <script src="<?php echo site_url('assets/vendor/apexcharts/apexcharts.min.js')?>"></script>
    <script src="<?php echo site_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?php echo site_url('assets/vendor/chart.js/chart.min.js')?>"></script>
    <script src="<?php echo site_url('assets/vendor/echarts/echarts.min.js')?>"></script>
    <script src="<?php echo site_url('assets/vendor/quill/quill.min.js')?>"></script>
    <script src="<?php echo site_url('assets/vendor/simple-datatables/simple-datatables.js')?>"></script>
    <script src="<?php echo site_url('assets/vendor/tinymce/tinymce.min.js')?>"></script>
    <script src="<?php echo site_url('assets/vendor/php-email-form/validate.js')?>"></script>
    <title>allCategorie</title>
</head>
<body>
    
    
    <script id="popup-template.html" type="text/ng-template">
      <input ng-model="data.wifi" type="text" placeholder="Password">
    </script>
  </body>
    <div ng-controller="PopupCtrl">
        <button class="button button-positive" ng-click="showAlert()">
        getInfo
        </button>
        <p>
            Le nombre d'utilisateur est: <?php echo count($allUser); ?>
        </p>
        <p>
            Le nombre d'echange est: <?php echo count($echangeEffectuer); ?>
        </p>
    </div>
    <br>
    
    <br><br>
    <div class="card pt-5">
        <h1 style="margin-left: 20%">Ajout de Categorie</h1>
        <div class="card-body pt-3">
            <form action="<?php echo site_url('Categorie/ajouter') ?>" method="get">
                <li class="list-group-item" style="text-align:center">
                    <input type="text" name="newCategorie" class="form-control" placeholder="Ajouter Votre categorie"><br>
                    <input type="submit" value="Ajouter" class='btn-primary col-md-1'>
                </li>
            </form>
            <br>
            <ul class="list-group">
                <?php foreach($allType as $type){?>
                    <li class="list-group-item">
                        <a href="<?php echo site_url('Categorie/getAllCategorie/'.$type['nomCategorie'].'');?>"><?php echo $type['nomCategorie'];?></a>
                        <span>  <a href="<?php echo site_url('Categorie/supprimer/'.$type['idCategorie'].'');?>"> <button class="btn-danger" style='float: right'>Supprimer</button> </a></span> <br>
                    </li>
            
                <?php } ?>
            </ul>
        </div>
    </div>
    <br><br>
    <section class="services">
        <div class="container">
            <div class="row">
                <?php foreach($allObjet as $object){?>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img" >
                                <img src="<?php echo site_url('assets/img') ?>/original.jpeg" alt=""  width="250px">
                            </div>
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
<script>
    angular.module('mySuperApp', ['ionic'])
.controller('PopupCtrl',function($scope, $ionicPopup, $timeout) {

 // Triggered on a button click, or some other target
 $scope.showPopup = function() {
   $scope.data = {}

   // An alert dialog
   $scope.showAlert = function() {
     var alertPopup = $ionicPopup.alert({
       title: "<p>Le nombre d'utilisateur est: <?php echo count($allUser); ?> </p><p>Le nombre d'echange est: <?php echo count($echangeEffectuer); ?></p>",
       template: 'It might taste good'
     });
     alertPopup.then(function(res) {
       console.log('Thank you for not eating my delicious ice cream cone');
     });
   };
});
</script>
</html>
