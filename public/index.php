<?php
declare(strict_types=1);

use App\Controller\DefaultController;
use App\Controller\ProductController;
use App\Routing;

require_once dirname(__DIR__) . '/vendor/autoload.php';

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

