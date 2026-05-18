# biblioteca_php
# Sistema de Locação de Livros — biblioteca_php

Sistema web desenvolvido em **PHP com MySQL**, utilizando **PDO**, **Bootstrap**, **SESSION**, autenticação de administrador, cadastro de livros, upload de imagem, listagem por categoria e estrutura organizada por módulos.

## 📌 Objetivo do projeto

O objetivo deste projeto é criar uma aplicação simples para gerenciamento de uma biblioteca, permitindo:

- Login administrativo;
- Cadastro de usuários;
- Cadastro de livros;
- Upload da imagem/capa do livro;
- Listagem de livros;
- Filtro de livros por categoria;
- Organização do projeto com arquivos reutilizáveis;
- Conexão com banco de dados usando PDO;
- Proteção de páginas com SESSION.

---

## 🛠️ Tecnologias utilizadas

- PHP
- MySQL
- PDO
- XAMPP
- phpMyAdmin
- HTML5
- CSS3
- Bootstrap 5
- Bootstrap Icons
- JavaScript básico
- Git e GitHub

---

## 📁 Estrutura principal do projeto


biblioteca_php/
│
├── index.php
├── admin_login.php
├── admin_criar.php
├── admin_painel.php
├── admin_logout.php
│
├── livros.php
├── livros_novo.php
├── livros_editar.php
├── livros_excluir.php
│
├── usuarios.php
├── usuarios_novo.php
│
├── locacoes.php
├── reservas_nova.php
│
├── config/
│   ├── caminhos.php
│   ├── class.conexao.php
│   └── sessao.php
│
├── includes/
│   ├── funcoes.php
│   ├── menu.php
│   ├── menu_admin.php
│   ├── rodape.php
│   ├── verifica_login.php
│   └── verifica_admin.php
│
├── sections/
│   ├── SectionPublicacoesHome.php
│   └── SectionPublicacoesCategorias.php
│
├── forms/
│   ├── FormLogin.php
│   ├── FormLivro.php
│   ├── FormUsuario.php
│   └── FormReserva.php
│
├── uploads/
│   └── livros/
│
└── assets/
    ├── css/
    │   ├── style.css
    │   ├── home.css
    │   └── admin.css
    │
    ├── js/
    │   └── app.js
    │
    └── img/

###⚙️ Etapas de implementação

1. Configuração do ambiente

Para executar o projeto localmente, foi utilizado o XAMPP.

Passos:
Instalar o XAMPP.
Iniciar os serviços:
Apache;
MySQL.
Criar a pasta do projeto dentro de:
C:\xampp\htdocs\biblioteca_php
Acessar o projeto pelo navegador:
http://localhost/biblioteca_php
2. Criação do banco de dados

O banco de dados foi criado no phpMyAdmin.

Nome do banco:
biblioteca_db
Acesso ao phpMyAdmin:
http://localhost/phpmyadmin
3. Criação da tabela de usuários

A tabela usuarios armazena os usuários do sistema, incluindo administradores e alunos.

