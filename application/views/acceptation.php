<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/other/style.css');?>">
    <title>Propositions</title>
</head>
<body>
    <div class="container">
        <?php include("application/views/inc/header.php");?>
        <div class="row">
            <?php foreach($demandes as $demande) { ?>
                <div class="col-md-6 demande">
                    <p>Nom:<?php echo $demande['idUser1'];?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>