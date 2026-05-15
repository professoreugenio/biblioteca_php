<?php
defined('BASEPATH') or exit('Acesso não permitido');
?>

<style>
.login-section {
    min-height: calc(100vh - 80px);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 40px 15px;
    background: linear-gradient(135deg, #f4f6f9, #e9eef5);
}

.login-card {
    width: 100%;
    max-width: 430px;
    border: 0;
    border-radius: 18px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
}

.login-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    background: #0d6efd;
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 32px;
    margin: 0 auto 15px auto;
}

.btn-toggle-senha {
    border-left: 0;
}
</style>

<section class="login-section">
    <div class="card login-card">
        <div class="card-body p-4">

            <div class="text-center mb-4">
                <div class="login-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>

                <h1 class="h4 mb-1">Login Administrativo</h1>
                <p class="text-muted mb-0">Acesse o painel do sistema</p>
            </div>

            <form method="POST" action="" class="needs-validation">

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>

                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-envelope"></i>
                        </span>

                        <input 
                            type="email" 
                            class="form-control" 
                            id="email" 
                            name="email" 
                            placeholder="Digite seu e-mail"
                        >
                    </div>
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>

                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="bi bi-lock"></i>
                        </span>

                        <input 
                            type="password" 
                            class="form-control" 
                            id="senha" 
                            name="senha" 
                            placeholder="Digite sua senha"
                        >

                        <button 
                            type="button" name="btloginusuario" value="<?=time();?>"
                            class="btn btn-outline-secondary btn-toggle-senha" 
                            id="btnToggleSenha"
                        >
                            <i class="bi bi-eye" id="iconeSenha"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-box-arrow-in-right me-1"></i>
                    Entrar
                </button>

                <a href="cadastro_usuario.php">Cadastro</a>

            </form>

        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const senha = document.getElementById("senha");
    const btnToggleSenha = document.getElementById("btnToggleSenha");
    const iconeSenha = document.getElementById("iconeSenha");

    if (btnToggleSenha) {
        btnToggleSenha.addEventListener("click", function () {
            const senhaOculta = senha.type === "password";

            senha.type = senhaOculta ? "text" : "password";

            iconeSenha.classList.toggle("bi-eye");
            iconeSenha.classList.toggle("bi-eye-slash");
        });
    }
});
</script>
