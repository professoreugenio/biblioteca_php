<?php

defined('BASEPATH') or exit('Acesso não permitido');

define('SESSION_TTL', 60 * 60 * 4);

if (session_status() !== PHP_SESSION_ACTIVE) {

    ini_set('session.gc_maxlifetime', (string) SESSION_TTL);
    ini_set('session.cookie_lifetime', (string) SESSION_TTL);

    session_set_cookie_params([
        'lifetime' => SESSION_TTL,
        'path'     => '/',
        'secure'   => (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'),
        'httponly' => true,
        'samesite' => 'Lax',
    ]);

    session_start();
}
