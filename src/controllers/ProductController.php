<?php
declare(strict_types=1);

require_once __DIR__ . '/AppController.php';

final class ProductController extends AppController
{
    public function index(): void
    {
        $this->render('products', [
            'pageTitle' => 'Katalog kosmetyków | SkinHarmony',
        ]);
    }

    public function show(int $id): void
    {
        $this->render('product-details', [
            'pageTitle' => 'Szczegóły produktu | SkinHarmony',
            'productId' => $id,
        ]);
    }
}