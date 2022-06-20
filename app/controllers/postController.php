<?php

namespace App\Controllers\PostsController;
use \PDO, \App\Models\PostsModel;

function indexAction (PDO $connexion){
    include_once '../app/models/postModel.php';
    $posts = \App\Models\PostModel\findAll($connexion);

    GLOBAL $content;
    ob_start();
    include_once '../app/views/posts/index.php';
    $content = ob_get_clean();
}