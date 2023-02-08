<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/other/style.css');?>">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h1 class="row">Login</h1>
        <div class="row">
            <form action="<?php echo site_url('login/testLogin');?>" method="post">
                <p><input type="text" name="name" id="name" value="<?php echo $default;?>"></p>
                <p><input type="password" name="mdp" id="mdp"></p>
                <p><input type="submit" value="Valider"></p>
                <?php if(isset($_GET['admin'])) { ?>
                    <p><input type="hidden" name="admin" value="admin"></p>
                    <?php } ?>
            </form>
        </div>
    </div>
    <p>
        <a href="<?php echo site_url('login?admin');?>">
            <?php if(!isset($_GET['admin'])) { ?>
                En tant qu'Admin
            <?php } ?>
        </a>
    </p>
    <p><a href="<?php echo site_url('login/inscription');?>">Creer compte</a></p>
    <h2><?php echo $error;?></h2>
</body>
</html>