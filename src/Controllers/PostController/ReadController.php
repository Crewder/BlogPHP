<?php


namespace App\Controller\PostController;

use App\Repository\PostRepository;
use App\template\Template;


class ReadController
{
    private PostRepository $repo;
    private string $file;

    function __construct()
    {
        $this->repo = new PostRepository();
        $this->file = '../Views/index.php';
    }

    function __invoke()
    {
        $posts = $this->repo->findAll('Posts');
        $template = new Template($this->file);

        foreach ($posts as $key => $value) {
            $template->$key = $value;
        }

       return $template->render();
    }
}