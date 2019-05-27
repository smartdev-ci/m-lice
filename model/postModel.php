<?php
function addPost()
{
    require('../config/config.php');
    $image = 'IMG' . '' . $_FILES['image_post']['name'];
    $target = '/mlice/administration/upload/post/'.$image;

    $titre = $_POST['titre_post'];
    $descriptif =  $_POST['description_post'];
    $post =  $_POST['post'];
    $date =  $_POST['date_publication'];
    
    $query = $db->prepare(' INSERT INTO articles VALUES (NULL, :image_post, :titre_post, :description_post, :post, :date_publication) ');

    $query->bindvalue(':image_post', $target, PDO::PARAM_STR);
    $query->bindvalue(':titre_post', $titre, PDO::PARAM_STR);
    $query->bindvalue(':description_post', $descriptif, PDO::PARAM_STR);
    $query->bindvalue(':post', $post, PDO::PARAM_STR);
    $query->bindvalue(':date_publication', $date, PDO::PARAM_STR);

    $query -> execute();
}

function getAllPosts()
{
    require('../../config/config.php');

    $GLOBALS['getAllPost'] = $db->query('SELECT * FROM articles');
    
}

function getPost($id)
{
    require('../../config/config.php');

    $GLOBALS['getPost'] = $db->query(' SELECT * FROM articles WHERE id_post = '.$id);
    
}
