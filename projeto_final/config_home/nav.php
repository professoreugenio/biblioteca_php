<?php
$nv = 1;
if (!empty($_GET['nv'])) {
    $nv = $_GET['nv'];
}
?>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#inicio">
                <i class="bi bi-grid-1x2-fill text-warning"></i>
                Minha Aplicação  <?php echo $nv;?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menuPrincipal">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nv == 1) {
                                                echo 'active';
                                            } ?>" href="index.php?nv=1">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nv == 2) {
                                                echo 'active';
                                            } ?>" href="home_livros.php?nv=2">Lívros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nv == 3) {
                                                echo 'active';
                                            } ?>" href="home_termos.php?nv=3">Termos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nv == 4) {
                                                echo 'active';
                                            } ?>" href="home_contato.php?nv=4">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($nv == 5) {
                                                echo 'active';
                                            } ?>" href="login.php?nv=5">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>