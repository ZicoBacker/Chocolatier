<?php

declare(strict_types=1);

namespace School\app;

abstract class BaseHandler
{
    protected function render(string $view, array $args = []): string
    {
        $viewPath = __DIR__. "/../views/{$view}.php";;

        if (!file_exists($viewPath))
            return "{$viewPath} does not exist}";

        extract($args, EXTR_SKIP);

        ob_start();
        require_once $viewPath;
        return ob_get_clean();
    }

    protected function redirect(string $uri, int $response_code = 302, array $errors = []): never
    {
        http_response_code($response_code);

        header("Location: $uri");
        exit;
    }

    protected function referredPage(): string
    {
        return $_SERVER['HTTP_REFERER'] ?? '/';
    }

    protected function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }
}