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
        <h1></h1>
        <table class="row demande">
            <tr>
                <td>User</td>
                <td>Objet</td>
                <td>Contre</td>
                <td></td>
                <td></td>
            </tr>
            <?php foreach($demandes as $demande) { ?>
                <div class="col-md-3">
                    <tr>
                        <td><?php echo $demande['nom'];?></td>
                        <td><?php echo $demande['nomObjet'];?></td>
                        <td><?php echo $demande['nomObjet2'];?></td>
                        <td><a href="<?php echo site_url('echange/accepter?idEchange='.$demande['idEchange'].'&idObjet='.$demande['idO1'].'&nekena='.$demande['idUser1'].'&idObjet2='.$demande['idO2']);?>">Accepter</a></td>
                        <td><a href="<?php echo site_url('echange/annuler?idEchange='.$demande['idEchange']);?>">Annuler</a></td>
                    </tr>
                </div>
            <?php } ?>
        </table>
        <?php include("application/views/inc/footer.php");?>
    </div>
</body>
</html>