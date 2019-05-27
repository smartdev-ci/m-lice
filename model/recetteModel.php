<?php
function addFoods()
{   
    require_once('../config/config.php');
    $image = 'IMG' . '' . $_FILES['image_post']['name'];
    $target = '/mlice/administration/upload/post/'.$image;
    
    $titre = $_POST['titre_recette'];
    $description =  $_POST['description_recette'];
    $ingredient = $_POST['ingredient_recette'];
    $temps =  $_POST['tps_cuisson'];
    $nombre = $_POST['nbre_personne'];
    $contenu = $_POST['contenu_recette'];
    $date =  $_POST['date_publication'];
    

    $query = $db->prepare(' INSERT INTO recette VALUES (NULL, :image_recette, :titre_recette, :ingredient_recette, :description_recette, :tps_cuisson, :nbre_personne, :contenu_recette, :date_publication) ');

    $query->bindvalue(':image_recette', $target, PDO::PARAM_STR);
    $query->bindvalue(':titre_recette', $titre, PDO::PARAM_STR);
    $query->bindvalue(':ingredient_recette', $ingredient, PDO::PARAM_STR);
    $query->bindvalue(':description_recette', $description, PDO::PARAM_STR);
    $query->bindvalue(':tps_cuisson', $temps, PDO::PARAM_STR);
    $query->bindvalue(':nbre_personne', $nombre, PDO::PARAM_STR);
    $query->bindvalue(':contenu_recette', $contenu, PDO::PARAM_STR);
    $query->bindvalue(':date_publication', $date, PDO::PARAM_STR);
}

function getAllRecettes()
{
    require('../../config/config.php');

    $GLOBALS['getAllRecettes'] = $db->query('SELECT * FROM recette');
}

function getRecette($id)
{
    require('../../config/config.php');

    $GLOBALS['getRecette'] = $db->query(' SELECT * FROM recette WHERE id_recette = '.$id);
}