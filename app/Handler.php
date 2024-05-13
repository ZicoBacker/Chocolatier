<?php

declare(strict_types=1);

namespace School\app;

use Dotenv\Dotenv;

final class Handler extends BaseHandler
{
    public function __construct()
    {
        $dotenv = Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();
        session_start();
    }

    public function homeView(): string
    {
        return $this->render('index', [
            'title' => 'Home'
        ]);
    }

    public function academieView(): string
    {
        return $this->render('academie', [
            'title' => 'Info opleiding'
        ]);
    }

    public function aboutusView(): string
    {
        return $this->render('aboutus', [
            'title' => 'Info school'
        ]);
    }

    public function formView(): string
    {
        return $this->render('form', [
            'title' => 'Inschrijven'
        ]);
    }
    public function gameView(): string
    {
        return $this->render('game', [
            'title' => 'Spelletje'
        ]);
    }
    
    public function defaultRedirect(): void
    {
        header('Location: /');
    }




    
}