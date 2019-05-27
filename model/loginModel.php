<?php

function login()
{
    require('../config/config.php');
    $query = "SELECT * FROM users WHERE email_user = :email_user AND password_user = :password_user";
    $statement = $db->prepare($query);
    $statement->execute(
        array(
            'email_user' => $_POST["email_user"],
            'password_user' =>  $_POST["password_user"]
        )
    );
    $data = $statement->fetch();

    // Recuperation des valeurs dans la base de données
    $id = $data['id_user'];
    $fonction = $data['type_user'];

    $count = $statement->rowCount();
    if ($count > 0) {
        $_SESSION['fonction'] = $fonction;
        // Verification des droits d'acccès
        if ($fonction == "Normal") {
            $_SESSION["nom_user"] = $data["nom_user"];
            $_SESSION["id_user"] = $id;
            header("location:/mlice/");
        } elseif ($fonction == "Admin") {
            $_SESSION["nom_user"] = $data["nom_user"];
            $_SESSION["id_user"] = $id;
            header("location:/mlice/admin");
        }
    } else {
        header("location:../index.php?login_failed");
    }
}
