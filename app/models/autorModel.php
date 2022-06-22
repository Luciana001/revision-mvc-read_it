<?php 

namespace App\Models\AutorModel;
use \PDO;

// détail de l'auteur du post via son id
function findOneById (PDO $connexion, int $id)
{
    $sql = " SELECT *, a.image as imageAutor, p.image as imagePost
            FROM authors a
            JOIN posts p on a.id = p.author_id
            WHERE p.id = :id;
            ";
    
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();

    return $rs->fetch(PDO::FETCH_ASSOC);
}