<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="<?php echo site_url('login/creerUser');?>" method="post">
            <p><input type="text" name="nom"></p>
            <p><input type="text" name="mail"></p>
            <p><input type="text" name="mdp"></p>
            <p><input type="submit" value="Creer"></p>
        </form>
        <h2><?php echo $error;?></h2>
    </div>
</body>
</html>