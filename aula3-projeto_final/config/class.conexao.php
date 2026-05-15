<?php

defined('BASEPATH') or exit('Acesso não permitido');

class Config
{
    private static string $local = "localhost";
    private static string $banco = "biblioteca_php";
    private static string $usuario = "root";
    private static string $senha = "";

    private static ?PDO $con = null;

    public static function connect(): PDO
    {
        if (self::$con instanceof PDO) {
            return self::$con;
        }

        $dsn = 'mysql:host=' . self::$local . ';dbname=' . self::$banco . ';charset=utf8mb4';

        $opcoes = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8 COLLATE utf8_general_ci"
        ];

        try {
            self::$con = new PDO($dsn, self::$usuario, self::$senha, $opcoes);
            return self::$con;

        } catch (PDOException $e) {
            error_log('Erro de conexão com o banco: ' . $e->getMessage());
            die('Erro ao conectar com o banco de dados.');
        }
    }
}
