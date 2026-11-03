<?php
declare(strict_types=1);

namespace App\Controller;

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