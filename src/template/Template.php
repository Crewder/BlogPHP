<?php

namespace App\template;

class Template
{
    private $file;
    private array $vars;

    function __construct($file)
    {
        if (is_readable($file) && is_executable($file)) {
            $this->file = $file;
        }
    }

    function __get($name)
    {
        return $this->vars[$name] ?? null;
    }

    function __set($name, $value)
    {
        $this->vars[$name] = $value;
    }

    function render(): bool
    {
        ob_start();
        extract($this->vars);
        require($this->file);

        return ob_get_clean();
    }
}