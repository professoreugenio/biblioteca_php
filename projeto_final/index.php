<?php
require_once __DIR__ . '/config/caminhos.php';

?>


<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
    <?php require_once INCLUDESHOME_ROOT . '/head.php'; ?>
</head>

<body>
    <header>
        <!-- aqui nav -->
        <?php require_once INCLUDESHOME_ROOT . '/nav.php'; ?>
    </header>



    <main>
        <section id="servicos" class="py-5 bg-light">
            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="fw-bold">Biblioteca</h2>
                    <p class="text-muted">Exemplo de cards para apresentar serviços oferecidos.</p>
                    <?php echo $dados['nome_site']; ?>
                </div>

                <?php require_once __DIR__ . '/config/caminhos.php' ?>
                <!doctype html>
                <html lang="pt-br" data-bs-theme="light">

                <head>
                    <?php require_once CONFIGHOME_ROOT . '/head.php' ?>

                </head>

                <body>
                    <header>
                        <?php require_once CONFIGHOME_ROOT . '/nav.php' ?>
                    </header>


                    <main style="margin-top: 75px;">
                        <section id="produtos" class="py-5">
                            <div class="container">

                               
                                <div class="text-center mb-5">
                                    <h2 class="fw-bold">Produtos</h2>
                                    <p class="text-muted">Exemplo de cards para apresentar produtos de forma organizada.</p>
                                </div>


                                <div class="row g-4">

                                    <div class="col-md-6 col-lg-4">
                                        <div class="card h-100 shadow-sm border-0">
                                            <div class="card-body">
                                                <i class="bi bi-box-seam display-4 text-warning"></i>
                                                <h5 class="card-title mt-3">Notebook Pro</h5>
                                                <p class="card-text text-muted">Notebook ideal para estudos, trabalho e programação.</p>
                                                <h4 class="text-success">R$ 3.499,00</h4>
                                                <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="card h-100 shadow-sm border-0">
                                            <div class="card-body">
                                                <i class="bi bi-mouse display-4 text-warning"></i>
                                                <h5 class="card-title mt-3">Mouse Sem Fio</h5>
                                                <p class="card-text text-muted">Mouse ergonômico com conexão USB e bateria durável.</p>
                                                <h4 class="text-success">R$ 89,90</h4>
                                                <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-lg-4">
                                        <div class="card h-100 shadow-sm border-0">
                                            <div class="card-body">
                                                <i class="bi bi-keyboard display-4 text-warning"></i>
                                                <h5 class="card-title mt-3">Teclado Gamer</h5>
                                                <p class="card-text text-muted">Teclado com iluminação LED e teclas confortáveis.</p>
                                                <h4 class="text-success">R$ 159,90</h4>
                                                <a href="#" class="btn btn-outline-primary w-100">Ver detalhes</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>
                    </main>
                    <?php require_once CONFIGHOME_ROOT . '/footer.php' ?>
                    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
                    <script
                        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
                        crossorigin="anonymous"></script>
                </body>


                </html>