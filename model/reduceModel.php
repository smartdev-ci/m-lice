<?php
function addReduce()
{
    require('../config/config.php');

    $code = $_POST['code_promo'];
    $pourcentage =  $_POST['perc_promo'];
    
    
    $query = $db->prepare(' INSERT INTO reduce VALUES (NULL, :code_promo, :perc_promo) ');

    $query->bindvalue(':code_promo', $code, PDO::PARAM_STR);
    $query->bindvalue(':perc_promo', $pourcentage, PDO::PARAM_STR);

    $query -> execute();
}

function getAllReduce()
{
    require('../config/config.php');

    $getAllReduce = $db->query('SELECT * FROM reduce');
    $getAllReduce->fetch();
}

