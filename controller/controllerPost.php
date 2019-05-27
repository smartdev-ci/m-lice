<?php
include('../model/postModel.php');

    $image = 'IMG' . '' . $_FILES['image_post']['name'];
    $target = '../administration/upload/post/'.$image;

if (isset($_POST['poster'])) {
    try {
        if (move_uploaded_file($_FILES['image_post']['tmp_name'], $target)) {
            addPost();
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
