<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/other/style.css');?>">
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <?php include("application/views/inc/header.php");?>
        <h2>Bienvenue:<?php echo $user[0]['nom'];?></h2>
        <?php include("application/views/inc/myObjet.php");?>
        <?php include("application/views/inc/footer.php");?>
    </div>
</body>
</html>
