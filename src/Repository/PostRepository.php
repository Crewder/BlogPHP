<?php


namespace App\Repository;

class PostRepository extends BaseRepository
{
    function createPost()
    {
        $this->create('Posts');
    }
}