<?php 
    if ($_SESSION['id_user'] == '' ) {
        header('location: /mlice');
    }