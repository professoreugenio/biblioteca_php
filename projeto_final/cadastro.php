<?php require_once __DIR__ . '/config/caminhos.php' ?>
<!doctype html>
<html lang="pt-br" data-bs-theme="light">

<head>
   <?php require_once INCLUDESHOME_ROOT.'/head.php';?>
</head>

<body>
    <header>
        <?php require_once CONFIGHOME_ROOT . '/nav.php' ?>
    </header>

    <div class="container" style="margin-top:85px">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Cadastro</h1>

                </div>
            </div>
        </div>
        <main>
            <?php require_once CONFIGFORM_ROOT .'/formlogin.php'; ?>       
        </main>

    
    <?php require_once CONFIGHOME_ROOT . '/footer.php' ?>

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>

