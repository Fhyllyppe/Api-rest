<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../src/Controller/SelecaoController.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

$app = AppFactory::create();

$controller = new SelecaoController();


$app->get('/selecoes', [$controller, 'listar']);


$app->post('/selecoes', [$controller, 'inserir']);


$app->put('/selecoes/{id}', [$controller, 'atualizar']);


$app->delete('/selecoes/{id}', [$controller, 'excluir']);

$app->run();
