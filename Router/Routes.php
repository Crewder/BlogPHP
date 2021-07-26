<?php


class Route
{
    private string $path;
    private string $controller;

    function __construct(string $path, string $controller)
    {
        $this->controller = $controller;
        $this->path = $path;
    }

}