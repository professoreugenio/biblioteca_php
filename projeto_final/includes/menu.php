<?php

defined('BASEPATH') or exit('Acesso não permitido');

$paginaAtual = basename($_SERVER['PHP_SELF']);

$linksMenu = [
    [
        "texto" => "Painel",
        "url" => "painel.php",
        "icone" => "bi bi-speedometer2"
    ],
    [
        "texto" => "Livros",
        "url" => "livros.php",
        "icone" => "bi bi-book"
    ],
    [
        "texto" => "Locações",
        "url" => "locacoes.php",
        "icone" => "bi bi-arrow-left-right"
    ],
    [
        "texto" => "Dashboard",
        "url" => "dashboard.php",
        "icone" => "bi bi-bar-chart"
    ]
];
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="painel.php">
            <i class="bi bi-journal-bookmark-fill me-2"></i>
            Biblioteca PHP
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipal">
            <ul class="navbar-nav ms-auto">

                <?php foreach ($linksMenu as $link): ?>

                    <?php
                    $ativo = ($paginaAtual === $link['url']) ? 'active fw-bold' : '';
                    ?>

                    <li class="nav-item">
                        <a class="nav-link <?php echo $ativo; ?>" href="<?php echo $link['url']; ?>">
                            <i class="<?php echo $link['icone']; ?> me-1"></i>
                            <?php echo $link['texto']; ?>
                        </a>
                    </li>

                <?php endforeach; ?>

                <li class="nav-item">
                    <a class="nav-link text-warning" href="logout.php">
                        <i class="bi bi-box-arrow-right me-1"></i>
                        Sair
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>
