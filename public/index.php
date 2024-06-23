<?php

declare(strict_types=1);

use School\app\Handler;

$uri = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Handler;

switch ($uri) {
    case '/':
        echo $app->homeView();
        break;
    case '/Academie':
        echo $app->academieView();
        break;
    case '/About':
        echo $app->aboutView();
        break;
    case '/Form':
        echo $app->formView();
        break;
    case '/Game':
        echo $app->gameView();
        break;
    case '/addIns':
        echo $app->addIns();
        break;
    case '/LogIn':
        echo $app->LogIn();
        break;
    case '/Logout':
        echo $app->Logout();
        break;
    case '/AdminPanel':
        echo $app->AdminPanel();
        break;
    case '/Contact':
        echo $app->Contact();
        break;
    case '/AddContact':
        echo $app->AddContact();
        break;
    default:
        $app->defaultRedirect();
        break;
}
