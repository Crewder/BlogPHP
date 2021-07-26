<?php


class Router
{
    const routes = [];

    static function initialize()
    {

    }

    static function getRoutes(): array
    {
        return self::routes;
    }

    static function addRoute(string $name, string $path,string  $controller): void
    {
        self::routes[$name] = new Route($path, $controller);
    }

    static function findController(string $path): string
    {
        $controller = '';

        return $controller;
    }

}