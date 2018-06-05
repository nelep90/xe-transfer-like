<?php
function getImages()
{
$bdd = new PDO('mysql:host=localhost;dbname=nenadp_xe_transfer;charset=utf8','nenadp','5yaNIFGBsT');
$response = $bdd->prepare("SELECT id, adress FROM img");
$response->fetchAll(PDO::FETCH_ASSOC);
$response->execute();
return $response;
}

function getImage($idimage)
{
    $db = new PDO('mysql:host=localhost;dbname=nenadp_xe_transfer;charset=utf8','nenadp','5yaNIFGBsT');

    $image = $db->prepare('SELECT id, adress FROM img WHERE id=:id');
    $choix = $idimage;
    $image->bindParam(":id", $choix,PDO::PARAM_INT);
    $image->execute();
    $imageView = $image->fetch(PDO::FETCH_ASSOC);
    $image->closeCursor();
    return $imageView;
}
?>