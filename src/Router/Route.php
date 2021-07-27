<?php
declare(strict_types=1);

namespace App\Router;

class Route
{
    private string $path;
    private string $controller;

    public function __construct(string $path, string $controller)
    {
        $this->controller = $controller;
        $this->path = $path;
    }
}