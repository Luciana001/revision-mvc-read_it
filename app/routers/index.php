<?php

// Route par défaut
// Pattern: / (url = http://www.....public/)
// ctrl: postController.php
// action: index
include_once '../app/controllers/postController.php';
\App\Controllers\PostsController\indexAction($connexion);