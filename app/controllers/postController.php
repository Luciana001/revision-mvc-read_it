<?php

namespace App\Controllers\PostController;
use \PDO, \App\Models\PostModel;

function indexAction(PDO $connexion)
{
    include_once '../app/models/postModel.php';
    $posts = PostModel\findAll($connexion);

    GLOBAL $content;
    ob_start();
    include_once '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function show(PDO $connexion, int $id)
{
    include_once '../app/models/postModel.php';
    $postById = PostModel\findOneById($connexion, $id);

    GLOBAL $content;
    ob_start();
    include_once '../app/views/posts/show.php';
    $content = ob_get_clean();
}