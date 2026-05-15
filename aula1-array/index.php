<?php
/** array */

$dados =[
    "Ceará",
    "Maracanaú",
    "Rua 17",
    "Casa 42"
];

$dados2 = [
    "estado"=>"Ceará",
    "cidade"=>"Maracanaú",
    "endereco"=>"Rua 17",
    "numero"=>"Casa 42"
];

$dados3 = [
  [
    "estado"=>"Ceará",
    "cidade"=>"Maracanaú",
    "endereco"=>"Rua 17",
    "numero"=>"Casa 42"
  ],
  [
    "estado"=>"Bahia",
    "cidade"=>"Jereissati",
    "endereco"=>"Avenida 17",
    "numero"=>"Casa 1150"
  ]
]
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Programação PHP</h1>
    <h2>Array</h2>
    <p>
Estado: <?php echo $dados2['estado'];?>, 
Cidade: <?php echo $dados2['cidade'];?>, 
Rua : <?php echo $dados2['endereco'];?>, 
Número : <?php echo $dados2['numero'];?>, 
    </p>
    <h2>Array por rótulo</h2>
    <p>
Estado: <?php echo $dados[0];?>, 
Cidade: <?=$dados[1];?>
Rua : <?=$dados[2];?>
Número : <?=$dados[3];?>
    </p>
    <h2>Array dentro de array</h2>
    <p>
Estado: <?php echo $dados3[0]['estado'];?>, 
Cidade: 
Rua : 
Número : 
    </p>

    <p><?=count($dados3);?></p>
    <?php 
    
    foreach ($dados3 as $key => $value) {
      $n=$key+1;
      echo $n."-". $value['estado']." "
      .$value['cidade']." "
      .$value['endereco']." "
      .$value['numero']."<br>";
    }
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>