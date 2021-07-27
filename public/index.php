<?php
declare(strict_types=1);

use App\Database\Database;
use App\Router\Router;

require_once('../Autoloader.php');


Database::connexion();


//Router::addRoute('addPost', '/posts', App\Controller\PostController\CreateController::class);
//Router::addRoute('getPost', '/posts/:id', App\Controllers\AddController::class);
Router::addRoute('getPosts', '/posts', App\Controller\PostController\ReadController::class);
//Router::addRoute('deletePosts', '/posts/:id', App\Controllers\AddController::class);
//
//Router::addRoute('addComment', '/comments/', App\Controllers\Commentcontroller::class);
//Router::addRoute('getComment', '/comments/:id', App\Controllers\Commentcontroller::class);
//Router::addRoute('getComments', '/comments', App\Controllers\Commentcontroller::class);
//Router::addRoute('deleteComments', '/comments/:id', App\Controllers\Commentcontroller::class);
//
//Router::addRoute('login', '/login', App\Controllers\Securitycontroller::class);
//Router::addRoute('logout', '/logout', App\Controllers\Securitycontroller::class);

Router::initialize();
