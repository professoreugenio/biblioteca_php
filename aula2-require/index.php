<?php declare(strict_types=1);?>
<?php define('BASEPATH',true);?>
<?php define('RAIZSITE',dirname(__DIR__));   ?>
<?php define('AULA2ARRAY',RAIZSITE.'/aula2-require');?>
<?php define('COMPONENTES',AULA2ARRAY.'/componentes');?>
<?php define('SECTIONS',AULA2ARRAY.'/sections');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Modelo para Aplicações</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header>
<!-- aqui fica a nav -->
 <?php require_once COMPONENTES. '/nav.php'; ?>

</header>

<!-- aqui o hero -->
 <?php 
 
 $valida=$_GET['valida']??'1';
 
 if($valida==1){
  require_once COMPONENTES. '/hero.php';
 } ?>

<!-- sectio alunos -->
<?php require_once SECTIONS. '/alunos.php'; ?>

<!--  section produtos -->
<?php require_once SECTIONS. '/produtos.php'; ?>

<!-- serviços -->

<?php require_once SECTIONS. '/servicos.php'; ?>
<!-- publicações -->
<?php require_once SECTIONS. '/publicacoes.php'; ?>

<!-- aqui o footer -->
<?php require_once COMPONENTES. '/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>