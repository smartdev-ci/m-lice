<?php
function addVideos()
{
    require('../config/config.php');

    $titre = $_POST['titre_videos'];
    $descriptif =  $_POST['descriptif_video'];
    $contenu =  $_POST['contenu'];
    $date =  $_POST['date_publication'];
    $url = $_POST['url_video'];

    $query = $db->prepare(' INSERT INTO video VALUES (NULL, :titre_video, :url_video, :description_video, :contenu, :date_publication) ');

    $query->bindvalue(':titre_video', $titre, PDO::PARAM_STR);
    $query->bindvalue(':url_video', $url, PDO::PARAM_STR);
    $query->bindvalue(':description_video', $descriptif, PDO::PARAM_STR);
    $query->bindvalue(':contenu', $contenu, PDO::PARAM_STR);
    $query->bindvalue(':date_publication', $date, PDO::PARAM_STR);
}

function getAllVideos()
{
    require('../../config/config.php');

    $GLOBALS['getAllVideos'] = $db->query('SELECT * FROM video');
}

function getVideo($id)
{
    require('../../config/config.php');

    $getVideo = $db->query(' SELECT * FROM video WHERE id_video = '.$id);
    $getVideo -> fetch();
}