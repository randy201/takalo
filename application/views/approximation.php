<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/bootstrap/bootstrap.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/css/other/style.css');?>">
    <title>Approximation</title>
</head>
<style>
    th{
        width:10000px;
        text-align:center;
    }
</style>
<body>
    <div class="container">
        <?php include("application/views/inc/header.php");?>
        <table border="1" >
            <tr>
                <th>nom</th>
                <th>nomCategorie</th>
                <th>sary</th>
                <th>description</th>
                <th>valeur</th>

            </tr>

            <?php
            if(isset($AllPrix_20)){
             foreach($AllPrix_20 as $prix){?>
                <tr>
                    <td><?php echo $prix['nom']?></td>
                    <td><?php echo $prix['nomCategorie']?></td>
                    <td><?php echo $prix['sary']?></td>
                    <td><?php echo $prix['description']?></td>
                    <td><?php echo $prix['valeur']?></td>
                </tr>

                <br><br><br>
            <?php }}
            if(isset($AllPrix_10)){
                foreach($AllPrix_10 as $prix){?>
                <tr>
                    <td><?php echo $prix['nom']?></td>
                    <td><?php echo $prix['nomCategorie']?></td>
                    <td><?php echo $prix['sary']?></td>
                    <td><?php echo $prix['description']?></td>
                    <td><?php echo $prix['valeur']?></td>
                </tr>

                <br><br><br>
            <?php }} ?>
            </table>
            <?php include("application/views/inc/footer.php");?>
    </div>
</body>
</html>
