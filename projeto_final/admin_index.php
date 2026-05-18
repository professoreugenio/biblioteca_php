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
    <nav class="navbar navbar-expand-lg navbar-dark navbar-admin fixed-top">
        <div class="container-fluid px-lg-4">

            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <span class="brand-icon">
                    <i class="bi bi-book-half"></i>
                </span>
                Locadora Admin
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#menuAdmin" aria-controls="menuAdmin" aria-expanded="false"
                aria-label="Abrir menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuAdmin">

                <ul class="navbar-nav ms-lg-4 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">
                            <i class="bi bi-speedometer2 me-1"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="livros.php">
                            <i class="bi bi-journal-bookmark me-1"></i>
                            Livros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="usuarios.php">
                            <i class="bi bi-people me-1"></i>
                            Usuários
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="locações.php">
                            <i class="bi bi-arrow-left-right me-1"></i>
                            Locações
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="sair.php">
                            <i class="bi bi-box-arrow-right me-1"></i>
                            Sair
                        </a>
                    </li>
                </ul>

                <!-- Usuário logado -->
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle d-flex align-items-center gap-2 border-0"
                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/img/admin.jpg" class="foto-admin" alt="Foto do administrador"
                            onerror="this.src='https://ui-avatars.com/api/?name=Admin&background=00BB9C&color=fff'">
                        <span class="d-none d-md-inline fw-semibold">
                            Admin Eugênio
                        </span>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end shadow border-0 rounded-4 mt-2">
                        <li class="px-3 py-2">
                            <strong>Admin Eugênio</strong>
                            <div class="small text-muted">Administrador</div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item" href="dados-admin.php">
                                <i class="bi bi-person-gear me-2"></i>
                                Dados admin
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item text-danger" href="sair.php">
                                <i class="bi bi-box-arrow-right me-2"></i>
                                Sair
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>

    <!-- Conteúdo principal -->
    <main class="main-admin">
        <div class="container-fluid px-lg-4">

            <!-- Hero -->
            <section class="hero-admin mb-4">
                <span class="badge-admin mb-3">
                    <i class="bi bi-shield-check"></i>
                    Painel administrativo
                </span>

                <h1>Dashboard da Locadora de Livros</h1>

                <p class="mb-4">
                    Gerencie livros cadastrados, usuários, locações ativas, atrasos e movimentações recentes em um painel
                    moderno, simples e organizado.
                </p>

                <div class="d-flex flex-wrap gap-2 position-relative" style="z-index: 2;">
                    <a href="livros.php" class="btn btn-light fw-bold rounded-pill px-4">
                        <i class="bi bi-plus-circle me-1"></i>
                        Novo livro
                    </a>

                    <a href="locações.php" class="btn btn-outline-light fw-bold rounded-pill px-4">
                        <i class="bi bi-arrow-left-right me-1"></i>
                        Nova locação
                    </a>
                </div>
            </section>

            <!-- Cards resumo -->
            <section class="row g-4 mb-4">

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-dashboard h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="texto-suave mb-2">Livros cadastrados</p>
                                    <div class="numero-card">248</div>
                                </div>
                                <div class="icon-card bg-livros">
                                    <i class="bi bi-journal-bookmark"></i>
                                </div>
                            </div>
                            <p class="texto-suave mt-3 mb-0">
                                <i class="bi bi-arrow-up-short text-success"></i>
                                12 novos este mês
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-dashboard h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="texto-suave mb-2">Usuários ativos</p>
                                    <div class="numero-card">86</div>
                                </div>
                                <div class="icon-card bg-usuarios">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>
                            <p class="texto-suave mt-3 mb-0">
                                <i class="bi bi-person-check text-primary"></i>
                                Leitores cadastrados
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-dashboard h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="texto-suave mb-2">Locações ativas</p>
                                    <div class="numero-card">37</div>
                                </div>
                                <div class="icon-card bg-locacoes">
                                    <i class="bi bi-arrow-left-right"></i>
                                </div>
                            </div>
                            <p class="texto-suave mt-3 mb-0">
                                <i class="bi bi-clock-history text-warning"></i>
                                Em andamento
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-dashboard h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <p class="texto-suave mb-2">Atrasos</p>
                                    <div class="numero-card">05</div>
                                </div>
                                <div class="icon-card bg-atrasos">
                                    <i class="bi bi-exclamation-triangle"></i>
                                </div>
                            </div>
                            <p class="texto-suave mt-3 mb-0">
                                <i class="bi bi-bell text-danger"></i>
                                Requer atenção
                            </p>
                        </div>
                    </div>
                </div>

            </section>

            <section class="row g-4">

                <!-- Tabela -->
                <div class="col-12 col-xl-8">
                    <div class="table-card">
                        <div class="p-4 pb-0">
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                                <div class="section-title mb-0">
                                    <i class="bi bi-clock-history text-success me-1"></i>
                                    Locações recentes
                                </div>

                                <a href="locações.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">
                                    Ver todas
                                </a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Livro</th>
                                        <th>Usuário</th>
                                        <th>Data</th>
                                        <th>Devolução</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>HTML e CSS Moderno</strong>
                                            <div class="small text-muted">Código: LIV-001</div>
                                        </td>
                                        <td>Maria Oliveira</td>
                                        <td>15/05/2026</td>
                                        <td>22/05/2026</td>
                                        <td>
                                            <span class="status-badge status-ativo">
                                                Ativa
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <strong>JavaScript Essencial</strong>
                                            <div class="small text-muted">Código: LIV-002</div>
                                        </td>
                                        <td>João Pereira</td>
                                        <td>14/05/2026</td>
                                        <td>21/05/2026</td>
                                        <td>
                                            <span class="status-badge status-ativo">
                                                Ativa
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <strong>Banco de Dados MySQL</strong>
                                            <div class="small text-muted">Código: LIV-003</div>
                                        </td>
                                        <td>Ana Souza</td>
                                        <td>08/05/2026</td>
                                        <td>15/05/2026</td>
                                        <td>
                                            <span class="status-badge status-pendente">
                                                Pendente
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <strong>PHP com PDO</strong>
                                            <div class="small text-muted">Código: LIV-004</div>
                                        </td>
                                        <td>Carlos Lima</td>
                                        <td>10/05/2026</td>
                                        <td>17/05/2026</td>
                                        <td>
                                            <span class="status-badge status-ativo">
                                                Ativa
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Ações rápidas -->
                <div class="col-12 col-xl-4">
                    <div class="quick-card">
                        <div class="section-title">
                            <i class="bi bi-lightning-charge text-warning me-1"></i>
                            Ações rápidas
                        </div>

                        <a href="livros.php" class="quick-link">
                            <span>
                                <i class="bi bi-journal-plus me-2 text-success"></i>
                                Gerenciar livros
                            </span>
                            <i class="bi bi-chevron-right"></i>
                        </a>

                        <a href="usuarios.php" class="quick-link">
                            <span>
                                <i class="bi bi-person-plus me-2 text-primary"></i>
                                Gerenciar usuários
                            </span>
                            <i class="bi bi-chevron-right"></i>
                        </a>

                        <a href="locações.php" class="quick-link">
                            <span>
                                <i class="bi bi-arrow-left-right me-2 text-warning"></i>
                                Gerenciar locações
                            </span>
                            <i class="bi bi-chevron-right"></i>
                        </a>

                        <a href="sair.php" class="quick-link">
                            <span>
                                <i class="bi bi-box-arrow-right me-2 text-danger"></i>
                                Sair do painel
                            </span>
                            <i class="bi bi-chevron-right"></i>
                        </a>
                    </div>
                </div>

            </section>

            <footer class="footer-admin text-center mt-5">
                <p class="mb-0">
                    © 2026 Locadora de Livros — Painel Administrativo
                </p>
            </footer>

        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>