
<?php require_once __DIR__ . '/config/caminhos.php'; ?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <?php require_once INCLUDESHOME_ROOT.'/head.php';?>
    </head>

    <body>
        <header>
            <?php require_once INCLUDESHOME_ROOT .'/nav.php';?>
        </header>
        <main style="margin-top: 75px;">
        <section id="produtos" class="py-5">
            <div class="container">

                <div class="text-center mb-5">
                    <h2 class="fw-bold">Termos</h2>
                    <p class="text-muted">Exemplo de cards para apresentar produtos de forma organizada.</p>
                </div>

                <div class="row g-4">
                    ...
                </div>
            </div>
        </section>
    </main>
        <?php require_once INCLUDESHOME_ROOT .'/footer.php';?>

        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