CREATE TABLE IF NOT EXISTS usuarios (
    idusuario INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(180) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    tipo ENUM('admin','aluno') NOT NULL DEFAULT 'aluno',
    status ENUM('ativo','bloqueado') NOT NULL DEFAULT 'ativo',
    data_cadastro DATE NOT NULL,
    hora_cadastro TIME NOT NULL,
    PRIMARY KEY (idusuario),
    UNIQUE KEY unique_email (email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
4. Criação da tabela de livros

A tabela livros armazena os dados dos livros cadastrados no sistema.

CREATE TABLE IF NOT EXISTS livros (
    idlivro INT(11) NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(150) NOT NULL,
    autor VARCHAR(150) NOT NULL,
    categoria VARCHAR(80) NOT NULL,
    ano_publicacao INT(4) DEFAULT NULL,
    quantidade INT(11) NOT NULL DEFAULT 0,
    status ENUM('disponivel','reservado','locado') NOT NULL DEFAULT 'disponivel',
    descricao TEXT DEFAULT NULL,
    imagem VARCHAR(180) DEFAULT NULL,
    data_cadastro DATE NOT NULL,
    hora_cadastro TIME NOT NULL,
    PRIMARY KEY (idlivro)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
5. Criação da tabela de locações

A tabela locacoes será utilizada para registrar reservas, empréstimos e devoluções de livros.

CREATE TABLE IF NOT EXISTS locacoes (
    idlocacao INT(11) NOT NULL AUTO_INCREMENT,
    idlivro INT(11) NOT NULL,
    idusuario INT(11) NOT NULL,
    data_locacao DATE NOT NULL,
    data_prevista_devolucao DATE NOT NULL,
    data_devolucao DATE DEFAULT NULL,
    status ENUM('aberta','devolvida','atrasada') NOT NULL DEFAULT 'aberta',
    multa DECIMAL(10,2) NOT NULL DEFAULT 0.00,
    observacao TEXT DEFAULT NULL,
    data_cadastro DATE NOT NULL,
    hora_cadastro TIME NOT NULL,
    PRIMARY KEY (idlocacao)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
6. Criação da tabela de publicações

A tabela publicacoes foi criada para exibir conteúdos na página inicial e na página de publicações por categoria.

CREATE TABLE IF NOT EXISTS publicacoes (
    idpublicacao INT(11) NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(150) NOT NULL,
    categoria VARCHAR(80) NOT NULL,
    resumo TEXT DEFAULT NULL,
    imagem VARCHAR(180) DEFAULT NULL,
    link_detalhes VARCHAR(180) DEFAULT NULL,
    status ENUM('ativo','oculto') NOT NULL DEFAULT 'ativo',
    data_publicacao DATE NOT NULL,
    hora_publicacao TIME NOT NULL,
    PRIMARY KEY (idpublicacao)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

### 7. Arquivo de caminhos

O arquivo config/caminhos.php centraliza os caminhos principais do sistema.

<?php

declare(strict_types=1);

define('BASEPATH', true);

define('PUBLIC_ROOT', dirname(__DIR__));

define('CONFIG_ROOT', PUBLIC_ROOT . '/config');

define('INCLUDES_ROOT', PUBLIC_ROOT . '/includes');

define('FORMS_ROOT', PUBLIC_ROOT . '/forms');

define('UPLOADS_ROOT', PUBLIC_ROOT . '/uploads');

define('UPLOADS_URL', 'uploads');

define('ASSETS_URL', '/biblioteca_php/assets');
8. Conexão com banco de dados

A conexão foi criada com PDO no arquivo config/class.conexao.php.

<?php

defined('BASEPATH') or exit('Acesso não permitido');

class Config
{
    private static string $local = "localhost";
    private static string $banco = "biblioteca_db";
    private static string $usuario = "root";
    private static string $senha = "";

    private static ?PDO $con = null;

    public static function connect(): PDO
    {
        if (self::$con instanceof PDO) {
            return self::$con;
        }

        $dsn = 'mysql:host=' . self::$local . ';dbname=' . self::$banco . ';charset=utf8';

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

Uso da conexão nas páginas:

$con = Config::connect();
9. Configuração de sessão

O arquivo config/sessao.php inicia e configura a sessão do sistema.

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
10. Funções auxiliares

O arquivo includes/funcoes.php contém funções reutilizáveis.

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

function limitarTexto($texto, $limite = 120)
{
    $texto = trim((string) $texto);

    if (mb_strlen($texto, 'UTF-8') <= $limite) {
        return $texto;
    }

    return mb_substr($texto, 0, $limite, 'UTF-8') . '...';
}
11. Cadastro do administrador inicial

O arquivo admin_criar.php cria o primeiro administrador do sistema.

A senha é protegida com:

password_hash($senha, PASSWORD_DEFAULT);

Exemplo de administrador inicial:

E-mail: admin@biblioteca.com
Senha: 123456

Após criar o administrador, o arquivo admin_criar.php deve ser removido ou bloqueado por segurança.

12. Login administrativo

A página admin_login.php realiza o login do administrador.

Principais etapas:

Receber e-mail e senha via POST;
Validar o e-mail;
Buscar usuário na tabela usuarios;
Verificar se o usuário é do tipo admin;
Verificar se está ativo;
Validar senha com password_verify();
Criar variáveis de sessão;
Redirecionar para admin_painel.php.

Exemplo de validação de senha:

password_verify($senha, $usuario['senha'])
13. Proteção de páginas administrativas

O arquivo includes/verifica_admin.php protege as páginas do painel administrativo.

<?php

defined('BASEPATH') or exit('Acesso não permitido');

if (empty($_SESSION['admin_logado'])) {
    header('Location: admin_login.php');
    exit;
}

if (($_SESSION['admin_tipo'] ?? '') !== 'admin') {
    header('Location: admin_login.php');
    exit;
}
14. Painel administrativo

A página admin_painel.php exibe indicadores gerais do sistema.

Indicadores exibidos:

Total de livros;
Total de usuários;
Total de reservas;
Livros disponíveis;
Locações abertas;
Locações atrasadas;
Últimos livros cadastrados.

As consultas usam SELECT COUNT(*).

Exemplo:

$stmt = $con->query("SELECT COUNT(*) AS total FROM livros");
$row = $stmt->fetch();
$totalLivros = (int) ($row['total'] ?? 0);
15. Cadastro de livros

A página livros_novo.php realiza o cadastro de livros.

Campos principais:

Título;
Autor;
Categoria;
Ano de publicação;
Quantidade;
Status;
Descrição;
Imagem.

O cadastro utiliza INSERT INTO livros.

$sql = "INSERT INTO livros
        (titulo, autor, categoria, ano_publicacao, quantidade, status, descricao, imagem, data_cadastro, hora_cadastro)
        VALUES
        (:titulo, :autor, :categoria, :ano_publicacao, :quantidade, :status, :descricao, :imagem, CURDATE(), CURTIME())";
16. Upload de imagem do livro

O upload de imagem usa:

$_FILES

A pasta de destino das imagens é:

uploads/livros/

O formulário precisa conter:

<form method="POST" action="" enctype="multipart/form-data">

O campo de imagem:

<input type="file" name="imagem" accept=".jpg,.jpeg,.png,.webp,image/jpeg,image/png,image/webp">

A imagem é validada e movida com:

move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoFisicoImagem);

O banco salva apenas o caminho da imagem:

uploads/livros/livro_20260515_143010_a9f2c1d8.jpg
17. Listagem de livros

A página livros.php exibe os livros cadastrados.

A consulta principal:

$sql = "SELECT idlivro, titulo, autor, categoria, ano_publicacao, quantidade, status, imagem, data_cadastro
        FROM livros
        ORDER BY idlivro DESC";

Os dados são exibidos em tabela usando foreach.

foreach ($livros as $livro) {
    echo e($livro['titulo']);
}
18. Filtro de livros por categoria

A página livros.php também possui filtro por categoria.

As categorias são carregadas com:

SELECT DISTINCT categoria
FROM livros
WHERE categoria <> ''
ORDER BY categoria ASC

Quando uma categoria é selecionada, a consulta usa:

WHERE categoria = :categoria

Exemplo:

$categoriaSelecionada = trim($_GET['categoria'] ?? '');

$sql = "SELECT idlivro, titulo, autor, categoria, ano_publicacao, quantidade, status, imagem, data_cadastro
        FROM livros
        WHERE categoria = :categoria
        ORDER BY idlivro DESC";

$stmt = $con->prepare($sql);
$stmt->bindValue(':categoria', $categoriaSelecionada);
$stmt->execute();

$livros = $stmt->fetchAll();
19. Página Home com publicações

A página index.php exibe as três últimas publicações do banco.

Consulta:

$sql = "SELECT idpublicacao, titulo, categoria, resumo, imagem, link_detalhes, data_publicacao
        FROM publicacoes
        WHERE status = 'ativo'
        ORDER BY data_publicacao DESC, idpublicacao DESC
        LIMIT 3";

Os arquivos utilizados na Home:

includes/Nav.php
sections/SectionPublicacoesHome.php
includes/Footer.php


### 20. Página de publicações por categoria

A página locacoes.php exibe publicações organizadas por categoria.

O filtro usa:

<select name="categoria">

E o PHP captura com:

$categoriaSelecionada = trim($_GET['categoria'] ?? '');

Quando uma categoria é selecionada:

$sql = "SELECT idpublicacao, titulo, categoria, resumo, imagem, link_detalhes, data_publicacao
        FROM publicacoes
        WHERE status = 'ativo'
        AND categoria = :categoria
        ORDER BY data_publicacao DESC, idpublicacao DESC";

### 21. Formulários modulares

Os formulários foram separados na pasta forms.

forms/
├── FormLogin.php
├── FormLivro.php
├── FormUsuario.php
└── FormReserva.php

As páginas principais carregam os formulários com:

require_once FORMS_ROOT . '/FormLivro.php';

Essa organização evita repetição de código e facilita manutenção.

### 22. Logout administrativo

O arquivo admin_logout.php encerra a sessão do administrador.

<?php

require_once __DIR__ . '/config/caminhos.php';
require_once CONFIG_ROOT . '/sessao.php';

unset($_SESSION['admin_logado']);
unset($_SESSION['admin_id']);
unset($_SESSION['admin_nome']);
unset($_SESSION['admin_email']);
unset($_SESSION['admin_tipo']);

session_regenerate_id(true);

header('Location: admin_login.php');
exit;
### 23. Padrão de segurança aplicado

O projeto utiliza os seguintes cuidados:

Conexão com PDO;
prepare() e bindValue() em consultas com dados externos;
password_hash() para proteger senhas;
password_verify() para validar login;
SESSION para autenticação;
session_regenerate_id(true) após login;
htmlspecialchars() na exibição de dados;
Validação de upload com finfo;
Renomeação de arquivos enviados;
Proteção de arquivos internos com BASEPATH.
24. Como executar o projeto
Baixe ou clone o repositório.
Coloque a pasta em:
C:\xampp\htdocs\biblioteca_php
Inicie Apache e MySQL no XAMPP.
Acesse o phpMyAdmin:
http://localhost/phpmyadmin
Crie o banco:
biblioteca_db
Execute os scripts SQL das tabelas.
Configure o banco no arquivo:
config/class.conexao.php
Acesse no navegador:
http://localhost/biblioteca_php
Crie o administrador inicial:
http://localhost/biblioteca_php/admin_criar.php
Acesse o login admin:
http://localhost/biblioteca_php/admin_login.php
