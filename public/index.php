<?php
declare(strict_types=1);

require_once dirname(__DIR__) . '/src/controllers/DefaultController.php';
require_once dirname(__DIR__) . '/src/controllers/ProductController.php';
require_once dirname(__DIR__) . '/Routing.php';

$routing = new Routing();

// TRASY DLA SKIN HARMONY
$routing->get('/', DefaultController::class, 'index');
$routing->get('/quiz', DefaultController::class, 'quiz');
$routing->get('/products', ProductController::class, 'index');
$routing->get('/products/{id}', ProductController::class, 'show');

$routeFound = $routing->dispatch(
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['REQUEST_URI'],
);

if (!$routeFound) {
    http_response_code(404);
    (new DefaultController())->notFound();
}

