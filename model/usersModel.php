<?php

function newAdmin()
{
    require('../config/config.php');
    $image = 'PIC' . '' . $_FILES['photo_user']['name'];
    $target = '/mlice/administration/upload/admin/'.$image;

    $nom = $_POST['nom_user'];
    $prenom = $_POST['prenoms_user'];
    $birth = $_POST['date_user'];
    $sexe = $_POST['sexe_user'];
    $taille = $_POST['taille_user'];
    $contact = $_POST['contacts_user'];
    $mail = $_POST['email_user'];
    $pass = $_POST['password_user'];
    $pass2 = $_POST['confirm'];
    $fonction = $_POST['type_user'];


    if ($pass === $pass2) {
        $query = 'INSERT INTO users VALUES (NULL, :photo_user, :nom_user, :prenoms_user, :date_user, :sexe_user, :taille_user, :contacts_user, :email_user, :password_user, :type_user)';
        $statement = $db->prepare($query);

        $statement->bindvalue(':photo_user', $target, PDO::PARAM_STR);
        $statement->bindValue(':nom_user', $nom, PDO::PARAM_STR);
        $statement->bindValue(':prenoms_user', $prenom, PDO::PARAM_STR);
        $statement->bindValue(':date_user', $birth, PDO::PARAM_STR);
        $statement->bindValue(':sexe_user', $sexe, PDO::PARAM_STR);
        $statement->bindValue(':taille_user', $taille, PDO::PARAM_STR);
        $statement->bindValue(':contacts_user', $contact, PDO::PARAM_STR);
        $statement->bindValue(':email_user', $mail, PDO::PARAM_STR);
        $statement->bindValue(':password_user', $pass, PDO::PARAM_STR);
        $statement->bindValue(':type_user', $fonction, PDO::PARAM_STR);

        $statement->execute();
    }
}

function getAdmin()
{
    require('../config/config.php');

    $data = $db->query('SELECT * FROM users WHERE type_user = Admin');

    $GLOBALS['$userdata'] = $data->fetch();
}

function getUser()
{
    require('../config/config.php');
    $data = $db->query('SELECT * FROM users WHERE type_user = Normal');
    $GLOBALS['$userdata'] = $data->fetch();
}
