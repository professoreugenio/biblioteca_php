<?php

defined('BASEPATH') or exit('Acesso não permitido');

function e($valor)
{
    return htmlspecialchars((string) $valor, ENT_QUOTES, 'UTF-8');
}

function base64url_encode($dados)
{
    return rtrim(strtr(base64_encode($dados), '+/', '-_'), '=');
}

function base64url_decode($dados)
{
    $resto = strlen($dados) % 4;

    if ($resto) {
        $dados .= str_repeat('=', 4 - $resto);
    }

    return base64_decode(strtr($dados, '-_', '+/'));
}

function encrypt_secure($valor, $acao = 'e')
{
    $metodo = 'AES-256-CBC';

    $chave = hash('sha256', "amor", true);

    if ($acao === 'e') {

        $iv = random_bytes(openssl_cipher_iv_length($metodo));

        $valorCriptografado = openssl_encrypt(
            (string) $valor,
            $metodo,
            $chave,
            OPENSSL_RAW_DATA,
            $iv
        );

        if ($valorCriptografado === false) {
            return false;
        }

        $hmac = hash_hmac('sha256', $iv . $valorCriptografado, $chave, true);

        return base64url_encode($iv . $hmac . $valorCriptografado);
    }

    if ($acao === 'd') {

        $dados = base64url_decode((string) $valor);

        if ($dados === false) {
            return false;
        }

        $tamanhoIv = openssl_cipher_iv_length($metodo);
        $tamanhoHmac = 32;

        if (strlen($dados) < ($tamanhoIv + $tamanhoHmac)) {
            return false;
        }

        $iv = substr($dados, 0, $tamanhoIv);
        $hmacRecebido = substr($dados, $tamanhoIv, $tamanhoHmac);
        $valorCriptografado = substr($dados, $tamanhoIv + $tamanhoHmac);

        $hmacCalculado = hash_hmac('sha256', $iv . $valorCriptografado, $chave, true);

        if (!hash_equals($hmacRecebido, $hmacCalculado)) {
            return false;
        }

        return openssl_decrypt(
            $valorCriptografado,
            $metodo,
            $chave,
            OPENSSL_RAW_DATA,
            $iv
        );
    }

    return false;
}
