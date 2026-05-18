<?php require_once __DIR__ . '/config/caminhos.php' ?>

<?php

if (!empty($_POST['btloginusuario'])) {

    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    try {
        echo "aqui";
        $sql = "SELECT idusuario, nome, email, senha 
        FROM usuarios 
        WHERE email = :email 
        LIMIT 1";

        $query = $con->prepare($sql);
        $query->bindValue(':email', $email, PDO::PARAM_STR);
        $query->execute();

        $row = $query->fetch(PDO::FETCH_ASSOC);

        if ($row) {

            $senhabanco = $row['senha'];

            if (password_verify($senha, $senhabanco)) {

                $_SESSION['usuario_logado'] = true;
                $_SESSION['idusuario'] = $senhabanco;
                $_SESSION['nome'] =  $row['nome'];

                HEADER('Location:admin_index.php');
                exit();
            } else {
                echo "Usuário ou senha inválidos.";
            }
        } else {
            echo "Usuário ou senha inválidos.";
        }
    } catch (PDOException $e) {
        //throw $th;
    }
} else {
    echo "Vazio";
}
?>