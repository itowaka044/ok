<?php

// Não mudar nada aqui, tudo deve funcinar normalmente
/// ---------------------------------------------------------------

// Mini gerenciador de rotas usando match
// Captura a rota amigável (ex.: 'login', 'fornecedores/edit/5')
$url = $_GET['url'] ?? null;
$url = explode("/", $url);
// print_r($url);
// echo "<hr>";

$pagina =  $url[0];

if (isset($url[1])) {
    $pagina = "{$url[0]}/$url[1]";
}

/// ---------------------------------------------------------------


// Inclui controllers
require __DIR__ . '/controllers/HomeController.php';
require __DIR__ . '/controllers/FornecedorController.php';
require __DIR__ . '/controllers/ServicoController.php';

match ($pagina) {
    'login'                     => HomeController::login(),
    'logout'                    => HomeController::logout(),
        
    'fornecedores'              => FornecedorController::index(),
    'fornecedores/novo'         => FornecedorController::novo(),
    'fornecedores/apagar'      => FornecedorController::apagar(),
    'fornecedores/criar'        => FornecedorController::criarFornecedor(),

    'servicos/ver'              => ServicoController::verServicos(),
    'servicos/editar'           => ServicoController::editarServico(),
    'servicos/atualizar'        => ServicoController::atualizarServico(),
    'servicos/apagar'           => ServicoController::apagarServico(),

    default                     => FornecedorController::index(),
};

exit;
