<?php
require_once __DIR__ . '/config/caminhos.php';
require_once CONFIG_ROOT . '/sessao.php';
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

            <!-- Hero -->
            <section class="hero-admin mb-4">
                <span class="badge-admin mb-3">
                    <i class="bi bi-shield-check"></i>
                    Painel administrativo
                </span>

                

                <div class="d-flex flex-wrap gap-2 position-relative" style="z-index: 2;">
                    <a href="admin_cadastroUsuarios.php?lk=3" class="btn btn-light fw-bold rounded-pill px-4">
                        <i class="bi bi-plus-circle me-1"></i>
                        Lívros
                    </a>

                    <a href="admin_locacoes.php?lk=4" class="btn btn-outline-light fw-bold rounded-pill px-4">
                        <i class="bi bi-arrow-left-right me-1"></i>
                       Locações
                    </a>
                    <a href="admin_usuarios.php?lk=3" class="btn btn-outline-light fw-bold rounded-pill px-4">
                        <i class="bi bi-arrow-left-right me-1"></i>
                       Usuários
                    </a>
                </div>
            </section>

            

            <section class="row g-4">

                <!-- Tabela -->
                <div class="col-12 col-xl-12">
                    <?php require_once CONFIGFORM_ROOT .'/formlivro.php'; ?>
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