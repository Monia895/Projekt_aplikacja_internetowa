<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
    <header>
        <a href="/products">Wróć do katalogu</a>
    </header>
    <main>
        <h1>Szczegóły kosmetyku (ID wyjęte z URL: <?= $productId ?>)</h1>
        <p>Tutaj w przyszłości wyświetlimy skład INCI i funkcje składników z bazy.</p>
    </main>
</body>
</html>