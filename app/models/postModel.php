<?php
namespace App\Models\PostModel;
use \PDO;

//liste des 10 derniers posts
function findAll(PDO $connexion){
    $sql = "SELECT *
            FROM posts
            ORDER BY created_at DESC
            LIMIT 10;";

    $rs = $connexion -> query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

// détail d'un post par son id
function findOneById(PDO $connexion, int $id)
{
    $sql = "SELECT *
            FROM posts
            WHERE id = :id;";
    
    $rs = $connexion -> prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}