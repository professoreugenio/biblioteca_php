<?php require_once __DIR__ . '/config/caminhos.php' ?>


<?php

if (!empty($_POST['btinsertusuario'])) {

  $nome = $_POST['nome'] ?? '';
  $email = $_POST['email'] ?? '';
  $senha = $_POST['senha'] ?? '';

  $confirmarsenha = $_POST['confirmar_senha'] ?? '';

  if ($confirmarsenha != $senha) {

    header('Location:cadastro_usuario.php?retorno=senha');
    exit();
  }
  
  $senha = password_hash($senha, PASSWORD_DEFAULT);
  $tipo = $_POST['tipo'] ?? '';
  $status = $_POST['status'] ?? '';

  try {

    $sql = "INSERT INTO usuarios (
nome,email,senha,tipo,status,data_cadastro,hora_cadastro
)VALUES(
:nome,:email,:senha,:tipo, :status, CURDATE(), CURTIME())";
    $query = $con->prepare($sql);
    $query->bindValue(':nome', $nome);
    $query->bindValue(':email', $email);
    $query->bindValue(':senha', $senha);
    $query->bindValue(':tipo', $tipo);
    $query->bindValue(':status', $status);
    if ($query->execute()) {

      header('Location:cadastro_usuario.php?retorno=OK');
      exit();
    } else {
      echo "Erro na inserção";
    }
  } catch (PDOException $e) {
    echo "Dados não inseridos";
  }
} else {

  echo "aqui";
}

?>