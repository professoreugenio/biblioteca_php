<?php
$lk=1;
if(!empty($_GET['lk'])){
$lk=$_GET['lk'];
}

?>

<?php
if (empty($_SESSION['usuario_logado'])) {
    header('Location: index.php');
    exit;
}

?>

<!-- <?=($lk==1)?'active':''?> -->

<nav class="navbar navbar-expand-lg navbar-dark navbar-admin fixed-top">
        <div class="container-fluid px-lg-4">

            <a class="navbar-brand d-flex align-items-center" href="admin_index.php?lk=1">
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
                        <a class="nav-link <?=($lk==1)?'active':'' ?>" href="admin_index.php?lk=1">
                            <i class="bi bi-speedometer2 me-1"></i>
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?=($lk==2)?'active':'' ?>" href="admin_livros.php?lk=2">
                            <i class="bi bi-journal-bookmark me-1"></i>
                            Livros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?=($lk==3)?'active':'' ?>" href="admin_usuarios.php?lk=3">
                            <i class="bi bi-people me-1"></i>
                            Usuários
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?=($lk==4)?'active':'' ?>" href="admin_locacoes.php?lk=4">
                            <i class="bi bi-arrow-left-right me-1"></i>
                            Locações
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?=($lk==5)?'active':'' ?>" href="admin_sair.php?lk=5">
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
                            <?= $_SESSION['nome']; ?>
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