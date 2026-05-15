<?php

declare(strict_types=1);

define('BASEPATH', true);

define('PUBLIC_ROOT', dirname(__DIR__));

define('CONFIG_ROOT', PUBLIC_ROOT . '/config');
define('CONFIGHOME_ROOT', PUBLIC_ROOT . '/config_home');
define('CONFIGFORM_ROOT', PUBLIC_ROOT . '/forms');

define('INCLUDES_ROOT', PUBLIC_ROOT . '/includes');

define('INCLUDESHOME_ROOT', PUBLIC_ROOT . '/includes_home');

define('ASSETS_URL', '/biblioteca_php/assets');


require_once CONFIG_ROOT . '/class.conexao.php';


require_once CONFIG_ROOT.'/class.conexao.php';
$con=config::connect();

