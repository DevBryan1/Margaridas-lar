<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$GLOBALS['head']['title'];?></title>
    <link rel="stylesheet" href="assets/frames/fonticons/css/all.min.css">
    <?php foreach($GLOBALS['css'] as $c){ ?>
        <link rel="stylesheet" href="<?=$c['attr'];?>?=<?=time();?>">
    <?php } ?>
</head>
<script src="https://kit.fontawesome.com/ca7955397c.js" crossorigin="anonymous"></script>
<body>
<div class="container-header">
        <a href="index.php"><img class="imgLogo" src="./assets/images/Logo Lar Margaridas.png" alt="Logo"></a>
        <ul class="navMenu">
            <a href="index.php"><li>Início</li></a>
            <a href="quem-somos.php"><li>Quem Somos</li></a>
            <a href="fotos.php"><li>Fotos</li></a>
            <a href="contato.php"><li>Contato/Localização</li></a>
        </ul>
    <div class="mobile-menu-icon">
        <button class="btnIcon"><img src="./assets/images/Hamburguer Icon.png" alt="icon hamburger"></button>
    </div>
</div>
<div class="site-completo">