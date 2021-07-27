<?php
declare(strict_types=1);

namespace App\Router;

class Router
{
    /**
     * @var Route[];
     */
    private static array $routes = [];


    static function initialize()
    {
        return;
    }

    static function addRoute(string $name, string $path, string $controller): void
    {
        self::$routes[$name] = new Route($path, $controller);
    }

    /**
     * @param string $path
     * @return string
     */
    static function getController(string $path): string
    {
     //   array_filter(Route[] $routes, function($path){
////
//     //   });
        $controller = $path.;
        return $controller;
    }

    /**
     * @return Route[]
     */
    public static function getRoutes(): array
    {
        return self::$routes;
    }

    /**
     * @param Route[] $routes
     */
    public static function setRoutes(array $routes): void
    {
        self::$routes = $routes;
    }


}