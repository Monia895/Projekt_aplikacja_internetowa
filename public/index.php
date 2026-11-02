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

$message = "Hi There! Let's start!";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My first Docker app</title>
</head>
<body>
    <h1><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></h1>
</body>
</html>