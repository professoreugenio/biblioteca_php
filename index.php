<?php
$titulo="Contorle de locação de livros";
$palavraChave="Biblioteca, livros, locação, obras literárias";
$descricao="Página de locação e hospedagem de publicacções literárias";
/** TRATANDO VALORES */
$v1=50;
$v2=3.5;
$soma=$v1+$v2;
$subtracao=$v1-$v2;
$multiplica = $v1*$v2;
$divide = $v1/$v2;

$n1="Eugênio";
$n2="Márcio";
$n3="Lins";
$n4="Sousa";

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$titulo;?></title>
    <meta name="keywords" content="<?=$palavrasChave??'não localizada';?>" >
    <meta name="description" content="<?=$descricao;?>" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="text-center">Programação PHP!</h1>
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2>Tratando valores</h1>
                <h3>Soma</h3>
                <p>
                    Valor 1: <?=$v1;?> + 
                    Valor 2: <?=$v1;?> = <?=number_format($soma,2,',','.');?>
            </p>

            
                <h3>Subtração</h3>
                <p>
                    Valor 1: <?=$v1;?> + 
                    Valor 2: <?=$v1;?> = <?=number_format($subtracao,2,',','.');?>
            </p>

            
                <h3>Multiplicação</h3>
                <p>
                    Valor 1: <?=$v1;?> + 
                    Valor 2: <?=$v1;?> = <?=number_format($multiplica,2,',','.');?>
            </p>
            
            <h3>CONCATENAÇÃO</h3>
                <p>
                    <?php echo "$n1 $n2 $n3 $n4"; ?>
            </p>
            
            <h3>VERSÃO PHP</h3>
                <p>
                    <?php phpinfo(); ?>
            </p>
            </div>
            
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>