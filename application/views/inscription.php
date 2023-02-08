<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/other/style.css');?>">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php include("application/views/inc/header.php");?>
        <div class="col-md-4 col-md-offset-4 login">
            <h1 class="row">Inscription</h1>
            <form class="row" action="<?php echo site_url('login/creerUser');?>" method="post">
                <p><input type="text" name="nom" placeholder="Nom:"></p>
                <p><input type="text" name="mail" placeholder="Adresse mail:"></p>
                <p><input type="text" name="mdp" placeholder="Mot de Passe:"></p>
                <p><input type="submit" value="Creer"></p>
            </form>
            <h2><?php echo $error;?></h2>
        </div>
        <?php include("application/views/inc/footer.php");?>
    </div>
</body>
</html>