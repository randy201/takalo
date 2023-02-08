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

    <section class="services">
        <div class="container">
            <div class="row">
                <?php foreach($allObjet as $object){?>
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img" >
                                <img src="<?php echo site_url('assets/img') ?>/original.jpeg" alt="" width="250px">
                            </div>
                            <div class="card-body" >
                                <h5 class="card-title"><?php echo $object['nomObjet'];?> </h5>
                                <p class="card-text">user: <?php echo $object['nom'];?> </p>
                                <div class="read-more">objet:<?php echo $object['idObjet'];?> </div>
                                <span><a href="<?php echo site_url('Echange/demande/'.$object['idObjet'].'')?> " > <button>echanger</button></a></span>
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
