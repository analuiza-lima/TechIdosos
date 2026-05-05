<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once 'controller/IdososController.php';
require_once 'controller/TarefaController.php';
require_once 'controller/LicaoController.php';
require_once 'controller/NoticiasController.php';
require_once 'controller/TelaInicialController.php'; 


require_once 'model/Idoso.php';
require_once 'model/LicaoModel.php';
require_once 'model/NoticiasModel.php';

require_once 'model/LinksModel.php';
require_once 'controller/LinksController.php';

define("APP", "http://localhost/trabalho-grupo-bruna/mvc");



// rota padrão = HOME
$url = isset($_GET['url']) ? $_GET['url'] : 'telainicial/index';

$partes = explode('/', $url);

// monta nome do controller
$nomeControlador = ucfirst(strtolower($partes[0])) . 'Controller';

// define método
$acao = isset($partes[1]) ? $partes[1] : 'listar';

// ================= EXECUÇÃO =================

// verifica controller
if (!class_exists($nomeControlador)) {
    die("Controller não encontrado: " . $nomeControlador);
}

$controlador = new $nomeControlador();

// verifica método
if (!method_exists($controlador, $acao)) {
    die("Ação não encontrada: " . $acao);
}

// executa
if (isset($partes[2])) {
    $controlador->$acao($partes[2]);
} else {
    $controlador->$acao();
}