<?php
$con = config::connect();
try {
    
$query ="SELECT * FROM dadosdosite LIMIT 1";
$row = $con->prepare($query);
$row->execute();
$dados= $row->fetch(PDO::FETCH_ASSOC);

if(!$dados):
    echo "Sem dados";
    exit;

endif;

} catch (PDOException $e) {
    error_log('Erro ao realizar consulta'.$e->getMessage());
    echo 'Erro ao realizar consulta';
}


?>

<title><?php echo $dados['nome_site'];?></title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?=$dados['descricao_site'];?>">
    <meta name="keywords" content="<?=$dados['palavras_chave'];?>">
    <meta name="author" content="<?=$dados['autor'];?>">

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/stylehome.css">