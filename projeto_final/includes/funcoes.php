<?php

defined('BASEPATH') or exit('Acesso não permitido');

function e($valor)
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}

function dataBrasil($data)
{
    if (empty($data)) {
        return '';
    }

    return date('d/m/Y', strtotime($data));
}
