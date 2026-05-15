<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <title>Painel Admin | Locação de Livros</title>

    <!-- Meta padrão -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO -->
    <meta name="description" content="Painel administrativo para sistema de locação de livros.">
    <meta name="author" content="Professor Eugênio">
    <meta name="robots" content="noindex, nofollow">

    <!-- Compartilhamento em redes sociais -->
    <meta property="og:title" content="Painel Admin | Locação de Livros">
    <meta property="og:description" content="Dashboard administrativo moderno para gerenciar livros, usuários e locações.">
    <meta property="og:image" content="assets/img/og-admin-livros.jpg">
    <meta property="og:url" content="https://professoreugenio.com/admin/">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">

    <!-- Twitter/X Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Painel Admin | Locação de Livros">
    <meta name="twitter:description" content="Dashboard administrativo moderno para gerenciar livros, usuários e locações.">
    <meta name="twitter:image" content="assets/img/og-admin-livros.jpg">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon.png" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/styleadmin2.css">
</head>

<body>

    <div class="mobile-backdrop" id="mobileBackdrop"></div>

    <div class="admin-layout">

        <!-- Sidebar -->
        <aside class="sidebar" id="sidebarAdmin">

            <div class="brand-area">
                <div class="brand-icon">
                    <i class="bi bi-book-half"></i>
                </div>

                <div>
                    <div class="brand-title">BookAdmin</div>
                    <div class="brand-subtitle">Locação de livros</div>
                </div>
            </div>

            <div class="menu-label">Menu principal</div>

            <nav>
                <a href="index.html" class="sidebar-link active">
                    <i class="bi bi-grid-1x2-fill"></i>
                    Dashboard
                </a>

                <a href="livros.php" class="sidebar-link">
                    <i class="bi bi-journal-bookmark-fill"></i>
                    Livros
                </a>

                <a href="usuarios.php" class="sidebar-link">
                    <i class="bi bi-people-fill"></i>
                    Usuários
                </a>

                <a href="locações.php" class="sidebar-link">
                    <i class="bi bi-arrow-left-right"></i>
                    Locações
                </a>

                <a href="sair.php" class="sidebar-link">
                    <i class="bi bi-box-arrow-right"></i>
                    Sair
                </a>
            </nav>

            <div class="sidebar-footer">
                <div class="small text-white-50 mb-1">Sistema</div>
                <div class="fw-bold">Locadora de Livros</div>
                <div class="small text-white-50">Painel versão 2.0</div>
            </div>

        </aside>

        <!-- Conteúdo -->
        <main class="content">

            <!-- Topbar -->
            <header class="topbar d-flex align-items-center justify-content-between gap-3">

                <div class="d-flex align-items-center gap-3 flex-grow-1">
                    <button class="btn btn-outline-secondary btn-menu-mobile rounded-4" id="btnMenu">
                        <i class="bi bi-list"></i>
                    </button>

                    <div>
                        <div class="fw-bold fs-5">Painel Administrativo</div>
                        <div class="small text-muted">Controle geral da biblioteca</div>
                    </div>

                    <div class="search-box ms-lg-4">
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-search"></i>
                            </span>
                            <input type="text" class="form-control" placeholder="Pesquisar livro, usuário ou locação...">
                        </div>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-3">

                    <div class="theme-palette d-none d-md-flex" title="Alterar cores">
                        <button class="theme-dot theme-purple" data-theme="purple" aria-label="Tema roxo"></button>
                        <button class="theme-dot theme-green" data-theme="green" aria-label="Tema verde"></button>
                        <button class="theme-dot theme-blue" data-theme="blue" aria-label="Tema azul"></button>
                        <button class="theme-dot theme-orange" data-theme="orange" aria-label="Tema laranja"></button>
                    </div>

                    <div class="dropdown">
                        <button class="btn p-0 border-0 bg-transparent d-flex align-items-center gap-2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/img/admin.jpg" class="admin-photo" alt="Foto do administrador"
                                onerror="this.src='https://ui-avatars.com/api/?name=Admin+Eugenio&background=6d28d9&color=fff'">

                            <span class="d-none d-md-block text-start">
                                <span class="d-block fw-bold">Admin Eugênio</span>
                                <span class="d-block small text-muted">Administrador</span>
                            </span>

                            <i class="bi bi-chevron-down text-muted d-none d-md-inline"></i>
                        </button>

                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow rounded-4 mt-3">
                            <li class="px-3 py-2">
                                <strong>Admin Eugênio</strong>
                                <div class="small text-muted">admin@site.com</div>
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

            </header>

            <!-- Hero -->
            <section class="page-hero">
                <h1>Bem-vindo ao painel da biblioteca</h1>

                <p class="mb-4">
                    Acompanhe rapidamente os livros disponíveis, usuários cadastrados, locações em andamento e devoluções
                    pendentes.
                </p>

                <div class="hero-actions d-flex flex-wrap gap-2">
                    <a href="livros.php" class="btn btn-light fw-bold rounded-pill px-4">
                        <i class="bi bi-plus-circle me-1"></i>
                        Cadastrar livro
                    </a>

                    <a href="locações.php" class="btn btn-outline-light fw-bold rounded-pill px-4">
                        <i class="bi bi-arrow-left-right me-1"></i>
                        Registrar locação
                    </a>
                </div>
            </section>

            <!-- Cards -->
            <section class="row g-4 mt-1">

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card dashboard-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start justify-content-between">
                                <div>
                                    <div class="card-label mb-2">Livros</div>
                                    <div class="card-number">320</div>
                                </div>

                                <div class="card-icon">
                                    <i class="bi bi-book"></i>
                                </div>
                            </div>

                            <div class="small text-muted mt-3">
                                <i class="bi bi-arrow-up text-success"></i>
                                18 novos cadastrados
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card dashboard-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start justify-content-between">
                                <div>
                                    <div class="card-label mb-2">Usuários</div>
                                    <div class="card-number">154</div>
                                </div>

                                <div class="card-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                            </div>

                            <div class="small text-muted mt-3">
                                <i class="bi bi-person-check text-primary"></i>
                                Leitores ativos
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card dashboard-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start justify-content-between">
                                <div>
                                    <div class="card-label mb-2">Locações</div>
                                    <div class="card-number">42</div>
                                </div>

                                <div class="card-icon">
                                    <i class="bi bi-arrow-left-right"></i>
                                </div>
                            </div>

                            <div class="small text-muted mt-3">
                                <i class="bi bi-clock text-warning"></i>
                                Em andamento
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card dashboard-card">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-start justify-content-between">
                                <div>
                                    <div class="card-label mb-2">Pendências</div>
                                    <div class="card-number">07</div>
                                </div>

                                <div class="card-icon">
                                    <i class="bi bi-exclamation-triangle"></i>
                                </div>
                            </div>

                            <div class="small text-muted mt-3">
                                <i class="bi bi-bell text-danger"></i>
                                Devoluções em atraso
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Conteúdo inferior -->
            <section class="row g-4 mt-1">

                <!-- Tabela -->
                <div class="col-12 col-xl-8">
                    <div class="panel-box">
                        <div class="p-4 d-flex align-items-center justify-content-between gap-3 flex-wrap">
                            <div class="section-title mb-0">
                                <i class="bi bi-arrow-repeat text-primary"></i>
                                Últimas locações
                            </div>

                            <a href="locações.php" class="btn btn-sm btn-outline-primary rounded-pill fw-bold">
                                Ver todas
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Livro</th>
                                        <th>Usuário</th>
                                        <th>Retirada</th>
                                        <th>Devolução</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="book-cover-mini">
                                                    <i class="bi bi-book"></i>
                                                </div>

                                                <div>
                                                    <strong>PHP com MySQL</strong>
                                                    <div class="small text-muted">LIV-001</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Maria Santos</td>
                                        <td>15/05/2026</td>
                                        <td>22/05/2026</td>
                                        <td>
                                            <span class="badge-status badge-ok">Ativa</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="book-cover-mini">
                                                    <i class="bi bi-book"></i>
                                                </div>

                                                <div>
                                                    <strong>JavaScript Moderno</strong>
                                                    <div class="small text-muted">LIV-002</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Lucas Lima</td>
                                        <td>14/05/2026</td>
                                        <td>21/05/2026</td>
                                        <td>
                                            <span class="badge-status badge-ok">Ativa</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="book-cover-mini">
                                                    <i class="bi bi-book"></i>
                                                </div>

                                                <div>
                                                    <strong>HTML e CSS</strong>
                                                    <div class="small text-muted">LIV-003</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Ana Beatriz</td>
                                        <td>08/05/2026</td>
                                        <td>15/05/2026</td>
                                        <td>
                                            <span class="badge-status badge-alert">Hoje</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="book-cover-mini">
                                                    <i class="bi bi-book"></i>
                                                </div>

                                                <div>
                                                    <strong>Banco de Dados</strong>
                                                    <div class="small text-muted">LIV-004</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Carlos Pereira</td>
                                        <td>02/05/2026</td>
                                        <td>09/05/2026</td>
                                        <td>
                                            <span class="badge-status badge-danger-soft">Atrasada</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Atividades -->
                <div class="col-12 col-xl-4">
                    <div class="panel-box p-4 h-100">
                        <div class="section-title">
                            <i class="bi bi-activity text-warning"></i>
                            Atividades recentes
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="bi bi-plus-circle"></i>
                            </div>

                            <div>
                                <strong>Novo livro cadastrado</strong>
                                <div class="small text-muted">PHP com MySQL foi adicionado.</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="bi bi-person-plus"></i>
                            </div>

                            <div>
                                <strong>Novo usuário</strong>
                                <div class="small text-muted">Maria Santos entrou no sistema.</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="bi bi-arrow-left-right"></i>
                            </div>

                            <div>
                                <strong>Locação registrada</strong>
                                <div class="small text-muted">JavaScript Moderno foi alugado.</div>
                            </div>
                        </div>

                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="bi bi-exclamation-triangle"></i>
                            </div>

                            <div>
                                <strong>Devolução pendente</strong>
                                <div class="small text-muted">Banco de Dados está em atraso.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <footer class="text-center text-muted small py-4">
                © 2026 Locadora de Livros — Painel Administrativo
            </footer>

        </main>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const btnMenu = document.getElementById("btnMenu");
        const sidebarAdmin = document.getElementById("sidebarAdmin");
        const mobileBackdrop = document.getElementById("mobileBackdrop");

        btnMenu.addEventListener("click", () => {
            sidebarAdmin.classList.add("show");
            mobileBackdrop.classList.add("show");
        });

        mobileBackdrop.addEventListener("click", () => {
            sidebarAdmin.classList.remove("show");
            mobileBackdrop.classList.remove("show");
        });

        const temas = {
            purple: {
                primary: "#6d28d9",
                secondary: "#4f46e5",
                accent: "#f59e0b",
                sidebar: "#141322"
            },
            green: {
                primary: "#059669",
                secondary: "#10b981",
                accent: "#f59e0b",
                sidebar: "#10231d"
            },
            blue: {
                primary: "#2563eb",
                secondary: "#0ea5e9",
                accent: "#f97316",
                sidebar: "#111c33"
            },
            orange: {
                primary: "#ea580c",
                secondary: "#f59e0b",
                accent: "#7c3aed",
                sidebar: "#24160f"
            }
        };

        const botoesTema = document.querySelectorAll("[data-theme]");

        botoesTema.forEach((botao) => {
            botao.addEventListener("click", () => {
                const temaSelecionado = botao.getAttribute("data-theme");
                const tema = temas[temaSelecionado];

                document.documentElement.style.setProperty("--primary", tema.primary);
                document.documentElement.style.setProperty("--secondary", tema.secondary);
                document.documentElement.style.setProperty("--accent", tema.accent);
                document.documentElement.style.setProperty("--sidebar", tema.sidebar);

                localStorage.setItem("temaAdminLivros", temaSelecionado);
            });
        });

        const temaSalvo = localStorage.getItem("temaAdminLivros");

        if (temaSalvo && temas[temaSalvo]) {
            const tema = temas[temaSalvo];

            document.documentElement.style.setProperty("--primary", tema.primary);
            document.documentElement.style.setProperty("--secondary", tema.secondary);
            document.documentElement.style.setProperty("--accent", tema.accent);
            document.documentElement.style.setProperty("--sidebar", tema.sidebar);
        }
    </script>

</body>

</html>