<p class="mb-5">
    <img src="assets/images/<?php echo $postById['image']; ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $postById['title']; ?></h1>
<p><?php echo $postById['content']; ?></p>

<!-- TAGS -->
<?php 
    include_once '../app/models/tagModel.php';
    $tags = \App\Models\TagModel\findAllByPostId($connexion, $id);
    include_once '../app/views/tags/_indexByPostId.php';
?>

<!-- AUTORS -->

<?php
    include_once '../app/models/autorModel.php';
    $author = \App\Models\AutorModel\findOneById($connexion, $id);
    include_once '../app/views/autors/_show.php';
?>

<!-- COMMENTS -->
<?php 
    include_once '../app/models/commentModel.php';
    $comments = \App\Models\CommentModel\findAllByPostId($connexion, $id);
    include_once '../app/views/comments/_indexByPostId.php';
?>