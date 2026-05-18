<?php
require_once __DIR__ . '/config/caminhos.php';
require_once CONFIG_ROOT . '/sessao.php';


?>
<?php
unset($_SESSION['usuario_logado']);
unset($_SESSION['idusuario']);
unset($_SESSION['nome']);

HEADER('Location: index.php');
exit();
?>
<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <title>Painel Admin | Locadora de Livros</title>

    <!-- Meta padrão -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <meta name="description" content="Painel administrativo moderno para sistema de locação de livros.">
    <meta name="author" content="Professor Eugênio">
    <meta name="robots" content="noindex, nofollow">

    <!-- Compartilhamento em redes sociais -->
    <meta property="og:title" content="Painel Admin | Locadora de Livros">
    <meta property="og:description" content="Dashboard administrativo para gerenciamento de livros, usuários e locações.">
    <meta property="og:image" content="assets/img/og-admin-livros.jpg">
    <meta property="og:url" content="https://professoreugenio.com/admin/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">

    <!-- Twitter/X Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Painel Admin | Locadora de Livros">
    <meta name="twitter:description" content="Dashboard administrativo para gerenciamento de livros, usuários e locações.">
    <meta name="twitter:image" content="assets/img/og-admin-livros.jpg">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/styleadmin.css">
</head>

<body>

    <!-- Navbar -->
    <?php
    require_once INCLUDESDMIN_ROOT . '/nav.php';
    ?>

    <!-- Conteúdo principal -->
    <main class="main-admin">
        <div class="container-fluid px-lg-4">



            <!-- Cards resumo -->
            <section class="row g-4 mb-4">

                <div class="col-12 col-sm-12 col-xl-12">
                    <div class="card card-dashboard h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>

                                    <div class="numero-card">Sair</div>
                                </div>
                                <div class="icon-card bg-livros">
                                    <i class="bi bi-box-arrow-right"></i>
                                </div>
                            </div>
                            <p class="texto-suave mt-3 mb-0">
                                <i class="bi bi-arrow-up-short text-success"></i>
                                <!--  -->
                            </p>
                        </div>
                    </div>
                </div>






            </section>



            <!-- footer -->
            <?php
            require_once INCLUDESDMIN_ROOT . '/nav.php';
            ?>

        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>