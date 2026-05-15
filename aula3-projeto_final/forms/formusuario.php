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
                Cadastro de Usuário
            </h1>

            <p class="text-muted mb-0">
                Cadastre usuários para acesso ao sistema.
            </p>
        </div>

        <div class="card-body p-4">

            <form method="POST" action="insertUsuario.php">

                <div class="mb-3">
                    <label for="nome" class="form-label">Nome completo</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="nome" 
                        name="nome" 
                        placeholder="Digite o nome completo"
                        
                    >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        id="email" 
                        name="email" 
                        placeholder="Digite o e-mail"
                        
                    >
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            id="senha" 
                            name="senha" 
                            placeholder="Digite a senha"
                            
                        >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="confirmar_senha" class="form-label">Confirmar senha</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            id="confirmar_senha" 
                            name="confirmar_senha" 
                            placeholder="Confirme a senha"
                            
                        >
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label for="tipo" class="form-label">Tipo de usuário</label>
                        <select class="form-select" id="tipo" name="tipo">
                            <option value="aluno">Aluno</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status">
                            <option value="ativo">Ativo</option>
                            <option value="bloqueado">Bloqueado</option>
                        </select>
                    </div>

                </div>
                <div class="d-flex gap-2">
                    <button type="submit" name="btinsertusuario" value="1" class="btn btn-primary">
                        <i class="bi bi-save me-1"></i>
                        Salvar usuário
                    </button>

                    <a href="usuarios.php" class="btn btn-outline-secondary">
                        Cancelar
                    </a>
                </div>

            </form>

        </div>
    </div>
</section>
