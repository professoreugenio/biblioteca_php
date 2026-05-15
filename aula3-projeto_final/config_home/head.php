<?php

$con = config::connect();

$autor = "";
$descricao = "";
$palavraschave = "";
$titulo = "";
try {

    $query = "SELECT * FROM dadosdosite LIMIT 1";
    $row = $con->prepare($query);
    $row->execute();
    $dados = $row->fetch(PDO::FETCH_ASSOC);

    if ($dados):

        $autor = $dados['autor'];
        $descricao = $dados['descricao_site'];
        $palavraschave = $dados['palavras_chave'];
        $titulo = $dados['nome_site'];

    else:
        echo "Dados não localizados";
        exit();
    endif;
} catch (PDOException $e) {
    error_log('Erro ao inserir livro: ' . $e->getMessage());
    echo 'Erro ao cadastrar livro.';
}

?>
<title><?= $titulo; ?></title>
<!-- Required meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta name="description" content="<?= $descricao; ?>">
<meta name="keywords" content="<?= $palavraschave; ?>">
<meta name="author" content="<?= $autor; ?>">

<!-- Bootstrap CSS v5.3.8 -->
<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous" />

     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/stylehome.css">