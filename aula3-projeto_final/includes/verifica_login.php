<?php

defined('BASEPATH') or exit('Acesso não permitido');

if (empty($_SESSION['usuario_logado'])) {
    header('Location: login.php');
    exit;
}
