<div class="pt-5 mt-5">
    <h3 class="mb-5"><?php echo COUNT($comments) ?> Comments</h3>
    <ul class="comment-list">
        <?php foreach($comments as $comment): ?>
        <li class="comment">
            <div class="comment-body">
                <h3>
                    <?php echo $comment['pseudo'] ?>
                </h3>
                <div class="meta mb-3">November 13, 2019 at 2:21pm</div>
                <p>
                    <?php echo $comment['content'] ?>
                </p>
            </div>
        </li>
        <?php endforeach ?>
    </ul>
    <!-- END comment-list -->

    <?php include_once "../app/views/comments/_formComment.php"; ?>
</div>