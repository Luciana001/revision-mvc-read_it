<?php

namespace App\Models\TagModel;
use \PDO;

// liste de tous les tags lié à un post par son id
function findAllByPostId(PDO $connexion, int $id)
{
    $sql = "SELECT *
            FROM tags t
            JOIN posts_has_tags pht on t.id = pht.tag_id
            WHERE pht.post_id = :id
            ORDER BY t.name asc;
            ";

    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetchAll(PDO::FETCH_ASSOC);

}