<?php

declare(strict_types=1);

spl_autoload_register(function(string $fqcn){
    $path =__DIR__ . '/' . str_replace(['App','\\'], ['src', '/'], $fqcn).'.php';

    if (!file_exists($path)){
        throw new LogicException("Le fichier '$path' est introuvable");
    }

    require_once($path);
});
