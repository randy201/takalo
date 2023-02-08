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
    <title>allObjet</title>
</head>
<body>
    <div class="card pt-5">
        <div class="card-body pt-3">
            <ul class="list-group">
                <?php foreach($allType as $type){?>
                    <li class="list-group-item">
                        <a href="<?php echo site_url('Categorie/getAllObjet/'.$type['nomCategorie'].'');?>"><?php echo $type['nomCategorie'];?></a>
                    </li>
            
                <?php } ?>
            </ul>
        </div>
    </div>

    <br><br>
    <?php for($i=0; $i<count($allObjet); $i++){?>
        <div class="objet">
            <div class="sary"><?php echo $allObjet[$i]['sary'];?> </div>
            <span>nom_categorie:<?php echo $allObjet[$i]['nomCategorie'];?> </span>
            <span>nom_Objet: <?php echo $allObjet[$i]['nomObjet'];?> </span>
            <span>nom: <?php echo $allObjet[$i]['nom'];?> </span>
            <span>objet:<?php echo $allObjet[$i]['idObjet'];?> </span>
            <span><a href="<?php echo site_url('Echange/demande/'.$allObjet[$i]['idObjet'].'')?> " > <button>echanger</button></a></span>

        </div>
        <br>
    <?php } ?>
        <br>

    
</body>
</html>
