<?php

require_once 'Autoloader.php';
Autoloader::register();




Router::addRoute('addPost', '/add', App\Controller\AddPostcontroller::class);






Router::initialize();

if (isset($_GET['path'])) {
    switch ($_GET['path']) {
        case 'addPost' :
            addPost();
            break;
        case 'getPosts' :
            getPosts();
            break;
        case 'deletePosts' :
            deletePosts();
            break;
    }
}

