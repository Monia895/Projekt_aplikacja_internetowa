<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>
</head>
<body>
    <header>
        <a href="/">Powrót do strony głównej</a>
        <h1>Katalog kosmetyków</h1>
    </header>
    <main>
        <!-- TODO: Zastąpić to pętlą pobierającą dane z bazy z przyszłych laboratoriów -->
        <article>
            <h2>Serum nawilżające</h2>
            <a href="/products/1">Sprawdź skład i szczegóły</a>
        </article>
        <article>
            <h2>Krem z filtrem SPF 50</h2>
            <a href="/products/2">Sprawdź skład i szczegóły</a>
        </article>
    </main>
</body>
</html>