<?php
if(isset($_GET['postId'])):
    // Route du détail d'un post
    // Pattern: ?id=xxx
    // ctrl : postController.php
    // action: show
    include_once '../app/controllers/postController.php';
    \App\Controllers\PostController\show($connexion, $_GET['postId']);
else :
    // Route par défaut
    // Pattern: / (url = http://www.....public/)
    // ctrl: postController.php
    // action: index
    include_once '../app/controllers/postController.php';
    \App\Controllers\PostController\indexAction($connexion);
endif;
