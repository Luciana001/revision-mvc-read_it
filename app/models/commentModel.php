<?php

namespace App\Models\CommentModel;
use \PDO;

// liste des commentaires liès au post via son id
function findAllByPostId(PDO $connexion, int $id)
{
    $sql = "SELECT *
            FROM comments
            WHERE post_id = :id
            ORDER BY created_at desc;
            ";
    
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetchAll(PDO::FETCH_ASSOC);
}