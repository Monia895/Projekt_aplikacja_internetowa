<?php
declare(strict_types=1);

namespace App\Controller;

final class DefaultController extends AppController
{
    public function index(): void
    {
        $this->render('home', [
            'pageTitle' => 'SkinHarmony | Świadoma pielęgnacja cery',
        ]);
    }

    public function quiz(): void
    {
        $this->render('quiz', [
            'pageTitle' => 'Diagnoza cery | SkinHarmony',
        ]);
    }

    public function notFound(): void
    {
        $this->render('not-found', [
            'pageTitle' => 'Nie znaleziono strony',
        ]);
    }
}