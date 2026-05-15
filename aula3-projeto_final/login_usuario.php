<?php require_once __DIR__ . '/config/caminhos.php' ?>

<?php

if(!empty($_POST['btloginusuario'])) {

$email = $_POST['email']??'';
$senha = $_POST['senha']??'';

try {
    //code...
} catch (PDOException) {
    //throw $th;
}

}
 ?>