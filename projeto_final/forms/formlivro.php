<?php
defined('BASEPATH') or exit('Acesso não permitido');
?>

<style>
.usuario-section {
    min-height: calc(100vh - 80px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 15px;
    background: linear-gradient(135deg, #eef5ff, #f8fafc);
}

.usuario-card {
    width: 100%;
    max-width: 780px;
    border: 0;
    border-radius: 18px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.10);
}
</style>




<section class="usuario-section">
    <div class="card usuario-card">

    <?php

if(!empty($_GET['retorno'])) {
$retorno = $_GET['retorno'];

if($retorno=="OK"):
echo ('<div
    class="alert alert-success"
    role="alert"
>
    <strong>Cadastrado com sucesso</strong>
</div>');

else:
  
    echo ('<div
    class="alert alert-danger"
    role="alert"
>
    <strong>Senhas divergentes</strong>
</div>');
endif;

}

?>

        <div class="card-header bg-white p-4">
            <h1 class="h4 mb-1">
                <i class="bi bi-person-plus text-primary me-2"></i>
                Lívro
            </h1>
        </div>

        <div class="card-body p-4">

            Aqui form

        </div>
    </div>
</section>
