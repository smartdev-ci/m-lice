<?php
function addSport()
{
    require('../config/config.php');
    $image = 'IMG' . '' . $_FILES['image_sport']['name'];
    $target = '/mlice/administration/upload/sport/'.$image;

    $titre = $_POST['titre_sport'];
    $descriptif =  $_POST['description_sport'];
    $sport =  $_POST['article'];
    $date =  $_POST['date_publication'];
    
    $query = $db->prepare(' INSERT INTO sport VALUES (NULL, :image_sport, :titre_sport, :description_sport, :article, :date_publication) ');

    $query->bindvalue(':image_sport', $target, PDO::PARAM_STR);
    $query->bindvalue(':titre_sport', $titre, PDO::PARAM_STR);
    $query->bindvalue(':description_sport', $descriptif, PDO::PARAM_STR);
    $query->bindvalue(':article', $sport, PDO::PARAM_STR);
    $query->bindvalue(':date_publication', $date, PDO::PARAM_STR);

    $query -> execute();
}

function getAllSport()
{
    include ('../../config/config.php');

    $GLOBALS['getAllSport'] = $db->query('SELECT * FROM sport');
}

function getSport($id)
{
    require ('../../config/config.php');

    $GLOBALS['getSport'] = $db->query(' SELECT * FROM sport WHERE id_sport = '.$id);
}
