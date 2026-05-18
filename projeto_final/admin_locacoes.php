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
                    <a href="admin_livros.php?lk=2" class="btn btn-light fw-bold rounded-pill px-4">
                        <i class="bi bi-plus-circle me-1"></i>
                        Nova Locação
                    </a>

                    <a href="admin_locacoesform.php?lk=4" class="btn btn-outline-light fw-bold rounded-pill px-4">
                        <i class="bi bi-arrow-left-right me-1"></i>
                        Nova locação
                    </a>
                </div>
            </section>

            <!-- Cards resumo -->


            <section class="row g-4">

                <!-- Tabela -->
                <div class="col-12 col-xl-12">
                    <div class="table-card">
                        <div class="p-4 pb-0">
                            <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                                <div class="section-title mb-0">
                                    <i class="bi bi-clock-history text-success me-1"></i>
                                    Locações recentes
                                </div>

                                <a href="admin_locacoes.php" class="btn btn-sm btn-outline-success rounded-pill fw-bold">
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